<?php

namespace App\Http\Controllers\admin;

use App\Enums\ContactStatus;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('isLoggedIn');
    }

    public function getAll()
    {
        $paginate = 9;
        $contacts = Contact::query();
        return view('admin.template.contact.contacts', [
            'items' => $contacts->orderBy('created_at', 'desc')->where('status', '!=', 0)->paginate($paginate),
            'paginate' => $paginate,
            'sum' => $contacts->count(),
        ]);
    }

    public function getDetail($id)
    {
        try {
            $contacts = Contact::find($id);
            if ($contacts != null && $contacts->status == ContactStatus::Unread){
                $contacts->status = ContactStatus::Read;
                $contacts->save();
            }else{
                session()->flash('fail','Không tìm thấy tin nhắn của khách hàng, vui lòng thử lại.');
                redirect()->back();
            }
            return view('admin.template.contact.detail', ['item' => $contacts]);
        } catch (\Exception $e) {
            session()->flash('fail', $e);
            return redirect()->back();
        }
    }

    public function search(Request $request)
    {
        try {
            $paginate = 9;
            $contacts = Contact::query()
                ->name($request)
                ->email($request)
                ->phone($request)
                ->status($request)
                ->orderBy('created_at','DESC');

            return view('admin.template.contact.contacts', [
                'items' => $contacts->paginate($paginate),
                'oldName' => $request->get('name'),
                'oldPhone' => $request->get('phone'),
                'oldEmail' => $request->get('email'),
                'paginate' => $paginate,
                'sum' => $contacts->count(),
                'status' => $request->get('status'),
            ]);
        } catch (\Exception $exception) {
            return $exception;
        }
    }

    public function updateStatus(Request $request)
    {
        $request->request->remove("_token");
        try {
//            $data = json_decode(file_get_contents("php://input"), true);
//            // lấy thông tin sản phẩm.
//            $orderId = $data['id'];
//            // lấy số lượng sản phẩm cần thêm vào giỏ hàng.
//            $orderStatus = $data['status'];
            $contactId = $request->get('id');
            $contactStatus = $request->get('status-update');
            $contact = Contact::find($contactId);
            if (!$contact->exists()) {
                return 'Không tìm thấy phản hồi';
            }

            $title = "";
            switch ($contactStatus) {
                case ContactStatus::Delete;
                    $title = "Đã xóa";
                    break;
                case ContactStatus::Unread;
                    $title = "Chưa đọc";
                    break;
                case ContactStatus::Read;
                    $title = "Đã đọc";
                    break;
            }

            $contact->status = $contactStatus;
            $contact->updated_at = Carbon::now('Asia/Ho_Chi_Minh');
            $contact->save();
            session()->flash('message', "Cập nhật trạng thái phản hồi $title, có mã là $contactId, thành công");
            return redirect()->back();
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function updateAllStatus()
    {
        try {
            $data = json_decode(file_get_contents("php://input"), true);
            $ids = $data['ids'];
            $status = $data['status'];
            Contact::whereIn('id', $ids)->update([
                'status' => $status,
                'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')
            ]);
            return json_encode($data);
        } catch (\Exception $e) {
            return $e;
        }
    }
}

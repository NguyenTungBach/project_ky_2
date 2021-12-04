<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    function getContact(){
        return view('client.page.contact.template');
    }

    function contact(){
        try {
            $data = json_decode(file_get_contents("php://input"), true);
            $contact = new Contact($data);
            $contact->created_at = Carbon::now('Asia/Ho_Chi_Minh');
            $contact->save();
//            $this->sendMail($data);
            return json_encode($data);
        } catch (\Exception $e) {
            return $e;
        }
    }

//    function sendMail($data)
//    {
//
//
//        Mail::send('client.mailOrder.mailOrder', ['order' => $data],
//            function ($message) use ($data) {
//                $message->to($data->email, 'Tutorials Point')
//                    ->subject("Chúng tôi đã nhận được phản hồi từ khách hàng tên ");
//                $message->from('rausachtdhhn@gmail.com', 'Cửa hàng Cần Rau');
//            });
//    }
}

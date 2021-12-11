<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Carbon\Carbon;

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
            return json_encode($data);
        } catch (\Exception $e) {
            return $e;
        }
    }

}

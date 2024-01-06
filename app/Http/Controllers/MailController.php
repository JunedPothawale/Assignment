<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function signupMail($name,$email,$password)
    {
        $data = array('name' => $name,'email'=>$email,'password'=>$password);
        Mail::send('component.mails.thank-you', $data, function ($message) use ($name,$email) {
            $message->to($email,$name)->subject('Thank You For Using Our Service');
            $message->from(env('MAIL_FROM_ADDRESS'),env('MAIL_FROM_NAME'));
        });
        return true;
    }
}

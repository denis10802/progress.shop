<?php

namespace App\Http\Controllers;

use App\Mail\MailController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailSetting extends Controller
{
    public function sendForm(Request $request)
    {

        $name = $request->name;
        $email=$request->email;
        $recipient = 'zakaz@progressshop.ru';


        Mail::to($recipient)->send(new MailController($name, $email));

        return redirect()->back()->with('success','Ваше сообщение успешно отправлено');

    }
}

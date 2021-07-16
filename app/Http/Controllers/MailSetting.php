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
        $telephone = $request->telephone;
        $recipient = 'zakaz@progressshop.ru';

        if (strlen($email) > 0 || strlen($telephone) > 0) {

            Mail::to($recipient)->send(new MailController($name, $email,$telephone));
            return redirect()->back()->with('success','Ваше сообщение успешно отправлено!!!');

        }

        return redirect()->back()->with('success','Ваше сообщение успешно отправлено!!!');

    }
}

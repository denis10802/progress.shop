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
        $recipient = 'denis03.88@mail.ru';


        Mail::mailer('smtp')->to($recipient)->send(new MailController($name, $email));

    }
}

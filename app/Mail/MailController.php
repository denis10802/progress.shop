<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailController extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;



    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email)
    {
        $this->name =  $name;
        $this->email = $email;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('users.mail')->with([
            'name'=>$this->name,
            'email'=>$this->email
        ])->subject('новое письмо');

    }
}

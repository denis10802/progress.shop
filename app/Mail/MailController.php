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
    public $telephone;



    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $telephone)
    {
        $this->name =  $name;
        $this->email = $email;
        $this->telephone =$telephone;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('site.mail')->with([
            'name'=>$this->name,
            'email'=>$this->email,
            'telephone'=>$this->telephone
        ])->subject('Форма обратной связи с сайта progressshop.ru');

    }
}

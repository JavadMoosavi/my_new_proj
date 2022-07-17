<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     * 
     *
     * @return void
     */

     public $name;
     public $title;
     public $verificationCode;

    public function __construct($name, $title, $verificationCode)
    {
        $this->name = $name;
        $this->title = $title;
        $this->verificationCode = $verificationCode;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email')
        ->with(['name' => $this->name, 'title' => $this->title, 'verificationCode' => $this->verificationCode])
        ->subject('تایید ارسال اثر جشنواره خوارزمی');
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InternalUsersCreateMail extends Mailable
{
    use Queueable, SerializesModels;
    public $email;
    public $password;
    public $firstname;
    

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $password,$firstname)
    {
        $this->email      = $email;
        $this->password   = $password;
        $this->firstname = $firstname;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('laravelframework.07@gmail.com')->subject('Your S-ILF MIS Applications login details ')->view('admin.adminPasswordMailTemplate')->with('email',$this->email,'password',$this->password,'firstname',$this->password); 
    }
}

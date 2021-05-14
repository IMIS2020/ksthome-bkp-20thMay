<?php
namespace App\Mail\ReviewMail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AcceptMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     public function __construct($data)
     {
         $this->data = $data;
     }

    /**
     * Build the message.
     *
     * @return $this
     */
     public function build()
     {
         return $this->from('laravelframework.07@gmail.com')->subject('Accept application')->view('admin.manageApplication.ReviewMailTemplates.acceptMailTemplate')->with('data', $this->data); 
     }
}

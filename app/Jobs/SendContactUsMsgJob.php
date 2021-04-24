<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\ModelScholarship\ApplicationScheduleTable;
use Mail;
use App\Mail\contactUsMail;
use App\ModelScholarship\DomainName;
use App\ModelScholarship\DomainValues;

class SendContactUsMsgJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $email;
    public $data;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    
    public function __construct($email,$data)
    {
        $this->email = $email;
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
    
        $a = ApplicationScheduleTable::where("sessionId",1)->first()->contactPersonEmailId;
        // $email = new contactUsMail();
        Mail::to('birth.user1@gmail.com')->cc($this->email)->send(new contactUsMail($this->data));
        // Mail::to($this->details['email'])->send($email);
    }
}

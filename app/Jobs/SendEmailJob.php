<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;
use App\Mail\Welcomemail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    // public $data;

    public function __construct()
    {
        // $this->data=$data;

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to('mikezmash@gmail.com')->send(new Welcomemail());
        // Mail::send('mail',$data,function($message) use ($data){
        //     $message->from($data['email']);
        //     $message->to('michaelkimani854@gmail.com');
        //     $message->subject($data['subject']);
        // });
    }
}

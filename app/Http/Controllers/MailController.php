<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use Illuminate\Support\Facades\Mail;
use App\Mail\Mailtrap;
use App\Mail\Welcomemail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function index(){
        Mail::to('michaelkimani854@gmail.com')->send(new Mailtrap());
        return 'Email sent';
    }
    public function welcome(){
        // SendEmailJob::dispatchNow();
        SendEmailJob::dispatch()
        ->delay(now()->addSeconds(1));
        return 'Email sent in under 1 sec!';

    }
    public function mail(Request $request){
        // $data=array(
        //     'name'=>$request->name,
        //     'email' =>$request->email,
        //     'bodyMessage'=>$request->message

        // );
        //  SendEmailJob::dispatch($data)
        // ->delay(now()->addSeconds(1));

    }
}

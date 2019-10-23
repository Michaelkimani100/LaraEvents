<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\Mailtrap;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function index(){
        Mail::to('michaelkimani854@gmail.com')->send(new Mailtrap());
    }
}

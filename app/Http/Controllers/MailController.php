<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use App\Mail\DemoMail;

class MailController extends Controller
{
    public function index()
    {
        $mailData = [
            'title' => 'Mail from laeavel 9 app For Testing',
            'body' => 'This is for testing email using smtp.'
        ];
         
        Mail::to('test@gmail.com')->send(new DemoMail($mailData));
           
        dd("Email is sent successfully.");
    }
}

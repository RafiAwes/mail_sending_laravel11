<?php

namespace App\Http\Controllers;

use Mail;
use App\Models\email;
use App\Mail\DemoMail;
use App\Models\maildetails;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function index(Request $request)
    {
        $mails = email::all();
        $mailData = [
            'title' => $request->title,
            'body' => $request->body,
        ];
        maildetails::insert([
            'title' => $request->title,
            'body' => $request->body,
        ]);
        // foreach ($mails as $mail) {
        //    dd($mail->mail);
        // }

        foreach ($mails as $mail) {
            Mail::to($mail->email)->send(new DemoMail($mailData));
        }

        // Mail::to('rafiawes4897@gmail.com')->send(new DemoMail($mailData));

        return back();
    }
}

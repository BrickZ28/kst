<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactMessageController extends Controller
{
    public function create() {
        return view('contact');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'fname'     => 'required',
            'email'     => 'required|email',
            'phone'     => 'nullable|min:10|max:15',
            'message'   => 'required|min:3',
        ]);

        Mail::send('emails.contact-message', [
            'msg' => $request->message
        ], function($mail) use ($request){
            $mail->from($request->email, $request->fname);

            $mail->to('brickz28@comcast.net')->subject('Knuths Sweet Treats Message');
        });

        return redirect()->back()->with('sent', 'Your message has been sent.  We will return to you shortly');
    }
}

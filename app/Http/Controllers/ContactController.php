<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller
{
    public function create()
    {
        return view('pages.contact');
    }


    public function store(ContactFormRequest $request)
    {

        \Mail::send('auth.emails.contact',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'user_message' => $request->get('message')
            ), function($message)
            {
                $message->from('phpmailer43@gmail.com','Personal Finance Manager');
                $message->to('ipreet91@gmail.com', 'Admin')->subject('Feedback from a user');
            });

        return \Redirect::route('contact')->with('message', 'Thank you '.$request->get('name').' for contacting us!');


    }


}

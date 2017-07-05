<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Mail\Mailer;

class MailController extends Controller
{
    public function index(){

        $email = "nucurity@gmail.com";
        Mail::to($email)
            ->send(new Mailer());
        return "Mail send successful";
    }
}

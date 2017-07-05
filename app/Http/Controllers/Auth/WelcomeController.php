<?php
/**
 * Created by PhpStorm.
 * User: nucur
 * Date: 11/5/2016
 * Time: 1:01 AM
 */

namespace App\Http\Controllers\Auth;


class WelcomeController
{

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index(){
        return view('welcome');
    }

}
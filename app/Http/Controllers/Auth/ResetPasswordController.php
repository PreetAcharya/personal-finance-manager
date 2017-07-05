<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Str;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function forgotpassword(){
        return view('auth.passwords.email');
    }
    public function sendResetLinkEmail(Request $request)
    {
        \Mail::send('auth.emails.password',
            array(
                'token' => $request->token,
                'email' => $request->email,
            ), function($message) use ($request)
            {
                $message->from('phpmailer43@gmail.com','Personal Finance Manager');
                $message->to($request->email, $request->emails)->subject('Personal Finance Manager');
            });
        return view('auth.passwords.email')->with('success','Email sent successfully');
    }

    public function showResetFrm(Request $request, $token=null)
    {
        return view('auth.passwords.reset')->with(
            ['token' => $token, 'email' => $request->email ]
        );
    }
    public function resetPass(Request $request)
    {
        $this->validate($request,
            [
                'email' => 'required|email',
                'password' => 'required|confirmed|min:6',
            ]
        );
        $cnt = User::selectRaw('id,password,remember_token')->where('email','=',$request->email)->get();

        if($cnt->count()>0)
        {
            $input_pass = $request->password;
            foreach ($cnt as $id){
                $userdata = User::find($id->id);
                $userdata->password = $input_pass;
                $userdata->save();
            }
            return view('auth.login')->with('success','Password Changed Successfully');
        }
        else{
            return view('auth.login')->with('err','We dont have this email address registered');
        }

    }

}

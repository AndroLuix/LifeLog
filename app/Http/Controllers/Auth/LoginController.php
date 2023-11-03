<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        $title = "Login";
        return view("welcome",compact("title"));
    }

    public function login(Request $request){
       $credentials =  $request->validate([
            'email'=>'required',
            'password'=>'required'
        ] );

        if(Auth::attempt($credentials)){
            return redirect()->route('homepage');
        }else{
            return redirect()->route('login')->with('error', 'Invalid credentials');
        }
    }

    /**
     * function for reset password
     */

    public function forgotPassword(){
        $title = 'Reset Password';
       
        return view('forgot-password',compact('title'));

    }

    public function resetPassword(Request $request){
        $email = auth()->user();

        dd($email);

       // auth()->user()->update(['password'=> bcrypt($request->password)]);

       // return redirect('/forgot-password')->with('success', 'You\'ve just changed your password');
    }

    
}

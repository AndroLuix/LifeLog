<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view("welcome");
    }

    public function login(Request $request){
       $credentials =  $request->validate([
            'email'=>'required',
            'password'=>'required'
        ] );

        if(Auth::attempt($credentials)){
            return redirect()->intended('/home');
        }else{
            return redirect()->route('login')->with('error', 'Invalid credentials');
        }
    }
}

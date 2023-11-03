<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        $title = "Register";
        return view('Auth.register',compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'lastName'=>'required',
            'gender'=>'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:8|same:password_confirmation',
        ]);

        
       
        $user = User::create([
            'name' => $request->name,
            'lastName'=> $request->lastName,
            'gender'=> $request->gender,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);

        }
}

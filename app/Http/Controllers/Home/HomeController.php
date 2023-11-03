<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function index(){
      $title="Home";
     $user = auth()->user();
        return view('Home.homepage',compact('user','title'));
     }
}

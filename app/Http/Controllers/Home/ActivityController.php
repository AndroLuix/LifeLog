<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function show(){
        return view("Home.activity");
    }

    public function store(Request $request){
        $activity = new Activity();
        

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{

    function show(){
        return view('user.users')
        ->with('name','benz')
        ->with('title','Laravel EIEI');
    }
}

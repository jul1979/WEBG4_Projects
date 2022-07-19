<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloCtrl extends Controller
{
    public function index($name): string
    {
        return view('hello',['name'=>$name]);
    }
    //
}

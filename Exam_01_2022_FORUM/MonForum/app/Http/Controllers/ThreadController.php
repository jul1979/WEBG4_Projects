<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ThreadController extends Controller
{
    //
    public function index()
    {
        $data=Thread::filsDiscussions();
        return view('home',['fils'=>$data]);
        //Log::info($data);


    }
}

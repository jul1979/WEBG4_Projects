<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class TodoCtrl extends Controller
{
    public function index()
    {
        $todos = Todo::findAll();
        return view('todo2', ['todos' => $todos]);
    }

    public function detail($id)
    {
        $todo = Todo::findById($id);
        Log::info($todo);
        return view('todo3', ['todo' => $todo]);
    }

    public function store(Request $request)
    {

       $description=request('description');
       $name=request('name');

        DB::table('todos')->insert([
            'name' => $description,
            'description' => $name
        ]);
        return redirect()->route('todolist');
    }
    public function projectDetail($id){
       //$response= Http::dd()->get('https://git.esi-bru.be/api/v4/projects/');
       //dd($response->json('id'));
       return  Http::acceptJson()->get('https://git.esi-bru.be/api/v4/projects/');
    }
}

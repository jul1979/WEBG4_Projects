<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class MessageController extends Controller
{
    //
    public function index($id)
    {
       $messages= Message::messagesById($id);
        return view('detail',['messages'=>$messages]);
    }




    public function store(Request $request,$id)
    {
        $author = $request->input('author') ;
        $text = $request->input('text') ;
        $password= $request->input('password');
        $p=Message::passwordByAuthor($author);
        $data=array_map(fn($value): string => $value->password,$p);
        $pswfromDB=array_values($data)[0];
        if($password==$pswfromDB){
            $id = DB::table('message')->insertGetId(
                ['text' => $text, 'author' => $author,'threadId'=>$id]
            );
            return response()->json([
                'status'=>200,
                'id'=>$id,
            ]);
        }
        return response()->json([
            'errors' => "Password does not match",
        ], 422);
        //return redirect('/') ;
        }
}

<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Thread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class ThreadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function allThreads()
    {
        $threads= Thread::threads();
    return response()->json($threads,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function threadMessages($id)
    {
        $messages = Thread::threadMess($id);
        return response()->json($messages);
    }
    public function addAMessage(Request $request){
        //Log::info(request('login'));
        //Log::info(request('channel_id'));
        //Log::info(request('message'));
       /* $validator=Validator::make($request->all(),[
            'threadId'=>'required',
            'author'=>'required',
            'text'=>'required'
        ]);
        if($validator->fails()){
            return response()->json(['status'=>400,
                'errors'=>$validator->messages(),
                ]);
        }else{*/
            /*$message=new Message();
            $message->threadId=request('channel_id');
            $message->author=request('login');
            $message->text=request('content');
            $message->save();*/
            DB::table('message')->insert([
                'threadId'=>request('channel_id'),
                'author'=>request('login'),
                'text'=>request('message')
            ]);
            return response()->json([
                'status'=>200,
                'errors'=>'Message successfully added',
            ]);
       // }
       // $login=request('login');
        //$content=request('content');
        //dd($content,$login);
        //Log::info($content);
        //save data here
       /* return view('thread',['user'=>$login,
            'channels'=> Thread::threads()
        ]);*/
    }
}

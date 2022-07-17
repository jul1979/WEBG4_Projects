<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Thread extends Model
{
    use HasFactory;

    public static function threads(){
        return DB::table('thread')
            ->select('*')
            ->get();
    }

    public static function threadMess($id){
        $messages = DB::table('message')
            ->where('threadid', '=', $id)
            ->get();
        return $messages;
    }

}

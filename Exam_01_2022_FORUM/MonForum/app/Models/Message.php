<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Message extends Model
{
    use HasFactory;

    public static function messagesById($id)
    {
        $data =DB::select( 'select * from message WHERE threadId=?',[$id]);
        return $data;
    }

    public static function passwordByAuthor($author){
        $data =DB::select( 'select password from user WHERE login=?',[$author]);
        return $data;
    }
}

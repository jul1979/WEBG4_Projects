<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use PDO;

class Todo extends Model
{
    use HasFactory;

    public static function findAll()
    {
        $todos = DB::select("select * from todos");
        /*$todos = DB::table('todos')
            ->select('name', 'id')
            ->get();*/
        $array = json_decode(json_encode($todos), true);
        return $array;
    }

    public static function findById($id)
    {
        $todo = DB::table('todos')
            ->select( 'description')
            ->where('id', '=',$id )
            ->get();
        $array = json_decode(json_encode($todo), true);
        return $array;
    }

}

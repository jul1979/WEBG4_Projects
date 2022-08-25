<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Ramsey\Uuid\Type\Integer;

class Album extends Model
{
    use HasFactory;


    public static function lesMusiciens()
    {

        return DB::select('select * from musician JOIN lineup on musician.id=lineup.musician');
    }



    public static function albumAll()
    {

        return DB::select('select id,title,cover,artist,year from album order by year ASC');
    }
}

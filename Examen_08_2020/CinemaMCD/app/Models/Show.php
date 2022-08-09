<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Show extends Model
{
    use HasFactory;

    public static function  showsForAMovie($idMovie)
    {

        $movies = DB::select('SELECT start,room.idRoom,capacity FROM movie join shows on movie.idMovie=shows.idMovie
        join room on room.idRoom=shows.idRoom where movie.idMovie=?',[$idMovie]);
        return $movies;

    }
}

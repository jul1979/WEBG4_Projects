<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Movie extends Model
{
    use HasFactory;

    public static function getAllMovies()
    {
        $movies = DB::select('SELECT * from movie');
        return $movies;

    }

    public static function getMovieById($movie)
    {
        $data = DB::select('SELECT * from movie where movie.idMovie=?', [$movie]);
        return $data;
    }

    public static function incrementLikes($movieId)
    {
         DB::table('movie')
            ->where('idMovie', $movieId)
            ->increment('voteCount', 1);

    }
}

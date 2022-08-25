<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlbumController extends Controller
{
    //




    public static function albumWithArtists()
    {
        $albums = Album::albumAll();
        $musiciens = Album::lesMusiciens();


        return view('albums', ['albums' => $albums, 'musiciens' => $musiciens]);
    }
}

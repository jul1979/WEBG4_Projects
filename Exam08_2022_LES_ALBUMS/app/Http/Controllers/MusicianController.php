<?php

namespace App\Http\Controllers;

use App\Models\Musician;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MusicianController extends Controller
{
    //

    public function getAlbums($id)
    {

        $data = Musician::getAlbums($id);

        return response()->json(['albums' => $data]);
    }

    public function getMusicians()
    {
        $musicians = Musician::musicianList();

        return view('musicians', ['musicians' => $musicians]);
    }
}

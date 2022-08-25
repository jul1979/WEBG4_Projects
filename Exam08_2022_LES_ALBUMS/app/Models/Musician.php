<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Musician extends Model
{
    use HasFactory;

    public static function getAlbums($id)
    {
        $data = DB::select('select album.id,album.artist,album.title,album.year,album.cover from album join lineup on album.id=lineup.album where lineup.musician=? ORDER BY album.year', [$id]);

        return $data;
    }

    public static function musicianList()
    {
        return DB::select('select * from musician');
    }
}

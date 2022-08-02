<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Thread extends Model
{
    use HasFactory;

    public  static function filsDiscussions()
    {
        $data= DB::select('SELECT * FROM thread');
        return $data;
        //$pNoms=array_map(fn($value): string => $value->title,$data);
        //return $pNoms;
    }
}

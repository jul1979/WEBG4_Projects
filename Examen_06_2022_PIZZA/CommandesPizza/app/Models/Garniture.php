<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Garniture extends Model
{
    use HasFactory;

    public static function ingredientsAll()
    {
        $ingredients=DB::select('SELECT * FROM garniture');
        return $ingredients;
    }
}

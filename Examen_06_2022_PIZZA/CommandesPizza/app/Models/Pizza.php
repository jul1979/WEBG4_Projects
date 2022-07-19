<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Pizza extends Model
{
    use HasFactory;

    public static function allPizzas()
    {
        $pizzas=  DB::select('select * from pizza');
      return $pizzas;
    }

    public static function pids()
    {
        $data=  DB::select('select pNom from pizza');
        $pNoms=array_map(fn($value): string => $value->pNom,$data);
        return $pNoms;

    }

    public static function allPizzasWithGarnitures()
    {
        $data=[];
        $pids=self::pids();
        foreach ($pids as  $pid){
            $garnitures=self::garnitures($pid);
            $data+=[$pid=>$garnitures];
        }
        return $data;
    }

    public static function garnitures($pNom)
    {

       // $garnitures =DB::select( 'select garniture.gNom from pizza join contient on pizza.pId=contient.cPizza join garniture on garniture.gId=contient.cGar where pizza.pId=?',[$pid] );
        $data =DB::select( 'select garniture.gNom from pizza join contient on pizza.pId=contient.cPizza join garniture on garniture.gId=contient.cGar where pizza.pNom=?',[$pNom] );
        //$garnitures =DB::select( 'select * from pizza join contient on pizza.pId=contient.cPizza join garniture on garniture.gId=contient.cGar');
       // return json_decode(json_encode($garnitures), true);
        $garnitures=array_map(fn($value): string => $value->gNom,$data);
        return $garnitures;
       // $users = DB::select('select * from users where active = ?', [1]);
    }

    public static function listIngredientsByName($name)
    {
        $ingredients=DB::select('select garniture.gNom from pizza join contient on pizza.pId=contient.cPizza join garniture on garniture.gId=contient.cGar where pizza.pNom=?',[$name]);
        return $ingredients;
    }
}

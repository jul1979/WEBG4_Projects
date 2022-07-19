<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PizzaController extends Controller
{
    //
    public function index()
    {

        $data=Pizza::allPizzasWithGarnitures();
        //return view('pizzas',['pizzas'=>$pizzas,'garnitures'=>$garnitures]);
        return view('pizzas',['pizzas'=>$data]);
        //foreach ($pids as $pid)
        //Log::info($data);

    }

    public static function listIngredientsApi($name)
    {
        $ingredients=Pizza::listIngredientsByName($name);
        $data=array_map(fn($value): string => $value->gNom,$ingredients);
        return response()->json(['ingredients'=>$data]);

    }


}

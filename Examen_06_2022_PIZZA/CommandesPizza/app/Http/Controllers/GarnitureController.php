<?php

namespace App\Http\Controllers;

use App\Models\Garniture;
use App\Models\Pizza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GarnitureController extends Controller
{
    public function index()
    {

        $pizzas=Pizza::allPizzas();
        $ingredients=self::ingredientsData();
        //Log::info($pizzas);
        return view('commandes',['pizzas'=>$pizzas,'ingredients'=>$ingredients]);
    }

    public static function ingredientsData()
    {
        $data=Garniture::ingredientsAll();
        return $data;
        //Log::info($data);
    }

    public function phpinfo()
    {
     phpinfo();
    }
}

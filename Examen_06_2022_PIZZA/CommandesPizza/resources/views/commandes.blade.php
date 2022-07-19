@extends('template')
@section('maintitle','COMMANDER')

@section('title', 'PIZZA A GOGO-COMMANDER')
@section('content')
    <h3>Sélectionner votre Pizza</h3>
    <p>
        Vous pouvez sélectionner votre pizza.
    </p>
    <p>Vous pouvez aussi ajuster directement les ingrédients.</p>
    <p> Attention,changer de pizza redéfinit les ingrédients.</p>
    <form action="">
        @csrf
        <label for="pizzas">Choisissez une pizza:</label>
        <select name="pizzas" id="pizzas"  class="form-select" aria-label="Default select example">
            <option value=""></option>
            @foreach($pizzas as $pizza)
                <option value="{{$pizza->pNom}}">{{$pizza->pNom}}</option>
            @endforeach
        </select>
        <br><br>
        <fieldset class="form-group">
            <legend class="mt-4">Ingrédients</legend>
            @foreach($ingredients as $ingredient)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="{{$ingredient->gNom}}" value="{{$ingredient->gNom}}" id="{{$ingredient->gNom}}">
                <label class="form-check-label" for="flexCheckDefault">
                 {{$ingredient->gNom . '(+'.$ingredient->gPrix.'€)'}}
                </label>
            </div>
            @endforeach
        </fieldset>
    </form>
@endsection


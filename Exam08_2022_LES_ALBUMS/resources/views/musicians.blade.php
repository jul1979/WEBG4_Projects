@extends('template')

@section('maintitle','Liste des musiciens')

@section('content')
<h1>Sélectionnez un ou des musiciens</h1>

@foreach ($musicians as $musician)




<div class="form-check">
  <input class="form-check-input checkbox_check" type="checkbox" name="cricketer" value="" id="{{ $musician->id }}">

  {{ $musician->name .' '.$musician->firstname }}
  </label>
</div>

@endforeach


@endsection

@extends('template')
@section('maintitle','NOS PIZZAS')

@section('title', 'PIZZA A GOGO_NOS PIZZA')
@section('content')

<ul>
        @foreach($pizzas as $pizza=>$value)
              <li>
                  {{$pizza}}
              </li>
    <ul>
            @foreach($value as $item)
               <li> {{$item}} </li>
        @endforeach

    </ul>
    @endforeach
</ul>

@endsection


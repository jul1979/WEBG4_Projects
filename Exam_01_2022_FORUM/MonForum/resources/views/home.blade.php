@extends('template')

@section('title', 'FORUM DE DISCUSSION')

@section('maintitle','SUJETS DE DISCUSSION')

@section('content')
    @foreach($fils as $fil)
        <a href="{{route('detail',$fil->id)}}"> <p>{{$fil->title}}</p> </a>
    @endforeach
@endsection

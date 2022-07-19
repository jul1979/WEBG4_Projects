@extends('canevas')
@section('title','Tâche Apprendre laravel')
@section('sidebar')
    <p> <h1>Tâche apprendre Laravel</h1></p>
    <p><a href="{{url('todo/')}}">Retour à la liste</a></p>
@endsection

@section('content')

    @foreach($todo as $t)
        <p>{{$t['description']}}</p>
    @endforeach
@endsection

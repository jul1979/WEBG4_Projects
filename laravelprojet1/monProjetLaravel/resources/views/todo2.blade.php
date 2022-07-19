@extends('canevas')
@section('title','TODO')
@section('sidebar')
<h1>Liste des tâches</h1>
@endsection
@section('content')

    @if (count($todos) === 0)
    <p>Rien à faire pour le moment</p>
@else
    <ul>
        @foreach ($todos as $todo)
{{--            <a href="{{ url('todo/' . $todo['id']) }}">  <li > {{ $todo['name'] }}</li></a>--}}
            <a href="{{ route('todo.detail' ,$todo['id']) }}">  <li > {{ $todo['name'] }}</li></a>
        @endforeach
    </ul>
@endif

    <form  method="post" action="/todo">
            @csrf
        <div class="form-group">
            <label for="name">nom de la tâche</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="nom de la tâche">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description"  placeholder="description">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

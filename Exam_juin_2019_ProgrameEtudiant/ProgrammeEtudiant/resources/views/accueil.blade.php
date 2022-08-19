@extends('template')
@section('maintitle','PROGRAMME ETUDIANT')

@section('title', 'CINEMA')
@section('content')

    <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Liste des Etudiants</a>
        <div class="dropdown-menu" style="">
            @foreach ($students as $student)
{{--            <a class="dropdown-item detail" id="{{$student->id}}" href="#">{{$student->name .' - '. $student->total_credits }}</a>--}}
            <button class="dropdown-item detail btn btn-link"   id="{{$student->id}}"  >{{$student->name .' - '. $student->total_credits }}</button>
            @endforeach
        </div>
    </div>
    <div id="shows" hidden >
        <table class="table">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">credits</th>
            </tr>
            </thead>
            <tbody>


        </table>
    </div>

@endsection



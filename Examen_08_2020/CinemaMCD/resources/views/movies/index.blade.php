@extends('template')
@section('maintitle','LISTE DES FILMS')

@section('title', 'CINEMA')
@section('content')

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Film</th>
            <th scope="col">Likes</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($movies as $movie)
        <tr>
            <td><button type = "button" id="{{$movie->idMovie}}" class = "btn btn-link detail" onclick="showTable()">{{$movie->title}}</button></td>
            <td>{{$movie->voteCount}}</td>
            <form action="{{ route('liker', ['idMovie' => $movie->idMovie]) }}" method="post">
                @csrf
                <input class="text-lg border-1" type="hidden" id="movieId" name="movieId" value="{{$movie->idMovie}}">
                <td> <button type="submit" class="btn btn-primary">Liker</button></td>
            </form>
        </tr>
        @endforeach
        </tbody>
    </table>

    <div id="seances" hidden>
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">jour</th>
                <th scope="col">heure</th>
                <th scope="col">salle #</th>
                <th scope="col">Capacite</th>
            </tr>
            </thead>
            <tbody id="shows">

            </tbody>
        </table>
    </div>



@endsection

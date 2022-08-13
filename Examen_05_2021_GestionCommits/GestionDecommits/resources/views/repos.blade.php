
@extends('template')
@section('maintitle','TOUS LES DéPÔTS')

@section('title', 'TOUS LES DéPÔTS')
@section('content')

    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Nom du Dépôt</th>
            <th scope="col">Nom de l'utilisateur</th>
            <th scope="col">Nombre de commits</th>
        </tr>
        </thead>
        <tbody>
        @foreach($repos as $repo)
            <tr class="table-active">
                <td><button type="button" class="btn btn-link detail" id="{{$repo->id}}">{{$repo->depot}}</button> </td>
                <td>{{$repo->utilisateur}}</td>
                <td>{{$repo->commits}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div id="info" hidden>

    </div>






@endsection

@extends('template')

@section('title', 'FORUM DE DISCUSSION')

@section('maintitle','MESSAGES')

@section('content')

    <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">AUTEUR</th>
                <th scope="col">MESSAGE</th>
                <th scope="col">DATE DE PUBLICATION</th>
            </tr>
            </thead>
            <tbody>
            @foreach($messages as $message)
            <tr class="table-active">
                <td>{{$message->author}}</td>
                <td>{{$message->text}}</td>
                <td>{{$message->date}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>

    <br><br><br>
    <form action="">
        <div class="mb-3">
            <label for="userName" class="form-label">Nom d'utilisateur</label>
            <input type="text" class="form-control" id="userName" >
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de Passe</label>
            <input type="password" class="form-control" id="password">
        </div>
        <div class="mb-3 form-check">
            <textarea class="form-control" placeholder="Votre message ici" id="message"></textarea>
            <label for="message">Message</label>
        </div>
        <div>
            <input type="hidden" id="threadId" name="" value="{{$message->threadId}}">
        </div>
        <button  id="btn" type="submit"  class="btn btn-primary">Envoyer</button>

    </form>
@endsection

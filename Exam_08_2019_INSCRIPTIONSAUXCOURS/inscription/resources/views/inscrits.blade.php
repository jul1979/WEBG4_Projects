@extends('template')


@section('content')

<h1>Liste des Cours</h1>


<table class="table">

  <thead>
    <tr>

      <th scope="col">Sigle</th>
      <th scope="col">Libelle</th>
      <th scope="col">NbEtudiants</th>
    </tr>
  </thead>
  <tbody>



    @foreach ($cours as $cour)
    <tr>
      <td> {{ $cour->cid }}</td>
      <td> {{ $cour->title }}</td>
      <td> {{ $cour->Nb_Etudiants }}</td>
    </tr>
    @endforeach


  </tbody>

</table>











@endsection
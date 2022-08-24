@extends('template')


@section('content')



<div class="container">

  <div class="col">

    <table id="info" class="table">

      <thead>
        <tr>

          <th scope="col">Matricule</th>
          <th scope="col">Nom</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($students as $student)
        <tr>
          <td>{{ $student->id }}</td>
          <td>{{ $student->name }}</td>
        </tr>
        @endforeach





      </tbody>

    </table>
  </div>

</div>






@endsection
@extends('template')

@section('content')
<form accept-charset="UTF-8">

  <div class="container text-center">
    <div class="row">
      <div class="col">


        <select class="custom-select" id="aioConceptName">
          @foreach ($cours as $cour)
          <option value="{{ $cour->id}}">{{ $cour->title}}</option>
          @endforeach
        </select>
      </div>
      <div class="col">
        <select class="custom-select" id="inputGroupSelect">
          @foreach ($students as $student)
          <option value="{{ $student->id}}">{{ $student->name}}</option>
          @endforeach
        </select>


      </div>

      {{-- <table class="table">

        <thead>
          <tr>

            <th scope="col">Sigle</th>
            <th scope="col"> Libellé</th>
          </tr>
        </thead>
        <tbody>



          @foreach ($cours as $cour)
          <tr>
            <td> {{ $cour->id }}</td>
            <td><button id="{{ $cour->id}}" class="cours btn btn-link">{{ $cour->title
                }}</button> </td>
          </tr>
          @endforeach


        </tbody>

      </table>
    </div>
    <div class="col">

      <table id="info" class="table" hidden>

        <thead>
          <tr>

            <th scope="col">Matricule</th>
            <th scope="col">Nom</th>
          </tr>
        </thead>
        <tbody id="shows">





        </tbody>

      </table>
    </div>
  </div> --}}




  </div>
  <button class="btn btn-primary" id="addStudent" type="submit">AJOUTER</button>

</form>



@endsection
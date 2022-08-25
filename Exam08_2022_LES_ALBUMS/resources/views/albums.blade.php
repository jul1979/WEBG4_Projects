@extends('template')

@section('maintitle','Liste des Albums et des artistes')

@section('content')




<ul>
  @foreach($albums as $album)
  <li>
    <img src="{{url('/' . $album->cover)}}" alt="no image" />
  </li>


  <li>
    {{$album->title}}
  </li>
  <li>
    {{$album->year}}
  </li>
  <ul>

    @foreach ($musiciens as $musicien)


    @if ( $album->id ==$musicien->album)

    <li>
      <button type="button" class="btn btn-link" id="{{ $musicien->id }}">
        {{$musicien->firstname .' '. $musicien->name}}
      </button>

    </li>

    @endif
    @endforeach

  </ul>






  @endforeach
</ul>

@endsection
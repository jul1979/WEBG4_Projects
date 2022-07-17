@extends('template')

@section('title', 'CHANNELS')
@section('maintitle','CHANNELS')
{{--    <span>CHANNELS</span>--}}


@section('content')

    <p>connected user is:{{$user}}</p>
    <br><br>
    <ul>
        @foreach ($channels as $channel)
            <button type = "button" id="{{'chan'. $channel->id}}" onclick ="displayChannels({{$channel->id}})"> {{ $channel->title}} </button>
        @endforeach
    </ul>
    <div id="list"></div>
    <div id="container">
        <form id="myform" method="post"  >
            @csrf
         <input type="text " hidden="hidden" id="login" name="login" value="{{$user}}">
         <input type="number" hidden="hidden" id="channel_id" name="channel_id">
            <input type="text " hidden="hidden" id="message" name="message" >
            <input type="submit" id="btn" hidden="hidden" value="Envoyer">
        </form>
    </div>
    <div>
        <ul id="saveform_errList"></ul>
    </div>
@endsection

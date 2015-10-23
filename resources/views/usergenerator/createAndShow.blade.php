@extends('usergenerator.create')

@section('content')
  @parent
  <br><br>
  @foreach($users as $arrayvalue)
    <ul class = "list-group">
    @foreach($arrayvalue as $value)
      <!-- <li> {{$value}} </li> -->

         <li class = "list-group-item">{{$value}}</li>

    @endforeach
    </ul>

  @endforeach

@stop

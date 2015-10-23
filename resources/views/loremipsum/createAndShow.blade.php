@extends('loremipsum.create')

@section('content')
  @parent
  <br><br>
  @foreach($paragraphs as $value)
    <p> {{$value}} </p>
  @endforeach

@stop

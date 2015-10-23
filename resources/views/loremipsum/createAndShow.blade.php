<!-- This is grandchild page.  -->
<!-- loremipsum.create extends master.layout. This page extends loremipsum.create -->
@extends('loremipsum.create')

@section('content')
  <!-- In content section of master.layout, first load parent details, later add details from this page. -->
  @parent
  <br><br>

  <!-- extract each paragraph from paragraphs array and display -->
  @foreach($paragraphs as $value)
    <p> {{$value}} </p>
  @endforeach

@stop

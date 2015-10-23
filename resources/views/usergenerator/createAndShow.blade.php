<!-- This "grandchild" page of master.layout -->
@extends('usergenerator.create')

@section('content')
  <!-- Load parent content first to content section -->
  @parent
  <br><br>

  <!-- extract arrays from the users array -->
  @foreach($users as $arrayvalue)
    <!-- extract individual's detail from each array and disp as list-group -->
    <ul class = "list-group">
    @foreach($arrayvalue as $value)
         <li class = "list-group-item">{{$value}}</li>
    @endforeach
    </ul>
  @endforeach

@stop

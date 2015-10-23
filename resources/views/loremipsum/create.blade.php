@extends('layouts.master')

@section('title')
  Create Lorem Ipsum paragraphs
@stop

@section('content')

<form method="post" action="/lorem-ipsum">
  <input type='hidden' name='_token' value='{{ csrf_token() }}'>
  <label>Number of paragraphs:</label>
  <select name="number">
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
  </select>
  <br><br>
  <button type = "submit" class = "btn btn-info">Generate paragraphs</button>
</form>

@stop

    {{-- Main page content will be yielded here --}}
    @yield('result')

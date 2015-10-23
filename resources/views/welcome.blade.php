@extends('layouts.master')

@section('title')
  Project-3 Developer's friend
@stop

@section('content')
  <h1><span class =" label label-default">Developer's Best Friend</span></h1>
  <!-- <h1>Developer's Best Friend</h1> -->
  <h2>Lorem Ipsum Generator</h2>
  <blockquote>
     In publishing and graphic design, lorem ipsum is a placeholder text commonly used to demonstrate the graphic elements of a document or visual presentation.
     By replacing the distraction of meaningful content with filler text of scrambled Latin it allows viewers to focus on graphical elements such as font, typography, and layout.
  </blockquote>
  <p>Create random filler text for your applications.</p>
  <!-- <a href="lorem-ipsum">Generate some text...</a> -->
  <div>
    <a class="btn btn-large btn-info" href="lorem-ipsum">Generate Paragraphs</a>
  </div>
  <br>
  <h2>Random User Generator</h2>
  <p>Create random user data for your applications. Like Lorem Ipsum, but for people.</p>
  <!-- <a href="usergenerator">Generate some users...</a> -->
  <div>
    <a class="btn btn-large btn-info" href="usergenerator">Generate Users</a>
  </div>
@stop

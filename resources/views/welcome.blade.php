@extends('layouts.master')

@section('title')
  Project-3 Developer's tool
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

<!-- <!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <title>	Project-3- Sharadsinh Vadher</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="/css/bootstrap.min.css" rel="stylesheet">
      <style>
         a:link {
         text-decoration:underline;
         }
      </style>
      <style>
      </style>
      <style type="text/css"></style>
   </head>
   <body>
      <div class="container">
         <h1>Developer's Best Friend</h1>
         <h2>Lorem Ipsum Generator</h2>
         <blockquote>
            In publishing and graphic design, lorem ipsum is a placeholder text commonly used to demonstrate the graphic elements of a document or visual presentation.
            By replacing the distraction of meaningful content with filler text of scrambled Latin it allows viewers to focus on graphical elements such as font, typography, and layout.
         </blockquote>
         <p>Create random filler text for your applications.</p>
         <a href="http://p3.loc/lorem-ipsum">Generate some text...</a>
         <br>
         <h2>Random User Generator</h2>
         <p>Create random user data for your applications. Like Lorem Ipsum, but for people.</p>
         <a href="http://p3.loc/usergenerator">Generate some users...</a>
      </div>
      <script src="/css/jquery.min.js"></script>
      <script src="/css/bootstrap.min.js"></script>
      <iframe frameborder="0" scrolling="no" style="border: 0px; display: none; background-color: transparent;"></iframe>
    </body>
</html> -->

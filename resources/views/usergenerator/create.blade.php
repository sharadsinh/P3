@extends('layouts.master')

@section('title')
  Create Random Users
@stop

@section('content')
  @if(count($errors) > 0)
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  @endif

<form method="post" action="/usergenerator">
  <input type='hidden' name='_token' value='{{ csrf_token() }}'>
  <label for="numberOfUsers">How many users?</label>
  <input type="text" class="numberOfUsers" autofocus="autofocus" name="numberOfUsers" id="numberOfUsers" value=" "> (Max 99)
  <br>

  Include...
  <br>

  <input type="checkbox" name="addBirthday" id="addBirthday">
	<label for="addBirthday">Birthdate</label>
  <br>
  <input type="checkbox" name="addProfile" id="addProfile">
  <label for="addProfile">Profile</label>
  <br><br>
  <!-- <input type="submit" class="btn btn-default" value="Generate User"> -->
  <button type = "submit" class = "btn btn-info">Generate User</button>
</form>
@stop

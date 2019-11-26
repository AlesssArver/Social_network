@extends('layout')

@section('titke', 'profile')

@section('content')
  <div class="columns">
    <div class="column">

    </div>
    <div class="column">
      <form action="/profile/{{$user->id}}" method="post" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <div class="field">
          <div class="control">
            <label for="first_name">First Name</label>
            <input class="input" type="text" name="first_name" value="{{$user->first_name}}">
          </div>
        </div>
        <div class="field">
          <div class="control">
            <label for="last_name">Last Name</label>
            <input class="input" type="text" name="last_name" value="{{$user->last_name}}">
          </div>
        </div>
         <div class="field">
          <div class="control">
            <label for="email">Email</label>
            <input class="input" type="text" name="email" value="{{$user->email}}">
          </div>
        </div>
        <!--<div class="field">
          <div class="control">
            <label for="password">Password</label>
            <input class="input" type="text" name="password" value="{{$user->password}}">
          </div>
        </div> -->
        <div class="field">
          <div class="control">
            <button type="submit" class="button">Save Account</button>
            <input type="hidden" value="{{ Session::token() }}" name="_token">
          </div>
        </div>
      </form>
      <form action="/profile/{{$user->id}}" method="post">
        @method('delete')
        @csrf
        <div class="field">
          <div class="control">
            
          </div>
        </div>
        <div class="field">
          <div class="control">
            <button type="submit" class="button">Delete Account</button>
            <input type="hidden" value="{{ Session::token() }}" name="_token">
          </div>
        </div>
      </form>
    </div>
    <div class="column">

    </div>
  </div>
@endsection

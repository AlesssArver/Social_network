@extends('layout')

@section('title', 'registry')

@section('content')
  <div class="columns">
    <div class="column">

    </div>
    <div class="column">
      <form action="{{ route('register') }}" method="post">
        @csrf
        <div class="field">
          <div class="control">
            <input class="input {{$errors->has('first_name') ?' is-danger' : ''}}" type="text" name="first_name" value="{{ old('first_name') }}" placeholder="First Name">
          </div>
        </div>
        <div class="field">
          <div class="control">
            <input class="input {{$errors->has('last_name') ?' is-danger' : ''}}" type="text" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name">
          </div>
        </div>
        <div class="field">
          <div class="control">
            <input class="input {{$errors->has('email') ?' is-danger' : ''}}" type="text" name="email" value="{{ old('email') }}" placeholder="Email">
          </div>
        </div>
        <div class="field">
          <div class="control">
            <input class="input {{$errors->has('password') ?' is-danger' : ''}}" type="text" name="password" value="{{ old('password') }}" placeholder="Password">
          </div>
        </div>
        <div class="field">
          <div class="control">
            <input class="input" type="text" name="password_confirmation" placeholder="Password">
          </div>
        </div>
        <div class="field">
          <div class="control">
            <button type="submit" class="button is-primary" name="button">Registry</button>
          </div>
        </div>
      </form>
    </div>
    <div class="column">

    </div>
  </div>
@endsection

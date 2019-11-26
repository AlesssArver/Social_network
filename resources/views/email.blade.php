@extends('layout')

@section('title', 'registry')

@section('content')
  <div class="columns">
    <div class="column">

    </div>
    <div class="column">
      <h3>Reset Password</h3>
      @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
      @endif
      <form action="{{ route('password.email') }}" method="post">
        @csrf
        <div class="field">
          <div class="control">
            <input class="input {{$errors->has('email') ?' is-danger' : ''}}" type="text" name="email" value="{{ old('email') }}" placeholder="Email">
          </div>
        </div>
        <div class="field">
          <div class="control">
            <button type="submit" class="button is-primary" name="button">Send Password Reset Link</button>
          </div>
        </div>
      </form>
    </div>
    <div class="column">

    </div>
  </div>
@endsection

@extends('layout')

@section('title', 'registry')

@section('content')
  <div class="columns">
    <div class="column">

    </div>
    <div class="column">
      <form action="{{ route('login') }}" method="post">
        @csrf
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
            <label class="checkbox">
              <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
              Remember me
            </label>
          </div>
        </div>
        <div class="field">
          <div class="control">
            <button type="submit" class="button is-primary" name="button">Login</button>
          </div>
        </div>
        @if (Route::has('password.request'))
          <div class="field">
            <div class="control">
              <a class="btn btn-link" href="{{ route('password.request') }}">
                  {{ __('Forgot Your Password?') }}
              </a>
            </div>
          </div>
          <div class="field">
            <div class="control">
              <a class="btn btn-link" href="{{ route('password.request') }}">
                  {{ __('Forgot Your Password?') }}
              </a>
            </div>
          </div>
        @endif
      </form>
    </div>
    <div class="column">

    </div>
  </div>
@endsection

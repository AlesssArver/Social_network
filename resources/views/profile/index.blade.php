@extends('layout')

@section('title', 'profile')

@section('content')
  <div class="columns">
    <div class="column">

    </div>
    <div class="column">
      <h3>{{$user->getFullName()}}</h3>
      <a href="#" class="add-to-friend">Add to friend</a>
    </div>
    <div class="column">

    </div>
  </div>
@endsection

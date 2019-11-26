@extends('layout')

@section('title', 'profile')

@section('content')
  <div class="columns">
    <div class="column">

    </div>
    <div class="column">
      <h3>{{$user->getFullName()}}</h3>
      <a href="{{route('add.friend')}}" class="add-to-friend">Add to friend</a>
      @foreach($user->friends as $friend)
        {{$friend->getFullName()}}
    @endforeach
    </div>
    <div class="column">

    </div>
  </div>
@endsection

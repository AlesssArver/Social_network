@extends('layout')

@section('title', 'profile')

@section('content')
  <div class="columns">
    <div class="column">

    </div>
    <div class="column">
      <h3>{{$userAuth->full_name}}</h3>
    </div>
    <div class="column">
      @foreach(\App\User::all() as $user)
        <div class="column">

          @if($userAuth->id === $user->id)
            @continue
          @endif
          <h3>{{$user->full_name}}</h3>
          @if($userAuth->friends()->find($user->id))
            <a href="{{route('remove.friend', ['id' => $user->id])}}" class="add-to-friend" style="background-color: red">Delete from friends</a>
          @else
            <a href="{{'/addfriend?id=' . $user->id}}" class="add-to-friend">Add to friend</a>
          @endif
        </div>
      @endforeach
    </div>
  </div>
@endsection

@extends('layout')

@section('titke', 'feeds')

@section('content')
  <div class="columns">
    <div class="column">

    </div>
    <div class="column">

      @include('posts.create')

      @foreach($posts as $post)
          @csrf

              <div class="card">
                <div class="delete-edit">
                  @if(Auth::user() == $post->user)
                    <a href="#">Edit</a>
                    <a href="{{ route('post.delete', ['post_id' => $post->id]) }}" class="delete"></a>
                    @endif
                </div>
                <div class="card-content">
                  <div class="media">
                    <div class="media-left">
                      <figure class="image is-48x48">
                        <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                      </figure>
                    </div>
                    <div class="media-content">
                      @if(Auth::user()->id == $post->user->id)
                        <a href="/profile" class="title is-4">{{$post->user->first_name}} {{$post->user->last_name}}</a>
                      @else
                        <a href="/profile/{{$post->user->id}}" class="title is-4">{{$post->user->first_name}} {{$post->user->last_name}}</a>
                      @endif
                    </div>
                  </div>

                  <div class="content">
                    {{$post->body}}
                    <br>
                    <time datetime="2016-1-1">{{$post->created_at->diffForHumans()}}</time>
                  </div>
                </div>
                <a href="#"><i class="like far fa-heart fa-2x"></i></a>
              </div>
      @endforeach
  </div>

  <div class="column">

  </div>

  </div>
@endsection

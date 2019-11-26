<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="/css/@yield('css').css">
    <link rel="stylesheet" href="/css/main.css">
  </head>
  <body>
    <nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="{{ url('/') }}">
      Home
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
        <a href="{{url('/posts')}}" class="navbar-item">News</a>

        <a href="#" class="navbar-item">Something</a>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          @guest
            <a href="{{ route('login') }}" class="button is-primary">
              <strong>Sign up</strong>
            </a>
            @if (Route::has('register'))
              <a href="{{ route('register') }}" class="button is-light">
                Log in
              </a>
            @endif
            @else
              <div class="navbar-item has-dropdown is-hoverable">
                <a href="/profile" class="navbar-link">{{ Auth::user()->first_name }} {{Auth::user()->last_name}}</a>
                <div class="navbar-dropdown">
                  <a href="/profile/{{Auth::user()->id}}/edit" class="navbar-item">Settings</a>
                  <a href="{{ route('logout') }}" class="navbar-item">Logout</a>
                  <form action="{{ route('logout') }}" method="post" style="display: none;">
                      @csrf
                  </form>
                </div>
              </div>
          @endguest
        </div>
      </div>
    </div>
  </div>
</nav>
  <section class="section">
    <div class="container">
      @yield('content')
    </div>
  </section>
  <script src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </body>
</html>

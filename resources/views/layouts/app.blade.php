<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Moody in the City</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway|Spectral" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container-fluid">
              <a href="index.html" class="navbar-left"><img src="storage/walkinghorse.png" height="80" width="90"></a>
                <a class="navbar-brand" href="{{ url('/index') }}">
                    Moody in the City
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse flex-md-column" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                      <li>
                        <form class="form-inline ml-auto">
              <div class="md-form my-0">
                  <input class="form-control-xs" type="text" placeholder="Search" aria-label="Search">
              </div>
              <button href="#" class="btn-sm btn-light my-0 ml-sm-0" type="submit"><i class="fas fa-search"></i></button>
          </form>
                      </li>
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href='#'><strong>Add a post!</strong></a>
                            </li>
                        @endguest
                    </ul>
                    <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href='/art'><strong>Art</strong></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href='/music'><strong>Music</strong></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href='/places'><strong>Places</strong></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href='/eatdrink'><strong>Eat&Drink</strong></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href='/local'><strong>Local</strong></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-youtube"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-facebook-square"></i></i></a>
                  </li>
                </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- <footer class="footer">
      <div class="container">
        <span class="text-muted">this is a test</span>
      </div>
    </footer> -->
</body>
</html>

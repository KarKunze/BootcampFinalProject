

        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container-fluid">
              <a href="/" class="navbar-left"><img src="{{ asset('/images/walkinghorse.png') }}" height="80" width="90"></a>
                <a class="navbar-brand" href="{{ url('/') }}">
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
                              <a class="nav-link" href='/posts/create'><strong>Add a post!</strong></a>
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
                    <a class="nav-link" href="https://www.youtube.com/channel/UCMp2x6RvhyMFnqhBJ575vUQ"><i class="fab fa-youtube"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://www.facebook.com/Moody-in-the-City-1798618350225204/"><i class="fab fa-facebook-square"></i></i></a>
                  </li>
                </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
          <div class="jumbotron jumbotron-fluid" id="@yield('page-id')">
          <div class="container">
            <h1 class="display-2">@yield('page-title')</h1>
            <h2 class="lead">Your unofficial guide to Lexington, Fayette County, and beyond.</h2>
          </div>
        </div>
</div>

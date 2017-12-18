<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Devouee Pour Christ</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-color:#f5f5f0">
<div id="app">

            <nav class="navbar has-navbar-fixed-bottom is-warning">
              <div class="navbar-brand">
                <a class="navbar-item" href="https://bulma.io">
                  <img src="https://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
                </a>
                <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </div>

              <div id="navbarExampleTransparentExample" class="navbar-menu">
                <div class="navbar-start">
                  <a class="navbar-item is-tab is-hidden-mobile m-l-10" href="#">
                    Learn
                  </a>
                  <a class="navbar-item is-tab is-hidden-mobile" href="#">
                    Discuss
                  </a>
                  <a class="navbar-item is-tab is-hidden-mobile" href="#">
                    Share
                  </a>
                </div>

                <div class="navbar-end"> 
                  <div class="navbar-item">
                    <div class="field is-grouped">
                        @if(Auth::guest())
                      <p class="control">
                        <a class="bd-tw-button button" data-social-network="Twitter" data-social-action="tweet" data-social-target="http://localhost:4000" href="{{ route('login')}}">
                          <span class="icon">
                            <i class="fa fa-sign-in"></i>
                          </span>
                          <span>
                            Login
                          </span>
                        </a>
                      </p>
                      <p class="control">
                        <a class="button is-primary" href="{{ route('register')}}">
                          <span class="icon">
                            <i class="fa fa-plus"></i>
                          </span>
                          <span>Register</span>
                        </a>
                      </p>
                      @else
                    <div class="navbar-item is-tab has-dropdown is-hoverable">
                    <a class="navbar-link" href="#">
                      Hey Ezechiel
                    </a>
                    <div class="navbar-dropdown is-boxed">
                      <a class="navbar-item" href="#">
                        <span class="icon"><i class="fa fa-user-circle-o m-r-10" aria-hidden="true"></i></span>
                        Profile
                      </a>
                      <a class="navbar-item" href="#">
                        <span class="icon"><i class="fa fa-bell m-r-10" aria-hidden="true"></i></span>
                        Notifications
                      </a>
                      <a class="navbar-item" href="#">
                        <span class="icon"><i class="fa fa-cog m-r-10" aria-hidden="true"></i></span>
                        Settings
                      </a>
                      <hr class="navbar-divider">
                      <a class="navbar-item" href="#">
                        <span class="icon"><i class="fa fa-sign-out m-r-10" aria-hidden="true"></i></span>
                        Logout
                      </a>
                    </div>
                  </div>

                      @endif
                    </div>
                  </div>
                </div>
              </div>
            </nav>

        @yield('content')
</div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

<nav class="navbar has-navbar-fixed-bottom is-info">
              <div class="navbar-brand">
                <a class="navbar-item" href="https://bulma.io">
                  <img src="images/2.png" alt="Devouee Pour Christ" width="152" height="28">
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
                         @guest
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
                      Salut {{ Auth::user()->name }}
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
                      <a class="navbar-item" href="{{route('manage.dashboard')}}">
                        <span class="icon"><i class="fa fa-cog m-r-10" aria-hidden="true"></i></span>
                        Manage
                      </a>
                      <hr class="navbar-divider">
                          <a class="navbar-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                              <span class="icon"><i class="fa fa-sign-out m-r-10" aria-hidden="true"></i></span>
                              Logout
                          </a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                              </form>
                    </div>
          </div>

                      @endif
        </div>
      </div>
    </div>
  </div>
</nav>

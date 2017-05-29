  <div class="blog-masthead">
    <div class="container">
      <nav class="nav blog-nav">
        <a class="nav-link active" href="/">Home</a>
        <a class="nav-link" href="#">New features</a>
        <a class="nav-link" href="#">Press</a>
        <a class="nav-link" href="#">New hires</a>
        <a class="nav-link" href="#">About</a>
        <a class="nav-link" href="#">
          <!-- Authentication Links -->
          @if (Auth::guest())
              <a class="nav-link" href="{{ url('/login') }}">Login</a>
              <a class="nav-link" href="{{ url('/register') }}">Register</a>
          @else

                  <a class="nav-link" href="#">
                      {{ Auth::user()->name }}
                      <a class="nav-link" href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a>
                  </a>

          @endif
        </a>



        {{-- @if (Auth::check())
          <a class="nav-link ml-auto" href="#">{{ Auth::user()->name }}</a>
        @endif --}}
      </nav>
    </div>
  </div>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('website') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('admin') }}/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('website') }}/assets/css/fontawesome.css">
    <link rel="stylesheet" href="{{ asset('website') }}/assets/css/templatemo-stand-blog.css">
    <link rel="stylesheet" href="{{ asset('website') }}/assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="{{ route('index') }}"><h2>Stand Blog<em>.</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('index') }}">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item {{ request()->is('about') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('about') }}">About Us</a>
              </li>
              <li class="nav-item {{ request()->is('blog') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('blog') }}">Blog Entries</a>
              </li>
              {{-- <li class="nav-item {{ request()->is('post-details') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('post-details') }}">Post Details</a>
              </li> --}}
              <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
              </li>
              <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('dashboard') }}">
                            Dashboard
                          </a>
                         <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>



                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>


                        </div>


                    </li>




                @endguest
            </ul>
            </ul>
          </div>
        </div>
      </nav>
    </header>

   @yield('content')

   <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <ul class="social-icons">
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Behance</a></li>
            <li><a href="#">Linkedin</a></li>
            <li><a href="#">Dribbble</a></li>
          </ul>
        </div>
        <div class="col-lg-12">
          <div class="copyright-text">
            <p>Copyright 2020 Stand Blog Co.

               | Developed by: <a rel="nofollow" href="#" target="_parent">Arisim</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('website') }}/vendor/jquery/jquery.min.js"></script>
  <script src="{{ asset('website') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- SweetAlert2 -->
<script src="{{ asset('admin') }}/plugins/sweetalert2/sweetalert2.min.js"></script>

  <!-- Additional Scripts -->
  <script src="{{ asset('website') }}/assets/js/custom.js"></script>
  <script src="{{ asset('website') }}/assets/js/owl.js"></script>
  <script src="{{ asset('website') }}/assets/js/slick.js"></script>
  <script src="{{ asset('website') }}/assets/js/isotope.js"></script>
  <script src="{{ asset('website') }}/assets/js/accordions.js"></script>

  <script language = "text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t){                   //declaring the array outside of the
    if(! cleared[t.id]){                      // function makes it static and global
        cleared[t.id] = 1;  // you could use true and false, but that's more typing
        t.value='';         // with more chance of typos
        t.style.color='#fff';
        }
    }
  </script>
@include('includes.alerts')
</body>
</html>

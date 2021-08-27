<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>COVIDITY</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

       
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('user/css/bootstrap.min.css') }}" rel="stylesheet" />

        <!-- footer css and fonts-->
        <link rel="stylesheet" href="{{ asset("user/css/footer.css") }}" />
        <link rel="stylesheet" href="{{ asset('user/fonts/icomoon/style.css') }}" />
        <link href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css">
        @livewireStyles
        @yield('csslink')
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container px-5">
                <a class="navbar-brand" href="{{ route('home.index') }}"><i class="fas fa-head-side-mask"></i> COVIDITY</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse " id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                              <a class="nav-link" href="{{ route('home.index') }}">{{ __('Home') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('about.index') }}">{{ __('About') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('news.index') }}">{{ __('News') }}</a>
                            </li>
                            @guest
                            @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('healthTips.index') }}">{{ __('Health Tips') }}</a>
                            </li>  
                             @endguest 
                     
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contact.create') }}">{{ __('Contact') }}</a>
                            </li>
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

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                  @if (Auth::user()->hasRole('phi'))
                                    <a class="dropdown-item" href="{{ route('phi.index') }}">
                                      {{ __('Dashboard') }}
                                  @elseif (Auth::user()->hasRole('admin'))
                                    <a class="dropdown-item" href="{{ route('admin.index') }}">
                                      {{ __('Dashboard') }}
                                  @endif
                                    
                                        
                                    </a>
                                    <div class="dropdown-divider"></div>
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
                        {{-- <li class="nav-item"><a class="nav-link" href="{{ route("register") }}">Register</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route("login") }}">Log In</a></li> --}}
                    </ul>
                </div>
            </div>
        </nav>
        
        
        @yield('content')
       


        <!-- Footer-->
        <footer class="footer-16371">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-md-9 text-center">
                  <div class="footer-site-logo mb-4">
                    <a href="#">Covidity</a>
                  </div>
                  <ul class="list-unstyled nav-links mb-5">
                    <li><a href="{{ route('home.index') }}">Home</a></li>
                    <li><a href="{{ route('about.index') }}">About</a></li>
                    <li><a href="{{ route('contact.index') }}">Contact</a></li>
                    <li><a href="{{ route('news.index') }}">News</a></li>
                  </ul>
      
                  <div class="social mb-4">
                    <h3>Stay in touch</h3>
                    <ul class="list-unstyled">
                      <li class="in"><a href="#"><span class="icon-instagram"></span></a></li>
                      <li class="fb"><a href="#"><span class="icon-facebook"></span></a></li>
                      <li class="tw"><a href="#"><span class="icon-twitter"></span></a></li>
                      <li class="pin"><a href="#"><span class="icon-pinterest"></span></a></li>
                      <li class="dr"><a href="#"><span class="icon-dribbble"></span></a></li>
                    </ul>
                  </div>
      
                  <div class="copyright">
                    <p class="mb-0"><small>&copy; Covidity. All Rights Reserved.</small></p>
                  </div>
      
      
                </div>
              </div>
            </div>
          </footer>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Bootstrap core JS-->
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> --}}

        
        <!-- Core theme JS-->
        {{-- <script src="{{ asset('user/js/scripts.js') }}"></script> --}}

        
        <script src="{{ asset('js/app.js') }}"></script>

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        @yield('jslink')

        {{-- jquery ui --}}

        <script>
          $( function() {
            $( "#dob" ).datepicker({
            maxDate:new Date(),
            showAnim:'drop',
            dateFormat:'yy-mm-dd',
            changeMonth: true,
            changeYear: true,
            yearRange: "1970:2030",
            });
          } );
        </script>
        @livewireScripts
        
    </body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8"><!-- meta character set -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- Mobile Specific Meta -->
  <link rel="shortcut icon" href="img/fav.png">  <!-- Favicon-->
  <meta name="author" content="codepixer"><!-- Author Meta -->
  <meta name="description" content=""><!-- Meta Description -->
  <meta name="keywords" content=""> <!-- Meta Keyword -->
  <meta name="csrf-token" content="{{ csrf_token() }}">  <!-- CSRF Token -->
  <title>@yield('title')</title>  <!-- Site Title -->
  <script src="{{ asset('js/app.js') }}" defer></script>  <!-- Scripts -->
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito" type="text/css">
  <link rel="dns-prefetch" href="https://fonts.gstatic.com">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

  <!-- CSS -->
  <link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css">
  <link rel="stylesheet" href="css/linearicons.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/nice-select.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/select/1.2.0/css/select.dataTables.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.standalone.min.css" />

</head>


<body class = "page-header-fixed">
  <div class="page-header navbar navbar-fixed-top">
        <div class="page-header-inner">
            <div class="page-header-inner">
                <div class="navbar-header">
                    <a href="/"><img src="img/logo.png" alt="" title="" /></a>
                    <ul>
                      <li><a href="/">Home</a></li>
                      <li><a href="about">About</a></li>
                      <li><a href="">Quiz</a>
                        <ul>
                          <li><a href="/new_quiz">New Quiz</a></li>
                          <li><a href="/quiz">Enroll Quiz</a></li>
                        </ul>
                      </li>
                      <li><a href="">Class</a>
                        <ul>
                          <li><a href="class/new_class">New Class</a></li>
                          <li><a href="class/enroll_class">Enroll Class</a></li>
                        </ul>
                      </li>
                      @if (Route::has('login'))
                      @auth
                      <li class="menu-has-children"> <a href=""> {{ Auth::user()->name }}  </a>
                        <ul>
                          <li> <a href="/home">My Profile</a></li>
                          <li> <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                          </form>
                        </li>
                      </ul>
                    </li>
                    @else
                    <li><a href="{{route('login')}}">Login</a></li>
                    @if (Route::has('register'))
                    <li><a href="{{route('register')}}">Register</a></li>
                    @endif
                    @endauth
                    @endif
                  </ul>
                </div>
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                </a>
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right"></ul>
                </div>
            </div>
        </div>
    </div> <!-- End Header Section -->

<main class="py-4">
  <div class="section-gap"> <!-- Gap for page's content -->
  </div>
  @yield('content') <!-- The main content of the page -->
</main>

</div>

<!-- Start Footer Area -->
<footer class="footer-area" id="footer">
  <div class="footer-bottom row align-items-center">
    <p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
      <div class="col-lg-4 col-md-2 footer-social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
      </div>
    </div>
  </footer>
  <!-- End Footer Area -->

</body>
</html>

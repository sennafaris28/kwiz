<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <!-- meta character set -->
  <meta charset="utf-8">
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/fav.png">
  <!-- Author Meta -->
  <meta name="author" content="codepixer">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Site Title -->
  <title>{{ config('app.name', 'kwiz') }}</title>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito" type="text/css">
  <link rel="dns-prefetch" href="https://fonts.gstatic.com">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

  <!-- Unused Font
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500i" rel="stylesheet">
  -->

  <!-- CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css">
  <link rel="stylesheet" href="css/linearicons.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/nice-select.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>
  <header id="header"><!-- Header Section -->
		<div class="container">
      <nav><!-- Navigation Menu -->
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
      </ul>
    </nav><!-- End of Navigation Menu -->
  </div>
</header> <!-- End Header Section -->

<main class="py-4">
  <div class="section-gap"> <!-- Gap for page's content -->
  </div>
     <div class="container">
      <div class="Section-top-border">
        <h3 class="mb-30">About</h3>
        <div class="row">
          <div class="col-md-3">
            <img src="img/elements/g8.jpg" alt="" class="img-fluid">
          </div>
          <div class="col-md-9 mt-sm-20">
            <p>
              Kami adalah sekelompok mahasiswa Fakultas Teknik Universitas Indonesia jurusan Teknik Komputer.
              Website ini adalah proyek kami untuk kelas Rekayasa Perangkat Lunak, yang lebih umum dikenal sebagai "Software Engineering".
              <del>hello 123</del>
            </p>
          </div>
        </div>
      </div>
    </div>
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



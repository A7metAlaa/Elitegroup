<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Elite Group</title>
  <meta content="About Elite Group. EG has been operating as a holding successful investment company with investments mainly in the Security solutions, Training Academy, Events ...
 " name="descriptison">
  <meta content="About Elite Group. EG has been operating as a holding successful investment company with investments mainly in the Security solutions, Training Academy, Events ...
" name="keywords">

  <!-- Favicons -->
  <link rel="icon" href="{{asset('image/logo.png')}}">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      {{-- <h1 class="logo mr-auto"><a href="index.html"><span>Com</span>pany</a></h1> --}}
      <!-- Uncomment below if you prefer to use an image logo -->
    <a href="index.html" class="logo mr-auto">
        <img src="{{asset('/image/logo.png')}}"
             title="Elitegroup logo"
              alt="Image not found" 
              class="img-fluid w-100"
            ></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{url('/')}}">Home</a></li>
          <li><a  href="#about" >About</a></li>
          <li><a href="#services">Services</a></li>
          {{-- <li><a href="{{route('portfolio')}}">Portfolio</a></li> --}}
          <li><a href="{{route('contact')}}">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <div class="header-social-links">
        <a href="https://www.linkedin.com/company/37381221" class="twitter" target="_Blank">
            <i class="icofont-twitter"></i>
          </a>
        <a href="https://www.youtube.com/channel/UCWFpAUg6BqNctlvGbHBAZDw" class="youtube" target="_Blank"><i class="icofont-youtube"></i></a>
        <a href="https://www.instagram.com/elitegroup.egypt/" class="instagram" target="_Blank"><i class="icofont-instagram"></i></a>
        <a href="https://eg.linkedin.com/company/elite-group-egypt" target="_blank"  class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->
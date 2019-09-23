<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Francisco Carneiro Martins</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{asset('site-assets/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('site-assets/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('site-assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('site-assets/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('site-assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('site-assets/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('site-assets/css/style.css')}}" rel="stylesheet">

<body>
    <header id="header" class="fixed-top">
        <div class="container">
            <div class="logo float-left">
                <!-- image logo -->
                <h1 class="text-light"><a href="#header" class="scrollto"><span><a href="{{ route('site.home') }}">Colégio Estadual</a></span></h1>
                <h5><strong>Francisco Carneiro Martins</strong></h5>
                <!-- <a href="#intro" class="scrollto"><img src="img/header.png" alt="" class="img-fluid">Colégio</strong></a> -->
            </div>
            <nav class="main-nav float-right d-none d-lg-block">
                <ul>
                    <li><a href="#news">Notícias</a></li>
                    <li><a href="#courses">Courses</a></li>
                    <li><a href="#gallery">Galeria</strong></a></li>
                    <li><a href="#team">Direção</a></li>
                    <li><a href="#institutional">Institucional</strong></a></li>
                    <li><a href="#why-us">Utilidades</strong></a></li>
                    <li><a href="#contact">Localização</a></li>
                </ul>
            </nav>
        </div>
    </header>
    @yield('content')
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright Colégio Estadual Francisco Carneiro Martins</strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="#">Josni Kuchla</a>
            </div>
        </div>
    </footer>
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="{{asset('site-assets/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('site-assets/lib/jquery/jquery-migrate.min.js')}}"></script>
    <script src="{{asset('site-assets/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('site-assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('site-assets/lib/mobile-nav/mobile-nav.js')}}"></script>
    <script src="{{asset('site-assets/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('site-assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('site-assets/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('site-assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('site-assets/lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('site-assets/lib/lightbox/js/lightbox.min.js')}}"></script>

    <!-- Template Main Javascript File -->
    <script src="{{asset('site-assets/js/gallery.js')}}"></script>
    <script src="{{asset('site-assets/js/main.js')}}"></script>
</body>
</html>

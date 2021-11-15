<!DOCTYPE html>
<html>
  <!-- Mirrored from fox-landing-page.netlify.app/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Nov 2021 21:47:21 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>fox Landing Page | HTML Theme</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Slick Slider -->
    <link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/slick-theme.css') }}" rel="stylesheet">

    <!-- AOS CSS -->
    <link href="{{ asset('assets/css/aos.css') }}" rel="stylesheet">

    <!-- Lity CSS -->
    <link href="{{ asset('assets/css/lity.min.css') }}" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">

    <!-- linearicons CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/linearicons.css') }}">

    <!-- Our Min CSS -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <!-- Themes * You can select your color from color-1 , color-2 , color-3 , color-4 , ..etc * -->
    <link id="themes_colors" href="{{ asset('assets/css/color-1.css') }}" rel="stylesheet">
    <!-- <link href="assets/css/color-1.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/color-2.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/color-3.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/color-4.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/color-5.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/color-6.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/color-7.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/color-8.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/color-9.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/color-10.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/color-11.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/color-12.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/color-13.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/color-14.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/color-15.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/color-16.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/color-17.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/color-18.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/color-19.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/color-20.css" rel="stylesheet"> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

     <link rel="stylesheet" href="{{ asset('css/system.css') }}">
     <link rel="stylesheet" href="{{asset('css/some.css')}}">
</head>

<body data-spy="scroll" data-target="#main_menu" data-offset="70">
    <!-- Start Preloader -->
    <div class="preloader yellow darken-4">
        <div class="loader-wrapper">
            <div class="loader"></div>
        </div>
    </div>

  <div id="app">
    
     @include('layouts.partials.sidebarpage')
     <!-- Start Header -->
    <section id="slide" class="slide yellow darken-4">
        <div class="content-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6" data-aos="fade-right">
                        <p class="mb-0">Somos la mejor alternativa para tu aprendizaje musical. </p>
                        <h2>Academia</h2>
                        <p>Crece, aprende y desarrolla tus habilidades musicales junto a nosotros, en poco tiempo, con poca inversión recibirás lo mejor de lo mejor.
                        </p>
                        
                    </div>
                    <div class="col-md-6 mb-5" data-aos="fade-left" data-aos-delay="200">
                       <img src="assets/img/mobile-1.png" class="img-fluid d-block mx-auto" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Header -->
    @yield('content')

    <!-- Start  Footer -->
    <footer class="padding-100 pb-0">
        <div class="subscribe">
            <div class="container">
                <form class="subscribe-form row m-0 align-items-center">
                    <div class="col-lg-9 col-md-8">
                        <div class="form-group mb-0">
                            <input type="text" class="form-control" placeholder="Enter Your Email">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <a href="#"
                            class="btn btn-primary shadow d-block btn-colord btn-theme"><span>subscribe</span></a>
                    </div>
                </form>
            </div>
        </div>
        <div class="space-50"></div>
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="widget">
                            <img src="assets/img/fox-logo.png" class="img-fluid" alt="">
                            <p>Sed pottitor lects nibh. Viamus magna justo, lacinia eget consectetur sed, convallis
                                at
                                tellus.
                                Curabitur aliquet quam id dui posuere blandit. Lorem ipsum dolor sit amet,
                                consectetur
                                adipiscing
                                elit.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="widget">
                            <h6>Quick Links</h6>
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                    <a href="#">About Us</a>
                                </li>
                                <li>
                                    <a href="#">Services</a>
                                </li>
                                <li>
                                    <a href="#">Products</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="widget">
                            <h6>Social Media</h6>
                            <ul>
                                <li>
                                    <a href="#">Facbook</a>
                                </li>
                                <li>
                                    <a href="#">Instagram</a>
                                </li>
                                <li>
                                    <a href="#">LinkedIn</a>
                                </li>
                                <li>
                                    <a href="#">Twitter</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="widget">
                            <h6>Quick Contact</h6>
                            <ul>
                                <li>
                                    <span>Phone : </span>+2 012 345 6789
                                </li>
                                <li>
                                    <span>Email : </span>
                                    <a href="mailto:info@yourcompany.com"></a>info@yourcompany.com</li>
                                <li>
                                    <span>Address : </span>8 Green Tower, Street Name New York City, USA</li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-50"></div>
        <div class="copyright">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <p>All rights reserved © <a href="#">MK</a>, 2020</p>
                    </div>
                    <div class="offset-md-4 col-md-4">
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Terms and Conditions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End  Footer  -->
   
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- svg -->
    <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>

    <!-- Slick Slider JS -->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>

    <!-- Counterup JS -->
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.js') }}"></script>

    <!-- AOS JS -->
    <script src="{{ asset('assets/js/aos.js') }}"></script>

    <!-- lity JS -->
    <script src="{{ asset('assets/js/lity.min.js') }}"></script>

    <!-- Our Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @stack('scripts')

   </div>
  </body>

</html>

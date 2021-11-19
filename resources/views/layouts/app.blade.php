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

       <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.min.css') }}">
    <!-- font css -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/material.css') }}">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" id="main-style-link">
    <link rel="stylesheet" href="{{ asset('assets/css/customizer.css') }}">
    

    <link rel="stylesheet" href="assets/css/landing.css">
     <link rel="stylesheet" href="{{ asset('css/system.css') }}">
     <link rel="stylesheet" href="{{asset('css/some.css')}}">
</head>

<body >
  

  <div id="app">
    
     @include('layouts.partials.sidebarpage')
   
    <!-- End Header -->
    @yield('content')


    <!-- End  Footer  -->
     <!-- [ contact ] end -->
    <!-- [ Footer ] Start -->
    <div class="footer-top"></div>
    <footer class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#"><img src="assets/images/logo.svg" alt="logo"></a>
                        </li>
                        <li class="mt-3 mb-3">
                            <p>Easy - Flexible - Always updated - makes Nextro a really powerful backend template.</p>
                        </li>
                        <li class="mt-3 mb-3 d-flex align-items-center">
                            <div class="fas fa-headset me-2"></div><a class="d-inline-block" href="http://phoenixcoded.ticksy.com/">Support by Ticksy</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-4">
                    <h5>Useful links</h5>
                    <ul class="list-unstyled">
                        <li class="mt-2 mb-2"><a href="#" target="_blank">Rate Nextro</a></li>
                        <li class="mt-2 mb-2"><a href="#" target="_blank">Collection</a></li>
                        <li class="mt-2 mb-2"><a href="#" target="_blank">Themeforest Profile</a> </li>
                        <li class="mt-2 mb-2"><a href="#" target="_blank">Portfolio</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-4">
                    <h5>Trending Items</h5>
                    <ul class="list-unstyled">
                        <li class="mt-2 mb-2"><a href="#" target="_blank">Able pro
                                v7.0<span class="bg-danger ms-1">Hot</span></a> </li>
                        <li class="mt-2 mb-2"><a href="#" target="_blank">Dash Able<span class="bg-primary ms-1">New</span></a> </li>
                        <li class="mt-2 mb-2"><a href="#" target="_blank">Flat Able</a></li>
                        <li class="mt-2 mb-2"><a href="#" target="_blank">Mega Able</a> </li>
                    </ul>
                    <h5 class="mt-4">Follow Us</h5>
                    <ul class="list-inline list-unstyled sos-icon">
                        <li><a href="#" target="_blank" class="btn-facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" target="_blank" class="btn-twitter"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container b-footer">
            <p>© 2020 phoenixcoded. Exclusively on <a href="https://1.envato.market/DM91j" target="_blank">Themeforest</a></p>
           
        </div>
    </footer>
   
    </div>
        <script src="{{ asset('assets/js/vendor-all.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/feather.min.js') }}"></script>
        <script src="{{ asset('assets/js/pcoded.min.js') }}"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script> -->
        <!-- <script src="assets/js/plugins/clipboard.min.js"></script> -->
        <!-- <script src="assets/js/uikit.min.js"></script> -->

    <script src="assets/front/wow.min.js"></script>

    <script>
        // Start [ Menu hide/show on scroll ]
        var ost = 0;
        $(window).scroll(function() {
            var cOst = $(this).scrollTop();
            if (cOst == 0) {
                $('.navbar').addClass('top-nav-collapse');
            } else if (cOst > ost) {
                $('.navbar').addClass('top-nav-collapse').removeClass('default');
            } else {
                $('.navbar').addClass('default').removeClass('top-nav-collapse');
            }
            ost = cOst;
        });
        // End [ Menu hide/show on scroll ]
        new WOW().init();
        var scrollSpy = new bootstrap.ScrollSpy(document.body, {
            target: '#navbarTogglerDemo01'
        });
        $("#navbarTogglerDemo01 a").on('click', function(event) {
            if (this.hash !== "") {
                event.preventDefault();
                var hash = this.hash;
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 1500, function() {
                    window.location.hash = hash;
                });
            }
        });
    </script>
   {{--  <div class="pct-customizer">
        <div class="pct-c-btn">
            <button class="btn btn-light-danger" id="pct-toggler">
                <i data-feather="settings"></i>
            </button>
            <button class="btn btn-light-primary" data-bs-toggle="tooltip" title="Document" data-placement="left">
                <i data-feather="book"></i>
            </button>
            <button class="btn btn-light-success" data-bs-toggle="tooltip" title="Buy Now" data-placement="left">
                <i data-feather="shopping-bag"></i>
            </button>
            <button class="btn btn-light-info" data-bs-toggle="tooltip" title="Support" data-placement="left">
                <i data-feather="headphones"></i>
            </button>
        </div>
        <div class="pct-c-content ">
            <div class="pct-header bg-primary">
                <h5 class="mb-0 text-white f-w-500">DashboardKit Customizer</h5>
            </div>
            <div class="pct-body">
                <h6 class="mt-2"><i data-feather="credit-card" class="me-2"></i>Header settings</h6>
                <hr class="my-2">
                <div class="theme-color header-color">
                    <a href="#!" class="" data-value="bg-default"><span></span><span></span></a>
                    <a href="#!" class="" data-value="bg-primary"><span></span><span></span></a>
                    <a href="#!" class="" data-value="bg-danger"><span></span><span></span></a>
                    <a href="#!" class="" data-value="bg-warning"><span></span><span></span></a>
                    <a href="#!" class="" data-value="bg-info"><span></span><span></span></a>
                    <a href="#!" class="" data-value="bg-success"><span></span><span></span></a>
                    <a href="#!" class="" data-value="bg-dark"><span></span><span></span></a>
                </div>
                <h6 class="mt-4"><i data-feather="layout" class="me-2"></i>Sidebar settings</h6>
                <hr class="my-2">
                <div class="form-check form-switch">
                    <input type="checkbox" class="form-check-input" id="cust-sidebar">
                    <label class="form-check-label f-w-600 pl-1" for="cust-sidebar">Light Sidebar</label>
                </div>
                <div class="form-check form-switch mt-2">
                    <input type="checkbox" class="form-check-input" id="cust-sidebrand">
                    <label class="form-check-label f-w-600 pl-1" for="cust-sidebrand">Color Brand</label>
                </div>
                <div class="theme-color brand-color d-none">
                    <a href="#!" class="active" data-value="bg-primary"><span></span><span></span></a>
                    <a href="#!" class="" data-value="bg-danger"><span></span><span></span></a>
                    <a href="#!" class="" data-value="bg-warning"><span></span><span></span></a>
                    <a href="#!" class="" data-value="bg-info"><span></span><span></span></a>
                    <a href="#!" class="" data-value="bg-success"><span></span><span></span></a>
                    <a href="#!" class="" data-value="bg-dark"><span></span><span></span></a>
                </div>
                <h6 class="mt-4"><i data-feather="sun" class="me-2"></i>Layout settings</h6>
                <hr class="my-2">
                <div class="form-check form-switch mt-2">
                    <input type="checkbox" class="form-check-input" id="cust-darklayout">
                    <label class="form-check-label f-w-600 pl-1" for="cust-darklayout">Dark Layout</label>
                </div>
            </div>
        </div>
    </div> --}}

    <script>
        $('#pct-toggler').on('click', function() {
            $('.pct-customizer').toggleClass('active');
        });
        $('#cust-sidebrand').change(function() {
            if ($(this).is(":checked")) {
                $('.theme-color.brand-color').removeClass('d-none');
                $('.m-header').addClass('bg-dark');
            } else {
                $('.m-header').removeClassPrefix('bg-');
                $('.m-header > .b-brand > .logo-lg').attr('src', 'assets/images/logo-dark.svg');
                $('.theme-color.brand-color').addClass('d-none');
            }
        });
        $('.brand-color > a').on('click', function() {
            var temp = $(this).attr('data-value');
            if (temp == "bg-default") {
                $('.m-header').removeClassPrefix('bg-');
            } else {
                $('.m-header').removeClassPrefix('bg-');
                $('.m-header > .b-brand > .logo-lg').attr('src', 'assets/images/logo.svg');
                $('.m-header').addClass(temp);
            }
        });
        $('.header-color > a').on('click', function() {
            var temp = $(this).attr('data-value');
            if (temp == "bg-default") {
                $('.pc-header').removeClassPrefix('bg-');
            } else {
                $('.pc-header').removeClassPrefix('bg-');
                $('.pc-header').addClass(temp);
            }
        });
        $('#cust-sidebar').change(function() {
            if ($(this).is(":checked")) {
                $('.pc-sidebar').addClass('light-sidebar');
                $('.pc-horizontal .topbar').addClass('light-sidebar');
            } else {
                $('.pc-sidebar').removeClass('light-sidebar');
                $('.pc-horizontal .topbar').removeClass('light-sidebar');
            }
        });
        $('#cust-darklayout').change(function() {
            if ($(this).is(":checked")) {
                $("#main-style-link").attr("href", "assets/css/style-dark.css");
            } else {
                $("#main-style-link").attr("href", "assets/css/style.css");
            }
        });
        $.fn.removeClassPrefix = function(prefix) {
            this.each(function(i, it) {
                var classes = it.className.split(" ").map(function(item) {
                    return item.indexOf(prefix) === 0 ? "" : item;
                });
                it.className = classes.join(" ");
            });
            return this;
        };
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Q8H86P6FK7"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-Q8H86P6FK7');
    </script>
  

    @stack('scripts')

   </div>
  </body>

</html>

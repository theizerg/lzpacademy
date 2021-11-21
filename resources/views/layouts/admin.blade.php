<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TECHNOSYSTEMS - @yield('title')</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/system.css') }}">
    <link rel="stylesheet" href="{{asset('css/some.css')}}">
 
    @stack('styles')
  </head>

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      @include('layouts.partials.sidebar')
      @include('layouts.partials.leftmenu')
     

   
    <!--Page Content Here -->
   <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
            
                 <!-- Dashboard Ecommerce Starts -->
                 <section id="dashboard-ecommerce">
                  <main class="container">
                    @yield('content')
                  </main>
                </section>
              </div>
           </div>
         </div>
       </div>
    </div>
    <!-- REQUIRED JS SCRIPTS -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/some.js') }}"></script>
    <script src="{{ asset('js/system.js') }}"></script>
    <script >
    $(window).on('load', function() {
      if (feather) {
        feather.replace({
          width: 14, height: 14
        });
      }
    })
  </script>
    @stack('scripts')

   </div>
  </body>

</html>

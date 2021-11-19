 <!-- [ Nav ] start -->
    <nav class="navbar navbar-expand-md navbar-dark default">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo/logo-3.png') }}" width="100" class="mr-2" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Nuestros cursos</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonial">Opiniones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">Nuestros precios</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contáctanos</a>
                    </li>
                </ul>
               
            </div>
        </div>
    </nav>
     <!-- [ Nav ] start -->
    <!-- [ Header ] start -->

    <header>
   
            <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-5">
                   <div class="card black wow fadeInLeft" data-wow-delay="0.1s" >
                        <div class="card-body">
                            <h5 class="mt-3 text-white-50 wow fadeInLeft" data-wow-delay="0.5s">LZPACADEMY</h5>
                    <h2 class="mt-sm-3 mb-sm-4 text-white wow fadeInLeft" data-wow-delay="0.7s">¡Despierta tu talento!</h2>
                    <p class="mb-sm-4 wow fadeInLeft" data-wow-delay="0.6s">En poco tiempo aprenderás con nosotros distintos intrumentos.</p>
                    <div class="my-4 wow fadeInLeft" data-wow-delay="0.8s">
                        
                        <a href="https://fb.watch/9nHcLBDF-n/" class="btn btn-success" target="_blank"><i class=" far fa-eye me-2 me-2"></i>Observa el siguiente video</a>
                    </div>
                        </div>
                   </div>
                </div>
                <div class="col-sm-7">
                    <img src="{{ ('images/logo/logo-principal.png') }}" alt="Nextro Admin Template elevation-1" class="img-fluid  wow fadeInRight" data-wow-delay="0.2s" >
                </div>
            </div>
        </div>
   
    </header>
    
   
        <style>
            header:after {
                background: url({{ asset('images/banner/academia-musical.jpg') }}) no-repeat center center;
                background-size: cover;
                background-color: #CA8500;
                z-index: 2;
            }
        </style>

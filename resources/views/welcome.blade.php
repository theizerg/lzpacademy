@extends('layouts.app')
@section('title','HOME')
@section('content')
 
       <!-- Start Boxes -->
    <section id="boxes" class="boxes padding-100">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="box"  style="background:#473F38 !important;" data-aos="fade-up">
                        <div class="icon">
                            <span class="lnr lnr lnr-magic-wand"></span>
                        </div>
                        <div class="space-20"></div>
                        
                        <div class="space-15"></div>
                        <p>Tiene que ver principalmente con el deseo de impartir lo que Dios nos ha dado, nuestros conocimientos deseamos colocarlos en las manos de Dios y en tí, para que crezcas y avances a nivel personal y musical.</p>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="box"  style="background:#473F38 !important;" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon">
                            <span class="lnr lnr-music-note"></span>
                        </div>
                        <div class="space-20"></div>
                        
                        <div class="space-15"></div>
                        <p>Nuestro principal motivo de elaborar este proyecto es que puedas aprender de una manera rápida, sencilla y muy práctica, te ofrecemos lo mejor en poco tiempo, para que tengas el mejor conocimiento.</p>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="box" style="background:#473F38 !important;" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon">
                            <span class="lnr lnr-diamond"></span>
                        </div>
                        <div class="space-20"></div>
                        
                        <div class="space-15"></div>
                        <p>Pensamos en tu economía y estamos ajustados para ayudarte y brindarte un servicio de calidad a bajo costo, prueba, crece, innova junto a nosotros y tu conocimiento cada día será mucho mayor.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Screenshots -->
     <!-- Start Clients Testimonial -->
    <section id="testimonial" class="clients-testimonial padding-100">
        <div class="container">
            <div class="row">
                <div class="text-center col-12 section-title" data-aos="fade-zoom-in">
                    <h3>Testimonios de los
                        <span  style="color:#f57f17;"> Estudiantes</span>
                    </h3>
                    <div class="space-25"></div>
                    <p>Parte de nuestro trabajo es ofrecer lo mejor para nuestros estudiantes, sin duda alguna nuestra preocupación es ofrecerte un servicio de calidad.</p>
                    <div class="space-50"></div>
                </div>
                <div class="col-12">
                    <div class="testimonial-slider" data-aos="fade-up">
                        <div class="item">
                            <div class="client-testimonial orange darken-4 ">
                                <p>
                                   Complacido totalmente, excelentes clases, excelentes maestros, excelente servicio de clases musicales.
                                </p>
                            </div>
                            <div class="client-info d-flex align-items-center">
                                <figure>
                                    <img src="{{ asset('assets/img/client.jpg') }}" class="img-fluid" alt="">
                                </figure>
                                <div>
                                    <h3 style="color:#e65100">Theizer Gonzalez</h3>
                                    <h6>Programador</h6>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-testimonial orange darken-4">
                                <p>
                                    Gracias a Dios por esta maravilloso emprendimiento, he adquirido el conocimiento pleno a nivel musical, gracias por el esfuerzo amados hermanos.
                                </p>
                            </div>
                            <div class="client-info d-flex align-items-center">
                                <figure>
                                    <img src="{{ asset('assets/img/client.jpg') }}" class="img-fluid" alt="">
                                </figure>
                                <div>
                                    <h3 style="color:#e65100">Carlos Gonzalez</h3>
                                    <h6>Estudiante de ingeniería</h6>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-testimonial orange darken-4">
                                <p>
                                   En el aprendizaje musical ha sido de manera maravillosa para mí y para mi familia, con cada uno de los profesores de esta maravillosa academia el conocimiento ha sido pleno y completo.
                                </p>
                            </div>
                            <div class="client-info d-flex align-items-center">
                                <figure>
                                    <img src="{{ asset('assets/img/client.jpg') }}" class="img-fluid" alt="">
                                </figure>
                                <div>
                                    <h3 style="color:#e65100">Marcos Pérez</h3>
                                    <h6>Locutor</h6>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-testimonial orange darken-4">
                                <p>
                                    A Dios gracias y de igual manera para nuestros hermanos por tan grande iniciativa por todo este maraviloso proyecto, sigan adelante, dando lo mejor para la gloria del Señor.
                                </p>
                            </div>
                            <div class="client-info d-flex align-items-center">
                                <figure>
                                    <img src="{{ asset('assets/img/client.jpg') }}" class="img-fluid" alt="">
                                </figure>
                                <div>
                                    <h3 style="color:#e65100">Marcos Placencia</h3>
                                    <h6>Ingeniero civil</h6>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-testimonial orange darken-4">
                                <p>
                                   Cada clase es un esfuerzo que sin duda alguna nuestros hermanos han depositado en cada uno de nosotros, deseamos seguir adelante y seguir aprendiendo.
                                </p>
                            </div>
                            <div class="client-info d-flex align-items-center">
                                <figure>
                                    <img src="{{ asset('assets/img/client.jpg') }}" class="img-fluid" alt="">
                                </figure>
                                <div>
                                    <h3 style="color:#e65100">Martha Gonzalez</h3>
                                    <h6>Asistente de medicina general</h6>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-testimonial orange darken-4">
                                <p>
                                    Excelente experiencia, excelente servicio de clases, excelente coordinación para cada una de las clases, a Dios gracias y para nuestros hermanos de igual manera deseamos las bendiciones del Altísimo para este maravilloso proyecto.
                                </p>
                            </div>
                            <div class="client-info d-flex align-items-center">
                                <figure>
                                    <img src="{{ asset('assets/img/client.jpg') }}" class="img-fluid" alt="">
                                </figure>
                                <div>
                                    <h3 style="color:#e65100">Mohamed Kamel</h3>
                                    <h6>CEO - Company Name</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Clients Testimonial  -->
     <!-- Start Fun Facts -->
    <section id="facts" class="fun-facts padding-100 background-withcolor 43">
        <div class="container">
            <div class="row">
                <div class="text-center col-12 section-title" data-aos="fade-zoom-in">
                    <h3 class="white-text">Estadística de 
                        <span class="white-text"> Uso</span>
                    </h3>
                    <div class="space-25"></div>
                    <p>Te compartimos datos a tiempo real de nuestro servicio, escríbenos y con todo gusto te atenderemos.</p>
                    <div class="space-50"></div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="fact-box text-center" data-aos="fade-up" data-aos-delay="400">
                        <span class="lnr lnr-coffee-cup black-text"></span>
                        <h5 class="black-text">245</h5>
                        <h6 class="black-text">Coffee Cups</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="fact-box text-center" data-aos="fade-up" data-aos-delay="800">
                        <span class="black-text lnr lnr-code"></span>
                        <h5 class="black-text">3000</h5>
                        <h6 class="black-text">Line Code</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="fact-box text-center" data-aos="fade-up" data-aos-delay="1200">
                        <span class="black-text lnr lnr-download"></span>
                        <h5 class="black-text">763</h5>
                        <h6 class="black-text">Download</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="fact-box text-center" data-aos="fade-up" data-aos-delay="1600">
                        <span class="black-text lnr lnr-heart"></span>
                        <h5 class="black-text">360</h5>
                        <h6 class="black-text">Shere</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Fun Facts  -->

 <!-- Start App Price -->
    <section id="nuestros_cursos" class="prices padding-100">
        <div class="container">
            <div class="row">
                <div class="text-center col-12 section-title" data-aos="fade-zoom-in">
                    <h3>Nuestros
                        <span style="color: #F97400"> Cursos</span>
                    </h3>
                    <div class="space-25"></div>
                    <p >Pensamos en la comodidad de tu aprendizaje, es por ello que ajustamos nuestras clases para que puedas aprender de manera fácil, rápida, sencilla y económica.</p>
                    <div class="space-50"></div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="price-table text-center" data-aos="fade-right" data-aos-delay="400">
                        <div class="top background-fullwidth" style="background-image: url({{ asset('assets/img/gray-bg.jpg') }});">
                            <h4 style="color: #F97400">Canto</h4>
                            <h3 style="color: #F97400">
                                <i class="mdi mdi-microphone"></i>
                            </h3>
                            
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="price-table text-center" data-aos="fade-right" data-aos-delay="800">
                        <div class="top background-fullwidth" style="background-image: url({{ asset('assets/img/gray-bg.jpg') }});">
                            <h4 style="color: #F97400">Trompeta</h4>
                            <h3 style="color: #F97400">
                               <i class="mdi mdi-trumpet"></i>
                            </h3>
                            
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="price-table text-center" data-aos="fade-right" data-aos-delay="1200">
                        <div class="top background-fullwidth" style="background-image: url({{ asset('assets/img/gray-bg.jpg') }});">
                            <h4 style="color: #F97400">Bajo</h4>
                            <h3 style="color: #F97400">
                                <i class="mdi mdi-guitar-electric"></i>
                            </h3>
                           
                        </div>
                       
                    </div>
                </div>
                 <div class="col-lg-4 col-md-4 col-12">
                    <div class="price-table text-center" data-aos="fade-right" data-aos-delay="1600">
                        <div class="top background-fullwidth" style="background-image: url({{ asset('assets/img/gray-bg.jpg') }});">
                            <h4 style="color: #F97400">Batería</h4>
                            <h3 style="color: #F97400">
                               <img src="{{ asset('images/icon/icons8-drum-set-96.png') }}" width="120" alt="">
                            </h3>
                           
                        </div>
                       
                    </div>
                </div>
                 <div class="col-lg-4 col-md-4 col-12">
                    <div class="price-table text-center" data-aos="fade-left" data-aos-delay="2000">
                        <div class="top background-fullwidth" style="background-image: url({{ asset('assets/img/gray-bg.jpg') }});">
                            <h4 style="color: #F97400">Violonchelo</h4>
                            <h3 style="color: #F97400">
                                 <img src="{{ asset('images/icon/icons8-violonchelo-96.png') }}" width="120" alt="">
                            </h3>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="price-table text-center" data-aos="fade-left" data-aos-delay="2400">
                        <div class="top background-fullwidth" style="background-image: url({{ asset('assets/img/gray-bg.jpg') }});">
                            <h4 style="color: #F97400">Teclado</h4>
                            <h3 style="color: #000000">
                              <i class="mdi mdi-piano" style="font-size: 100px;"></i>
                            </h3>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- End App Price  -->
<!-- Start Our Team -->
    <section id="team" class="our-team padding-100 background-fullwidth background-fixed"
        style="background-image: url({{ asset('assets/img/gray-bg.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="text-center col-12 section-title" data-aos="fade-zoom-in">
                    <h3>Our
                        <span> Team</span>
                    </h3>
                    <div class="space-25"></div>
                    <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli
                        incidit
                        labore
                        lorem ipsum amet madolor sit amet.</p>
                    <div class="space-50"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="team-slider" data-aos="fade-up">
                        <div class="item person text-center">
                            <img src="assets/img/team-1.jpg" class="img-fluid d-block mx-auto" alt="">
                            <div class="space-20"></div>
                            <h3>Emilia Noah</h3>
                            <div class="space-20"></div>
                            <h5>Front-End Developer</h5>
                            <div class="space-20"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio provident dolores.
                            </p>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="item person text-center">
                            <img src="assets/img/team-2.jpg" class="img-fluid d-block mx-auto" alt="">
                            <div class="space-20"></div>
                            <h3>Harry Henry</h3>
                            <div class="space-20"></div>
                            <h5>Front-End Developer</h5>
                            <div class="space-20"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio provident dolores.
                            </p>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="item person text-center">
                            <img src="assets/img/team-3.jpg" class="img-fluid d-block mx-auto" alt="">
                            <div class="space-20"></div>
                            <h3>Poppy Reuben</h3>
                            <div class="space-20"></div>
                            <h5>Front-End Developer</h5>
                            <div class="space-20"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio provident dolores.
                            </p>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="item person text-center">
                            <img src="assets/img/team-4.jpg" class="img-fluid d-block mx-auto" alt="">
                            <div class="space-20"></div>
                            <h3>Alexander Thomas</h3>
                            <div class="space-20"></div>
                            <h5>Front-End Developer</h5>
                            <div class="space-20"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio provident dolores.
                            </p>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="item person text-center">
                            <img src="assets/img/team-1.jpg" class="img-fluid d-block mx-auto" alt="">
                            <div class="space-20"></div>
                            <h3>Emilia Noah</h3>
                            <div class="space-20"></div>
                            <h5>Front-End Developer</h5>
                            <div class="space-20"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio provident dolores.
                            </p>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="item person text-center">
                            <img src="assets/img/team-2.jpg" class="img-fluid d-block mx-auto" alt="">
                            <div class="space-20"></div>
                            <h3>Harry Henry</h3>
                            <div class="space-20"></div>
                            <h5>Front-End Developer</h5>
                            <div class="space-20"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio provident dolores.
                            </p>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Team -->
     <!-- Start FAQ -->
    <section id="preguntas_frecuentes" class="faq padding-100">
        <div class="container">
            <div class="row">
                <div class="text-center col-12 section-title" data-aos="fade-zoom-in">
                    <h3>Preguntas
                        <span  style="color:#f57f17;"> Frecuentes</span>
                    </h3>
                    <div class="space-25"></div>
                    <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli
                        incidit
                        labore
                        lorem ipsum amet madolor sit amet.</p>
                    <div class="space-50"></div>
                </div>
            </div>
            <div class="row align-items-center">
                <!--align-items-center-->
                <div class="col-md-8 col-12" data-aos="fade-right">
                    <div class="accordion" id="faqAccordion">
                        <div class="card shadow">
                            <div class="card-header" id="heading_1">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapse_1" aria-expanded="true" aria-controls="collapse_1">
                                        What Is fox
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse_1" class="collapse show" aria-labelledby="heading_1"
                                data-parent="#faqAccordion">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum tenetur dicta
                                    commodi, totam atque fugit ut magnam laboriosam
                                    dignissimos dolorum minus quia sed distinctio in mollitia laborum sint delectus
                                    accusamus!
                                    <br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum tenetur
                                    dicta
                                    commodi,
                                    totam atque fugit ut magnam.
                                </div>
                            </div>
                        </div>
                        <div class="card shadow">
                            <div class="card-header" id="heading_2">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapse_2" aria-expanded="false" aria-controls="collapse_2">
                                        How To Use The App
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse_2" class="collapse" aria-labelledby="heading_2"
                                data-parent="#faqAccordion">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum tenetur dicta
                                    commodi, totam atque fugit ut magnam laboriosam
                                    dignissimos dolorum minus quia sed distinctio in mollitia laborum sint delectus
                                    accusamus!
                                    <br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum tenetur
                                    dicta
                                    commodi,
                                    totam atque fugit ut magnam.
                                </div>
                            </div>
                        </div>
                        <div class="card shadow">
                            <div class="card-header" id="heading_3">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapse_3" aria-expanded="false" aria-controls="collapse_3">
                                        How To Connect With The Support
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse_3" class="collapse" aria-labelledby="heading_3"
                                data-parent="#faqAccordion">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum tenetur dicta
                                    commodi, totam atque fugit ut magnam laboriosam
                                    dignissimos dolorum minus quia sed distinctio in mollitia laborum sint delectus
                                    accusamus!
                                    <br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum tenetur
                                    dicta
                                    commodi,
                                    totam atque fugit ut magnam.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12" data-aos="fade-left" data-aos-delay="400">
                    <img src="assets/img/mobile-1.png" class="img-fluid b-block mx-auto" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End FAQ  -->


    

    <!-- Start  Git in touch -->
    <section id="git_in_touch" class="git-in-touch padding-100">
        <div class="container">
            <div class="row">
                <div class="text-center col-12 section-title" data-aos="fade-zoom-in">
                    <h3>Git
                        <span> in </span>touch
                    </h3>
                    <div class="space-25"></div>
                    <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli
                        incidit
                        labore
                        lorem ipsum amet madolor sit amet.</p>
                    <div class="space-50"></div>
                </div>
            </div>
            <form data-aos="fade-up">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter Your Name">
                            <span class="focus-border"></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Enter Your Email">
                            <span class="focus-border"></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter Your Subject">
                            <span class="focus-border"></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <textarea class="form-control" rows="4" placeholder="Enter Your Message"></textarea>
                            <span class="focus-border"></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="space-25"></div>
                        <button type="submit" class="btn btn-primary shadow btn-colord btn-theme"><span>Send
                                Message</span></button>
                    </div>
                </div>
            </form>
            <div class="space-50"></div>
            <div class="row contact-info">
                <div class="col-md-4 col-12 text-center">
                    <div class="info-box" data-aos="fade-right" data-aos-delay="400">
                        <span class="lnr lnr-map-marker"></span>
                        <h5>28 Green Tower, Street Name New York City, USA</h5>
                    </div>
                </div>
                <div class="col-md-4 col-12 text-center">
                    <div class="info-box" data-aos="fade-up" data-aos-delay="800">
                        <span class="lnr lnr-phone"></span>
                        <h5>+2 012 345 6789</h5>
                        <h5>+2 02 345 6789</h5>
                    </div>
                </div>
                <div class="col-md-4 col-12 text-center">
                    <div class="info-box" data-aos="fade-left" data-aos-delay="1200">
                        <span class="lnr lnr-envelope"></span>
                        <a href="mailto:info@yourcompany.com">info@yourcompany.com</a>
                        <a href="mailto:sales@yourcompany.com">sales@yourcompany.com</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End  Git in touch  -->

@endsection

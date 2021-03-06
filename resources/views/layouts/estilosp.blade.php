<!DOCTYPE html>
<html lang="en">

<head>
    <title>Carmen Andrea Reyes Reyes</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Pagina oficial del consultorio de la doctora Carmen Andrea Ryes Reyes" />
    <meta name="author" content="Carmen Andrea Reyes Reyes">
    <meta name="Copyrigth" content="Carmen Andrea Reyes Reyes">
    <meta name="keywords" content="medicina, salud, mujeres, ginecologia, obstetricia, papanicolao, lactancia, embarazos, facebook, twitter, yucatan">
    <meta name="canonical" hreflang="x-default">


    <link rel="icon" type="image/png" href="//res.cloudinary.com/hmyqulmkc/image/upload/v1585007390/icon_dwqmji.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="//use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>

    <!-- Google fonts-->
    <link href="//fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="//fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- Third party plugin CSS-->
    <link href="//cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="/css/styles.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Inicio</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">

                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Servicios</a></li>

                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contacto</a></li>

                    @if (Route::has('login'))
                    <div class="flex-center position-ref full-height">
                        @auth
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('home') }}">Panel de control</a></li>
                        <a class="nav-link js-scroll-trigger" href="{{ url('/home') }}"></a>

                        @else
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('login') }}">Acceso</a></li>
                        @endauth
                    </div>
                    @endif
                    <div class="content">
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end">
                    <h1 class="text-uppercase text-white font-weight-bold">Consultorio de la Doctora Carmen Andrea Reyes Reyes</h1>
                    <hr class="divider my-4" />
                </div>
                <div class="col-lg-8 align-self-baseline">

                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Encuentra Más</a>
                </div>
            </div>
        </div>
    </header>
    <!-- About section-->
    <section class="page-section bg-primary" id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">Tenemos lo que necesitas</h2>
                    <hr class="divider light my-4" />
                    <!--  <p class="text-white-50 mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id at cumque necessitatibus ea porro nulla itaque cupiditate, praesentium ullam aperiam eaque beatae provident fugit quis nemo magni sed totam officiis.</p>-->
                    <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Comenzemos!</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services section-->
    <section class="bg-light py-5" id="services">
        <div class="container">
            <h2 class="text-center mt-0">A tu servicio</h2>
            <hr class="divider my-4" />
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-briefcase-medical text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Ginecologia</h3>
                        <p class="text-muted mb-0"></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-laptop-medical text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Papanicolao</h3>
                        <p class="text-muted mb-0"></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-stethoscope text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Obstétricas</h3>
                        <p class="text-muted mb-0"></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-heart text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Colposcopia</h3>
                        <p class="text-muted mb-0"></p>
                    </div>
                </div>
                <div align="center">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-file-medical-alt text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Cirugia</h3>
                            <p class="text-muted mb-0"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact section-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mt-0">¡Mantengámonos en contacto!</h2>
                    <hr class="divider my-4" />
                    <!--  <p class="text-muted mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores delectus quas rerum voluptatem amet tenetur vitae minima hic rem, ex numquam natus harum, neque accusantium deserunt quod veritatis, voluptas alias?</p>-->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                    <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                    <div>(969) 935 0951</div>
                </div>
                <div class="col-lg-4 mr-auto text-center">
                    <i class="fas fa-envelope fa-3x mb-3 text-muted"></i><!-- Make sure to change the email address in BOTH the anchor text and the link target below!--><a class="d-block" href="mailto:andre_drgirl@hotmail.com">andre_drgirl@hotmail.com</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container">
            <div class="small text-center text-muted">Copyright © 2020 - Carmen Andrea Reyes Reyes</div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>

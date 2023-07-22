<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Eventos Bolivia</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('home/assets/favicon.ico') }}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('home/css/styles.css') }}" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">{{-- <img src="assets/img/navbar-logo.svg" alt="..." /> --}}EVENTOS Bolivia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#conciertos">Galeria</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Conciertos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#auspiciadores">Auspiciadores</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Registrarse</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Ingresar</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            {{-- <div class="masthead-subheading">Bienvenido!</div>
            <div class="masthead-heading text-uppercase">ENCANTADO DE RECIBIRLO</div> --}}
            <a class="btn btn-primary btn-xl text-uppercase" href="#conciertos">VEAMOS MAS</a>
        </div>
    </header>

    <!-- Services-->
    {{-- <section class="page-section" id="conciertos">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Proximos Shows</h2>
                <h3 class="section-subheading text-muted">Mantente informado de los próximos eventos, noticias, concursos y mucho más!</h3>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-people fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Vilma Palma</h4>
                    <p class="text-muted">Puedes reservar tu suite decorada de lunes a viernes, con 24 horas de
                        anticipación.
                        El tiempo de hospedaje es hasta mediodía del día siguiente.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-people fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Sebastian Yatra</h4>
                    <p class="text-muted">Puedes reservar tu suite decorada de lunes a viernes, con 24 horas de
                        anticipación.
                        El tiempo de hospedaje es hasta mediodía del día siguiente.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-people fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Luis Fonsi</h4>
                    <p class="text-muted">Puedes reservar tu suite decorada de lunes a viernes, con 24 horas de
                        anticipación.
                        El tiempo de hospedaje es hasta mediodía del día siguiente.</p>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Team-->
    <section class="page-section" id="conciertos">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Ultimos Shows</h2>
                <h3 class="section-subheading text-muted">Mantente informado de los próximos eventos, noticias,
                    concursos y mucho más!</h3>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{ asset('home/assets/img/team/11.jpg') }}"
                            alt="..." />
                        <h4>Sebastian Yatra</h4>
                        {{-- <p class="text-muted">Lead Designer</p> --}}
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{ asset('home/assets/img/team/22.jpg') }}"
                            alt="..." />
                        <h4>Wisin y Yandel</h4>
                        {{-- <p class="text-muted">Lead Marketer</p> --}}
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{ asset('home/assets/img/team/33.jpg') }}"
                            alt="..." />
                        <h4>Christian Nodal</h4>
                        {{-- <p class="text-muted">Lead Developer</p> --}}
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
            </div> --}}
        </div>
    </section>

    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Galeria</h2>
                {{-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> --}}
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('home/assets/img/portfolio/1.jpg') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Vilma Palma</div>
                            {{-- <div class="portfolio-caption-subheading text-muted">Illustration</div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 2-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('home/assets/img/portfolio/2.jpg') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Sebastian Yatra</div>
                            {{-- <div class="portfolio-caption-subheading text-muted">Graphic Design</div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 3-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('home/assets/img/portfolio/3.jpg') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Marco Antonio Solis</div>
                            {{-- <div class="portfolio-caption-subheading text-muted">Identity</div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <!-- Portfolio item 4-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('home/assets/img/portfolio/4.jpg') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Morat</div>
                            {{-- <div class="portfolio-caption-subheading text-muted">Branding</div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <!-- Portfolio item 5-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('home/assets/img/portfolio/5.jpg') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Luis Fonsi</div>
                            {{-- <div class="portfolio-caption-subheading text-muted">Website Design</div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Portfolio item 6-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('home/assets/img/portfolio/6.jpg') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Wisin y Yandel</div>
                            {{-- <div class="portfolio-caption-subheading text-muted">Photography</div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Portfolio item 6-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('home/assets/img/portfolio/7.jpg') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Christian Nodal</div>
                            {{-- <div class="portfolio-caption-subheading text-muted">Photography</div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Portfolio item 6-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('home/assets/img/portfolio/8.jpg') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Ana Gabriel</div>
                            {{-- <div class="portfolio-caption-subheading text-muted">Photography</div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Portfolio item 6-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('home/assets/img/portfolio/9.jpg') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Daniel Habit</div>
                            {{-- <div class="portfolio-caption-subheading text-muted">Photography</div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients-->
    <div class="py-5" id="auspiciadores">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid"
                            src="{{ asset('home/assets/img/logos/Coca-Cola.svg') }}" alt="..." /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto"
                            src="{{ asset('home/assets/img/logos/Burger_King.svg') }}" alt="..." /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid"
                            src="{{ asset('home/assets/img/logos/Pepsi.svg') }}" alt="..." /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto"
                            src="{{ asset('home/assets/img/logos/Papa_Johns_Pizza.svg') }}" alt="..." /></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Register-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Suscribete</h2>
                <h3 class="section-subheading text-muted">Recibe nuestro boletín y mantente informado de los próximos
                    eventos, noticias, concursos y mucho más!</h3>
            </div>

            <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="{{ route('publicos.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row align-items-stretch mb-5">
                    <div class="row align-items-center">
                        <div class="form-group col-md-3 col-sm-6">
                            <!-- Name input-->
                            <input class="form-control" id="name" type="text" name="nombre"
                                placeholder="Nombre completo *" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <div class="form-group col-md-3 col-sm-6">
                            <!-- Email address input-->
                            <input class="form-control" id="email" type="email" name="correo"
                                placeholder="Correo electronico *" data-sb-validations="required,email" />
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.
                            </div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        {{-- <div class="form-group col-md-3 col-sm-6">
                            <!-- Name input-->
                            <input class="form-control" id="name" type="text" placeholder="Me interesa *"
                                data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div> --}}
                        <div class="form-group col-md-3 col-sm-6">
                            <select class="form-control" name="evento_id" placeholder="Me interesa *" style="padding: 20px" required>
                                @foreach ($eventos as $evento)
                                <option value="{{$evento->id}}">{{$evento->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- Submit Button-->
                        <div class="form-group col-md-3 col-sm-6"><button class="btn btn-primary btn-xl text-uppercase"
                                id="submitButton" type="submit">Registrar</button></div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; Eventos Bolivia 2022</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Politica de privacidad</a>
                    <a class="link-dark text-decoration-none" href="#!">Terminos de uso</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('home/js/scripts.js') }}"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>

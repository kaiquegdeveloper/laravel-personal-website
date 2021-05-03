<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Title -->
        <title>@yield('title')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @yield('seo')
        <link rel="stylesheet" href="{{asset('assets/css/plugins/animate.css')}}"/>
        <!-- Animated Headlines -->
        <link rel="stylesheet" href="{{asset('assets/css/plugins/animated-headlines.css')}}">
        <!-- bootstrap -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"/>
        <!-- font-awesome icon -->
        <link
            href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
            rel="stylesheet">
        <!-- Google Font -->
        <link
            href="https://fonts.googleapis.com/css?family=Muli:200,300,400,600,700,800,900"
            rel="stylesheet">
        <!-- Animated Headlines -->
        <link rel="stylesheet" href="{{asset('assets/css/plugins/animated-headlines.css')}}">
        <!-- magnific popup -->
        <link rel="stylesheet" href="{{asset('assets/css/plugins/magnific-popup.css')}}"/>
        <!-- Main Style -->
        <link rel="stylesheet" href="{{asset('assets/css/main.css')}}"/>
    </head>

    <body>
        <!-- ===== Start Navbar ===== -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarNav"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}#slider">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}#about">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}#services">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}#portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}#testimonials">Depoimentos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}#contact">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- ===== End Navbar ===== -->

        @yield('content')
        
           <!-- ===== Start Footer ===== -->
           <footer class="footer text-center">
            <div class="social-icons">
           <a href="https://www.linkedin.com/in/developer-kaiqueg/"> <span class="fa fa-3x fa-linkedin" aria-hidden="true"></span> </a>
            <span class="fa fa-3x fa-instagram" aria-hidden="true"></span>
            <p>Todos os direitos reservados. <img style="max-width: 100px" src="{{asset('assets/img/default-white.png')}}"></p>
            </div>
        </footer>
        <!-- ===== End Footer ===== -->

        <!-- ==== javascript libraries ==== -->
        <!-- jQuery-->
        <script src="{{asset('assets/js/plugins/jquery-3.3.1.min.js')}}"></script>
        <!-- Bootstrap 4.1.3 -->
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/popper.min.js')}}"></script>
        <!-- Animated Headlines -->
        <script src="{{asset('assets/js/plugins/animated-headlines.js')}}"></script>
        <!-- Nav jQuery-->
        <script src="{{asset('assets/js/plugins/nav.jquery.js')}}"></script>
        <!-- Nav jQuery-->
        <script src="{{asset('assets/js/plugins/jquery.stellar.js')}}"></script>
        <!-- Isotope -->
        <script src="{{asset('assets/js/plugins/isotope.pkgd.min.js')}}"></script>
        <!-- Image Loaded -->
        <script src="{{asset('assets/js/plugins/imagesloaded.pkgd.min.js')}}"></script>
        <!-- Magnific Popup -->
        <script src="{{asset('assets/js/plugins/magnific-popup.min.js')}}"></script>
        <!-- Smooth-Scroll -->
        <script src="{{asset('assets/js/smooth-scroll.js')}}"></script>
        <!-- Counter Up -->
        <script src="{{asset('assets/js/plugins/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/jquery.counterup.min.js')}}"></script>
        <!-- Particles Js -->
        <script src="{{asset('assets/js/plugins/particles.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/app.js')}}"></script>
        <!-- Animated Headlines -->
        <script src="{{asset('assets/js/plugins/animated-headlines..js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>

    </body>
</html>
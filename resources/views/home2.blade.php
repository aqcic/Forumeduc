<!DOCTYPE html>
<html >
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->


  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
  <link rel="stylesheet" href="{{ asset('fonts/fontawesome-all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('fonts/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('fonts/ionicons.min.css') }}">
  <!-- Styles -->
  <link href="{{ asset('css/Header-Blue.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }} " rel="stylesheet">
    <link href="{{ asset('css/fontawesome5-overrides.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Footer-Dark.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Header-Blue.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Login-Form-Clean.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Registration-Form-with-Photo.css') }}" rel="stylesheet">
    <link href="{{ asset('css/assets/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/untitled.css') }}" rel="stylesheet">
</head>

<body>
    <div style="height: auto;">
        <div class="header-blue" style="color: var(--blue);">
            <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
                <div class="container-fluid"><a class="navbar-brand" href="#">ForuméDuc</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="#">Accueil</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Cours</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Forum</a></li>
                        </ul>
                        <form class="form-inline mr-auto" target="_self">
                            <div class="form-group"><label for="search-field"><i class="fa fa-search" style="padding: 0px;"></i></label><input class="form-control search-field" type="search" id="search-field" name="search"></div>
                        </form><span class="navbar-text"> <a class="login" href="#">Connexion</a></span><a class="btn btn-light action-button" role="button" href="#" style="font-family: 'Source Sans Pro', sans-serif;">Inscription</a>
                    </div>
                </div>
            </nav>
            <div class="container hero">
                <div class="row" style="margin: 0px;margin-top: 0px;">
                    <div class="col-12 col-lg-6 col-xl-5 offset-xl-1" style="padding-right: 39px;">
                        <h1 style="font-family: 'Source Sans Pro', sans-serif;margin-top: 144px;margin-right: 0px;margin-bottom: 11px;">ForuméDuc;</h1>
                        <p>Espace pour les étudiants de pôle universitaire<br>Akli Mohand Oulhadj à Bouira.<br></p><a class="btn btn-light btn-lg text-center action-button" role="button" href="#" style="text-align: center;">Connexion</a>
                    </div>
                    <div class="col-md-5 col-lg-5 offset-lg-1 offset-xl-0 d-none d-lg-block phone-holder">
                        <div class="phone-mockup"><img class="device" src="{{asset('img/phone.svg')}}" style="width: 255px;">
                            <div class="screen"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main class="py-4">
        @yield('content')
    </main>
    <div style="padding: 92px;margin: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center" style="padding: 18px;"><span class="d-lg-flex justify-content-lg-center align-items-lg-center" style="text-align: center;font-size: 32px;font-family: 'Source Sans Pro', sans-serif;color: rgb(44,96,149);">L'UAMOB en chiffres</span></div>
            </div>
            <div class="row">
                <div class="col-md-4 text-center"><i class="fas fa-users d-lg-flex justify-content-lg-center align-items-lg-center" style="font-size: 50px;padding-bottom: 15px;"></i><span class="d-lg-flex justify-content-lg-center align-items-lg-center" style="text-align: center;font-size: 18px;font-family: 'Source Sans Pro', sans-serif;font-style: oblique;">+13k<br>Etudiants</span></div>
                <div class="col-md-4 text-center"><i class="fas fa-shopping-bag d-lg-flex justify-content-lg-center align-items-lg-center" style="font-size: 50px;padding-bottom: 15px;"></i><span class="d-lg-flex justify-content-lg-center align-items-lg-center" style="text-align: center;font-size: 18px;font-family: 'Source Sans Pro', sans-serif;font-style: oblique;">+200<br>Enseignants</span></div>
                <div class="col-md-4 text-center"><i class="fas fa-user-graduate d-lg-flex justify-content-lg-center align-items-lg-center" style="font-size: 50px;padding-bottom: 15px;"></i><span class="d-lg-flex justify-content-lg-center align-items-lg-center" style="text-align: center;font-size: 18px;font-family: 'Source Sans Pro', sans-serif;font-style: oblique;">+30<br>Formations</span></div>
            </div>
        </div>
    </div>
    <div class="footer-dark" style="padding: 20px;">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">cours</a></li>
                            <li><a href="#">Forum</a></li>
                            <li><a href="#">contact</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Univeristé AMO Bouira</a></li>
                            <li><a href="#">Développeurs</a></li>
                            <li><a href="#">Enseignants&nbsp;</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>ForuméDuc</h3>
                        <p>Espace éducatif pour les étudiants du pôle universitaire AMO à Bouira<br>Cet espace est créer par des jeunes étudiants et des freelancers de la même wilaya, destiné aux départements scientifiques de l'université.&nbsp;</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">ForuméDuc © 2021</p>
            </div>
        </footer>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>

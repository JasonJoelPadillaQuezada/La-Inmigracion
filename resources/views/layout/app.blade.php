<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <title>
        La Inmigración | @yield('titulo')
    </title>
    <link rel="icon" type="image/icon" href="C:\JasonPadillaHTML\IntoBootStrap\img/mundo.ico">

</head>

<body> 
    <div class="container">
        <header>

            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/una.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h4>El pueblo siempre estara unido.</h4>
                            
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/dos.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                         <p>No señor, el problema no es la inmigración, es la educación,
                              ser distinto no es ser inferior.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/tres.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h4>Piensalo muy bien, tu familia te espera.</h4>
                            
                        </div>
                    </div>
                    
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light bg-primary">
                <a class="navbar-brand" href="{{route('index')}}"><h4>La Inmigración</h4></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('index')}}"><h6>Inicio</h6> <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('estadiscicas')}}"><h6>Estadísticas</h6></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('ventajasydesventajas')}}"><h6>Ventajas Y Desventajas</h6> </a>
                        </li>
                    </ul>

                </div>
            </nav>

        </header>
        <br> 
        <section>
            <div class="row">
                <aside class="d-none d-sm-block d-md-block d-xl-block col-md-4">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-primary"><h5>Descripción basíca</h5></li>
                        <li class="list-group-item list-group-item-secondary"><h5>Clasificación de paises</h5></li>
                        <li class="list-group-item list-group-item-success"><h5>Transportes de inmigración</h5></li>
                    </ul>
                </aside>

                <article class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                 @yield('contenido')
                </article>  

            </div>

         </section> 
         <footer class="bg-dark">
            <p class="text-center text-white">
                <small class="ml-auto"> 
                    <i class="fa fa-check text-primary"></i> Derechos Reservados 2020 ©&nbsp; &nbsp; <br>
                    <i class="fa fa-graduation-cap text-primary"></i> III BTP-Informatica "1" &nbsp; &nbsp;    <i class="fa fa-phone text-primary"></i>+(504)-2222-0033  &nbsp; &nbsp; <br>
                          <i class="fa fa-user text-primary"></i> Jason Joel Padilla Quezada&nbsp; &nbsp;         <i class="fa fa-envelope text-primary"></i> Jasonpadilla@gmail.com&nbsp; &nbsp; 
                 </small>
           </p>
          </footer>

          <script src="{{asset('js/jquery.js')}}"></script>
            <script src="{{asset('js/jquery.js')}}"></script>
            <script src="{{asset('js/bootstrap.min.js')}}"></script>

</body>

</html>
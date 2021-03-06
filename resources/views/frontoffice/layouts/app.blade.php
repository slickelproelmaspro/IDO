<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'IDO') }}</title>
        <!-- Styles -->
        <link href="{{ asset('css/frontoffice/main.css') }}" rel="stylesheet">
        <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('fa/css/all.css') }}" rel="stylesheet">
        @yield('styles')
    </head>
    <body>
        <nav class="navbar navbar-expand-lg" id="navbar1">
            <strong>IDO - VÍSTETE DE EMOCIONES</strong>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#" id="rastrear">RASTREAR ORDEN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="contactanos">CONTÁCTANOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="ayuda"><i class="far fa-question-circle"></i></a>
                    </li>
                </ul>
            </div>
        </nav>

        <nav class="navbar navbar-expand-lg" id="navbar2">
            <div class="container">
                <a class="navbar-brand" href="#"><img border="0" alt="IDO" src="{{asset('img/frontoffice/idoblanco.png')}}" width="100" height="100"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                    <form class="form-inline mt-2 mt-md-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Buscar">
                        <button id="btnbuscar" class="btn btn-outline-success" type="submit">BUSCAR</button>
                    </form>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#" id="inicio">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="sobrenosotros">NOSOTROS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="tienda">TIENDA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="crear">CREAR</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="registrar">REGISTRASE/ACCEDER</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="carrito">CARRITO</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    <section id="ventanadesplegable">
    <div class="overlay" id="overlay">
        <div class="container" id="contenidopopup">
            <div class="row">
                <div class="col-md-12">
                    <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
                </div>
                <div class="col-md-6">
                    <div class="popup" id="popup">
                            <h2><b>ACCEDER</b></h2>
                            <form action="">
                                <label for="fname">Nombre de usuario o correo electrónico *</label><br>
                                <input type="text" id="fname" name="fname" placeholder="Bnito o 123@gmail.com"><br>
                                <label for="lname">Contraseña *</label><br>
                                <input type="password" id="fname"><br>
                                <input type="checkbox" id="recuerdame" value="recuerdame">
                                <label for="vehicle3"> Recuérdame</label><br>
                                <input type="submit" value="ACCEDER" class="btn-acceder"><br><br>
                                <a href="#">¿Olvidaste la contraseña?</a>
                            </form>
                     </div>
                </div>
                <div class="col-md-6">
                    <div class="popup" id="popup">
                        <h2><b>REGISTRARSE</b></h2>
                        <form action="">
                            <label for="fname">Dirección de correo electrónico *</label><br>
                            <input type="email" id="fname" name="fname" placeholder="123@gmail.com"><br>
                            <label for="lname">Contraseña *</label><br>
                            <input type="password" id="fname"><br>
                            <input type="checkbox" id="recuerdame" value="recuerdame">
                            <label for="vehicle3"> Envíenme noticias y ofertas</label><br>
                            <p>Tus datos personales se utilizarán para procesar tu pedido, mejorar tu experiencia en esta web, gestionar el acceso a tu cuenta y otros propósitos descritos en nuestra política de privacidad.</p><br>
                            <input type="submit" value="REGISTRARSE" class="btn-acceder">
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        @yield('contenido')
        <section id="footer" class="bg-dark">
            <div class="container">
                <img border="0" alt="IDO" src="{{asset('img/frontoffice/idoblanco.png')}}" width="50" height="50">
                <ul class="list-inline">
                    <li class="list-inline-item footer-menu"><a href="#">Preguntas frecuentes</a></li>
                    <li class="list-inline-item footer-menu"><a href="#">Términos de uso</a></li>
                    <li class="list-inline-item footer-menu"><a href="#">Órdenes</a></li>
                    <li class="list-inline-item footer-menu"><a href="#">Devolución y cambio</a></li>
                    <li class="list-inline-item footer-menu"><a href="#">Envío</a></li>
                    <li class="list-inline-item footer-menu"><a href="#">F.A.Q</a></li>
                </ul>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-envelope"></i></a></li>
                </ul>
                <small>IDO.pe © 2020 - Todos los Derechos Reservados</small>
                <p><small>Desarrollado por: Nosotros :v</small></p>
            </div>
        </section>
        <script src="{{ asset('js/jquery.min.js') }}" rel="stylesheet"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}" rel="stylesheet"></script>

        <script>
          NProgress.done();
        </script>

        <script src="{{ asset('js/popup.js') }}" rel="stylesheet"></script>

        @yield('scripts')
    </body>
</html>
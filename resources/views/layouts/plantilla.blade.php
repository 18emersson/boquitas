<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Boquitas Sanas</title>
  </head>
  <body>
    <header class="navbar navbar-light bg-primary">
        <div class="row container-fluid">

                

                <div class="col-2 bg-dark ">
                    @if (Route::has('login'))
                    <div class="justify-content-end">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-end">Dashboard</a>
                        @else
                            <div class="text-end">
                                <a href="{{ route('login') }}" class="">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="">Register</a>
                            @endif
                            </div>
                        @endauth
                    </div>
                @endif
                </div>


       

    </header>
    <div id="wrapper">
      <div id="banner-wrapper">
        <header>
          <div id="header-inner">
            <a href="#" id="logo">
              <img src="img/pics/boquilogo.png" alt="diente">
            </a>
    <nav>
      <a href="#" id="menu-icon">
        <i class="fa fa-bars"></i>
      </a>
      <ul>
        <li>
          <a href="index.html" class="current">
            INICIO
          </a>
        </li>
        <li>
          <a href="#">
            REGISTRO
          </a>
        </li>
        <li>
          <a href="#">
            INICIAR SESIÓN
          </a>
        </li>
        <li>
          <a href="#">
            SERVICIOS
          </a>
        </li>
        <li>
          <a href="#contact">
            CONTACTO
          </a>
        </li>
      </ul>
    </nav>


    
    <main>
        <div class="container">
             @yield('contenido-principal')
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <footer>
      <div class="banner-wrapper">
        <div class="icon-text">
          <div class="icon-text-icon">
            <ul class="footer-nav">
              <li>
                <a href="index.html">INICIO</a>
              </li>
              <li>
                <a href="#">Servicios</a>
              </li>
               <li>
                <a href="#">Nuestros Médicos</a>
              </li>
              <li>
                <a href="#">Contact</a>
              </li>
            </ul>
          </div>
          <div class="icon-text-text">
            <ul class="social">
              <li>
                <a href="mailto:contact@boquitasanas.com">
                  <i class="fa fa-envelope-o"></i>
                </a>
              </li>
              <li>
                <a href="http://facebook.com/boquitasanas">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li>
                <a href="http://twitter.com/boquitasanas">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li>
                <a href="http://youtube.com/boquitasanas">
                  <i class="fa fa-youtube"></i>
                </a>
              </li>
              <li>
                <a href="http://instagram.com/boquitasanas">
                  <i class="fa fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <script>
      $(document).ready(function(){
        $('.slider1').bxSlider({
          mode: 'fade',
        });
        $('.slider2').bxSlider({
          mode: 'fade',
        });
        $('.slider3').bxSlider({
          mode: 'fade',
        });
      });
  </body>
</html>

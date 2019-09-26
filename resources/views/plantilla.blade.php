<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <link href="/css/bootstrap-carrusel.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="/css/app.css">
    <title>@yield("titulo")</title>
    <!-- Librería de JQuery / para el banner -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Fin de Librería de JQuery -->
    <!-- Librería de Bootstrap / para el banner -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Fin de Librería de Bootstrap -->
  </head>
  <body>
  <header>

    <!-- header -->
		<header class="main-header">
      <div class="header-container">
        <div class="tablet-search">
          <form class="search" action="/search" method="post">
              @csrf
            <fieldset class="tablet-fieldset">
             <input type="text" id="busqueda" name="busqueda" class='tablet-search-input' placeholder="Buscar">
             <button type="submit" name="button" class="tablet-search-button">
              <i class="fas fa-search" class="tablet-search-icon" style='color:#E1BD43'></i>
             </button>
            </fieldset>
          </form>
        </div>
        <img src="img/venanzia-logo.jpg" alt="logotipo" class="logo">
        <div class="login-register">
          <a href="#">INICIAR SESION</a>
          <span>  |  </span>
          <a href="#">REGISTRARME</a>
          <span class='span-carrito'>  |  </span>
          <div class="carrito">
            <a href="#">MI CARRITO</a><a href="#"><i class="fas fa-shopping-cart"></i></a>
          </div>
        </div>
    			<a href="#" class="toggle-nav">
    				<i class="fa fa-bars" style='color:#E1BD43'></i>
    			</a>
      </div>
      <div class="mobile-search">
        <form class="search" action="/search" method="post">
            @csrf
          <fieldset class="mobile-fieldset">
           <input type="text" id="busqueda" name="busqueda" class='mobile-search-input' placeholder="Buscar">
           <button type="submit" name="button" class="mobile-search-button">
            <i class="fas fa-search" class="mobile-search-icon" style='color:#E1BD43'></i>
           </button>
          </fieldset>
        </form>
      </div>

			<nav class="main-nav">
				<ul>
					<li><a href="#">Ofertas</a></li>
					<li><a href="#">Botas</a></li>
					<li><a href="#">Zapatos</a></li>
					<li><a href="#">Sandalias</a></li>
					<li><a href="#">Zapatillas</a></li>
				</ul>
			</nav>
		</header>

    @yield("principal")

<!-- FOOTER -->
<footer>
  <div class="footer_container">
  <!-- Contenedor de todo el footer -->
    <div class="footer_ayuda">
    <!-- Contenedor de la parte AYUDA del footer -->
          <ul class="footer_ul">
            <!-- Lista de elementos de la parte AYUDA del footer -->
            <li class="footer_titulos">AYUDA</li>
            <li><a href="/faq">Preguntas frecuentes</a></li>
            {{-- <li><a href="secciones/proximamente.html">Promociones y descuentos</li><br> --}}
            <!-- <li><a href="/faq#talles">Tabla de talles</li> -->
            <li><a href="/faq#medios">Medios de pago</li>
              <br>
            <li class="footer_iconos">
                <a href="#"><i class="fab fa-cc-visa fa-2x"></i></a>
                <a href="#"><i class="fab fa-cc-diners-club fa-2x"></i></a>
                <!-- <a href="#"><i class="fab fa-cc-paypal fa-2x"></i></a> -->
                <a href="#"><i class="far fa-credit-card fa-2x"></i></a>
            </li>
          </ul>
    </div>

    <div class="footer_miCuenta">
    <!-- Contenedor de la parte MI CUENTA del footer -->
      <ul class="footer_ul">
      <!-- Lista de elementos de la parte MI CUENTA del footer -->
            <li class="footer_titulos">MI CUENTA</li>
            {{-- <li><a href="/carrito">Estado de mi pedido</a></li> --}}
            <li><a href="/login">Login</a></li>
            <li><a href="/registro">Registrarse</a></li>
            <li><a href="/login">Mi perfil</a></li>
      </ul>
    </div>

    <div class="footer_social">
    <!-- Contenedor de la parte VISITANOS del footer -->
      <ul class="footer_ul">
      <!-- Lista de elementos de la parte VISITANOS del footer -->
            <li class="footer_titulos">VISITANOS</li>
            <li>CONOCÉ NUESTRO<strong> LOCAL </strong><br></li>
            <li>Lunes a Viernes de 9.00 a 18.00 hs</li><br>
            <li><i class="fas fa-home"></i> Campana 642 Flores, CABA | Argentina</li>
      </ul>
    </div>

    <div class="footer_contacto">
    <!-- Contenedor de la parte DIRECCIONES del footer -->
          <ul class="footer_ul">
          <!-- Lista de elementos de la parte DIRECCIONES del footer -->
          <li class="footer_titulos">CONTACTO</li>
          <!-- Chequear si esto funciona -->
            <li><i class="fas fa-phone"></i><a href="callto:0054119553333">+54 9 11 3572-9118</a></li>
            <li><i class="fas fa-envelope"></i><a href="mailto:hello@venanzia.com"> hello@venanzia.com</a></li>
            <li class="footer_iconos"> Seguinos en
              <a href="http://facebook.com" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a>
              <a href="http://instagram.com" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
            </li>

          </ul>
    </div>
</div>
    <div class="footer_creditos">
      <p>© 2019<strong>
      </strong> - Copyright <strong>Venanzia</strong> - Todos los derechos reservados</p>
    </div> <!--END footer_creditos -->
</footer>
  </body>
  </html>

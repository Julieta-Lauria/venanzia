@extends("plantilla")

@section("titulo")
  Inicio
@endsection

@section("principal")
<!-- INICIO del BANNER -->

<!-- Bootstrap Carousel con controles, indicadores y caption -->
    <div class="products_container">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="/img/carousel-2.jpg" class="d-block w-100 mi-imagen" alt="...">
              <div class="carousel-caption d-none d-md-block">
              <!-- <h5>Colección Otoño - Invierno</h5>
              <p>2019</p> -->
              </div>
          </div>
          <div class="carousel-item">
            <img src="/img/carousel-1.jpg" class="d-block w-100 mi-imagen" alt="...">
            <div class="carousel-caption d-none d-md-block">
             <!-- <h5>Novedades</h5>
             <p>Trending de temporada</p> -->
            </div>
          </div>
          <div class="carousel-item">
            <img src="/img/carousel-3.jpg" class="d-block w-100 mi-imagen" alt="...">
            <div class="carousel-caption d-none d-md-block">
             <!-- <h5>Seguinos en las redes</h5>
             <p>Participá de eventos semanales</p> -->
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
    </div>
    <!-- Fin Bootstrap Carousel con controles, indicadores y caption -->


<!-- FIN del BANNER -->

<!-- CATEGORIAS -->

<div class="lista-categorias">
  <article class="container-articulo-categoria cat1"><!-- (primer)Container de categoria de prod. -->
    <a href="{{ url('/categorias/sillones')}}">
    <strong>Botas</strong></a>
  </article><!-- /(primer)Container de categoria de prod. -->


  <article class="container-articulo-categoria cat2"><!-- (segundo)Container de categoria de prod.-->
    <a href="{{ url('/categorias/sillas')}}">
    <strong>Zapatos</strong></a>
  </article><!-- /(segundo)Container de categoria de prod.-->


  <article class="container-articulo-categoria cat3"><!-- (tercer)Container de categoria de prod.-->
    <a href="{{ url('/categorias/mesas')}}">
    <strong>Sandalias</strong></a>
  </article><!-- /(tercer)Container de categoria de prod.-->


  <article class="container-articulo-categoria cat4"><!-- (cuarto)Container de categoria de prod. con leer mas -->
    <a href="{{ url('/categorias/escritorios')}}">
    <strong>Zapatillas</strong></a>
  </article><!-- /(cuarto)Container de categoria de prod. con leer mas -->
</div><!-- /LISTA DE CATEGORIAS -->

<!-- /PRODUCTOS INDIVIDUALES, SOLO LA VISTA PROVISORIA, LUEGO VENDRAN DE LA DB -->

<h3 class="h3-home">LIFE IS SHORT, BUY THE SHOES!</h3>
  <div class="products-container">
    <div class="product">
      <img src="img/zapatos-1.jpg" alt="" class="product-photo">
      <span class="product-name">ZAPATO AZUL</span>
      <strong><span class="product-price">$2.500</span></strong>
    </div>
    <div class="product">
      <img src="img/zapatos-2.jpg" alt="" class="product-photo">
      <span class="product-name">ZAPATO ROJO</span>
      <strong><span class="product-price">$2.500</span></strong>
    </div>
    <div class="product">
      <img src="img/zapatos-3.jpg" alt="" class="product-photo">
      <span class="product-name">ZAPATO ROSA</span>
      <strong><span class="product-price">$2.500</span></strong>
    </div>
    <div class="product">
      <img src="img/zapatos-4.jpg" alt="" class="product-photo">
      <span class="product-name">ZAPATO NEGRO</span>
      <strong><span class="product-price">$2.500</span></strong>
    </div>
      <div class="product">
        <img src="img/zapatos-1.jpg" alt="" class="product-photo">
        <span class="product-name">ZAPATO AZUL</span>
        <strong><span class="product-price">$2.500</span></strong>
      </div>
      <div class="product">
        <img src="img/zapatos-2.jpg" alt="" class="product-photo">
        <span class="product-name">ZAPATO ROJO</span>
        <strong><span class="product-price">$2.500</span></strong>
      </div>
      <div class="product">
        <img src="img/zapatos-3.jpg" alt="" class="product-photo">
        <span class="product-name">ZAPATO ROSA</span>
        <strong><span class="product-price">$2.500</span></strong>
      </div>
      <div class="product">
        <img src="img/zapatos-4.jpg" alt="" class="product-photo">
        <span class="product-name">ZAPATO NEGRO</span>
        <strong><span class="product-price">$2.500</span></strong>
    </div>
  </div>
  <div class="button-container">
    <button type="submit" name="button" class='product-button'>Ver todos los productos</button>
  </div>
  <!-- VIDEO -->
  <video class='video' controls>
  <source src="img/video.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>

  <!-- INSTAGRAM -->
  <div class="insta-container">
    <span>¡Seguinos! </span>
    <i class="fab fa-instagram" class="logo-instagram"></i>
    <h3 class="h3-instagram"> CALZADOSVENANZIA</h3>
  </div>

<!-- INSTAGRAM FEED -->
<script type="text/javascript" src="js/instafeed.min.js"></script>
<script type="text/javascript" src="js/instafeed2.min.js"></script>

<div id="instafeed">

</div>

@endsection("principal")

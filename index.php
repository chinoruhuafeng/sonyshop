<?php
include './user/modulo/header.php';
?>

<body>
  <?php
  include './user/modulo/menu.php';
  ?>

  <main>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">

          <img src="./user/img/sony-fondo.jpg" alt="" width="100%" height="100%" />
          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Mejor Producto y Calidad.</h1>
              <p>La televisión nos proporciona temas sobre los que pensar, pero no nos deja tiempo para hacerlo.</p>

            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./user/img/tv.jpg" alt="" width="100%" height="100%" />
          <div class="container">
            <div class="carousel-caption">

            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./user/img/tv2.jpg" alt="" width="100%" height="100%" />
          <div class="container">
            <div class="carousel-caption text-end">

            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">

          <img src="./user/img/main.png" alt="" width="140" height="140" />
          <h2>Main Board</h2>
          <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
          <p><a class="btn btn-secondary" href="user/mainboard/mainboard.php">Ver producto &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
        <img src="./user/img/fuente.png" alt="" width="140" height="140" />
          <h2>Fuente</h2>
          <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
          <p><a class="btn btn-secondary" href="user/fuentes/fuentes.php">Ver producto &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="./user/img/leds.png" alt="" width="140" height="140" />
            <h2>Led's</h2>
          <p>And lastly this, the third column of representative placeholder content.</p>
          <p><a class="btn btn-secondary" href="user/leds/leds.php">Ver producto &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Pantalla de inicio sencilla.</h2>
          <p class="lead">Aprende cómo funciona un Smart TV simplificado y comienza a ver en streaming tus programas favoritos. Accede a tu decodificador de cable o antena de HDTV.</p>
        </div>
        <div class="col-md-5">
            <img src="./user/img/c2.png" alt="" width="500" height="500" />
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Control remoto fácil de usar.</h2>
          <p class="lead">Diseñado para que entre cómodamente en la palma de la mano, nuestro sencillo control remoto tiene todo lo que necesitas para controlar tu TV. Incluso puedes acceder a canales populares como Netflix con solo tocar un botón.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img src="./user/img/c1.png" alt="" width="500" height="500" />
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Busca a través de canales</h2>
          <p class="lead">Busca por título, actor o director y obten resultados imparciales en los canales principales para ver dónde puedes transmitir tus programas favoritos de forma gratuita o al menor costo.</p>
        </div>
        <div class="col-md-5">
            <img src="./user/img/c3.png" alt="" width="500" height="500" />
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <?php
    include './user/modulo/footer.php';
    ?>

  </body>
  </html>

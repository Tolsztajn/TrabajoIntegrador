
<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Roboto:400,900');
    </style>
    <title>We Love to Travel</title>
  </head>
  <body>
    <div class="container"> <!-- Contenedor principal -->
      <header> <!-- Encabezado logo + menu -->
        <div class="first-nav">
          <img src="img/logo-1.svg" alt="logo wt" class="logo1">
          <img src="img/menu.svg" alt="" class="menu-button">
          <nav class="second-nav">
            <ul>
              <li><a href="#">DESTINOS</a></li>
              <li><a href="#">ACTIVIDADES</a></li>
              <li><a href="#">CRONOGRAMA</a></li>
              <li><a href="#">CITY GUIDE</a></li>
            </ul>
          </nav>
          <nav class="login">
            <ul>
              <li><a href="login.html">LOGIN</a></li>
              <?php if (isset($_SESSION["usuario"])):?>
              <li><a href="#">¡Bienvenido <?php echo $_SESSION["usuario"]; ?>!</a></li>
            <?php endif?>
            </ul>
          </nav>
        </div>
      </header>

      <!-- main post -->

        <img src="img/berat-bw-12.jpg" alt="" class="main-post-img">
        <img src="img/logo-2.svg" alt="" class="logo2">
        <section class="main-post">
        <div class="post-title">
          <h2 class="sub-title">ALBANIA</h2>
          <h1 class="post-title">Road trip por Albania #2 — Visitá las distintas ciudades y sus playas</h1>
        </div>
        <div class="post-info">
          <p>Cerca del norte, en dirección al centro de Albania descubrí dos pueblos declarados por la UNESCO como patrimonio cultural.</p>
        </div>

      </section>

      <!-- otros destinos -->
      <section class="otros-destinos">
        <article class="destino">
          <img src="img/giverny-bw-16.jpg" alt="" class="otro-img">
          <h2 class="sub-title-destino">FRANCIA</h2>
          <h1 class="post-title-destino">Bajo los trazos de Monet en Giverny</h1>
            </article>
        <article class="destino">
          <img src="img/tenerife-bw-31.jpg" alt="" class="otro-img">
          <h2 class="sub-title-destino">ESPAÑA</h2>
          <h1 class="post-title-destino">Road trip por Tenerife en un itinerario de 5 días</h1>
          </article>
        <article class="destino">
          <img src="img/gjipe-bw-3.jpg" alt="" class="otro-img">
          <h2 class="sub-title-destino">CITY GUIDE</h2>
          <h1 class="post-title-destino">Descubri Nice y sus paisajes espectaculares — City guide</h1>
        </article>

        <!-- Agregar mas destinos x4 -->
    </section>
    <footer class="main-footer">
      <nav class="nav-footer">
        <ul>
          <li><a href="#">QUIENES SOMOS</a></li>
          <li><a href="preguntasFrecuentes.html">FAQ</a></li>
          <li><a href="#">CONTACTO</a></li>
        </ul>
      </nav>
    </footer>
</div>

  </body>
  <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>

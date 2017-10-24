
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
          <a href="?pagina=home"><img src="img/logo-1.svg" alt="logo wt" class="logo1"></a>
          <img src="img/menu.svg" alt="" class="menu-button">
          <nav class="second-nav">
            <ul>
              <li><a href="#">HABITACIONES</a></li>
              <li><a href="#">DEPARTAMENTOS</a></li>
              <li><a href="#">CASAS ENTERAS</a></li>
              <li><a href="#">HOSTELS</a></li>
            </ul>
          </nav>
          <nav class="login">
            <ul>
              <li><a href="?pagina=login">LOGIN</a></li>
              <?php if (isset($_SESSION["usuario"])):?>
              <li><a href="#">¡Bienvenido <?php echo $_SESSION["usuario"]; ?>!</a></li>
            <?php endif?>
            </ul>
          </nav>
        </div>
      </header>
<!-- main content-->
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
<?php
            if (!isset($_GET['pagina'])) {
    header('Location: ?pagina=home');
    exit;
}
            $pagesPermitidas = ['home','login','preguntasFrecuentes','register'];
            if(isset($_GET['pagina']) && in_array($_GET['pagina'],$pagesPermitidas)){
              include('pages/'.$_GET['pagina'].'.php');
            }else{
              include('pages/404.php');
            }
            ?>
          </div>
        </div>
      </div>
      </div>

    <footer class="main-footer">
      <nav class="nav-footer">
        <ul>
          <li><a href="?pagina=quines-somos">QUIENES SOMOS</a></li>
          <li><a href="?pagina=preguntasFrecuentes">FAQ</a></li>
          <li><a href="?pagina=contacto">CONTACTO</a></li>
        </ul>
      </nav>
    </footer>
</div>
  </body>
  <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>

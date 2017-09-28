<!DOCTYPE html>
<html>
  <head>
    <title>Ingresar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="with=device-width, user-scalable=no,initial-scale=1, maximum-scale=1, minimum-scale=1">
    <link rel="stylesheet" a href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
<div class="container">


    <div class="row">
      <header> <!-- Encabezado logo + menu -->

        <div class="first-nav">
          <img src="img/logo-1.svg" alt="logo wt" class="logo1">
          <img src="img/menu.svg" alt="" class="menu-button">
          <nav class="second-nav">
            <ul>
              <li><a href="#">ACTIVIDADES</a></li>
              <li><a href="#">LUGARES</a></li>
              <li><a href="#">CRONOGRAMA</a></li>
              <li><a href="#">CITY GUIDE</a></li>
            </ul>
          </nav>
        </div>
      </header>
    <div class="col-md-6 col-md-offset-3">
    <form class="" action="php/login.controller.php" method="post">
      <h2>Login</h2>
      <div class="form-group">
        <label for="">Usuario</label>
        <input type= "text" class="form-control" placeholder="Usuario" name="usuario">
      </div>
      <div class="form-group">
        <label for="">Email</label>
        <input type= "email" class="form-control" placeholder="Email" name="email">
      </div>
      <div class="form-group">
        <label>Contraseña</label>
        <input type="password" class="form-control" placeholder="&#128272;Contraseña" name="contrasena">
      </div>
      <div class="checkbox">
        <label for="">
          <input type="checkbox" name="" value="">Recordarme
        </label>
      </div>
      <button type="submit" name="button" class="btn btn-default">Ingresar</button>
      <ul class="list-unstyled list-inline">
        <li><a href="#">Olvide mi contraseña</a></li>
        <li><a href="register.php">Crear usuario</a></li>
      </ul>
    </form>
  </div>
    </div>
    </div>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </body>
</html>


  <body>
<div class="container">
    <div class="row">
      <header> <!-- Encabezado logo + menu -->
    <div class="col-md-6 col-md-offset-3">
    <form class="" action="?pagina=login.controller" method="post">
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
        <li><a href="?pagina=register">Crear usuario</a></li>
      </ul>
    </form>
  </div>
    </div>
    </div>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </body>

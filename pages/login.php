
<body>
<div class="form">
<header> <!-- Encabezado logo + menu -->
  <form class="form" action="?pagina=login.controller" method="post">
    <h2 class="login-title">LOGIN</h2>
    <div class="">
      <label for="" class="login-subtitle">Usuario</label>
      <input type= "text" class="form-control" placeholder="Usuario" name="usuario">
    </div>
    <div class="">
      <label for="" class="login-subtitle">Email</label>
      <input type= "email" class="form-control" placeholder="Email" name="email">
    </div>
    <div class="">
      <label class="login-subtitle">Contraseña</label>
      <input type="password" class="form-control" placeholder="&#128272;Contraseña" name="contrasena">
    </div>
    <div class="">
      <label for="" class="login-box">
        <input type="checkbox" name="" value="">Recordarme
      </label>
    </div>
    <button type="submit" name="button" class="btn btn-default">Ingresar</button>
    <ul class="subinfo">
      <li><a href="#">Olvide mi contraseña</a></li>
      <li><a href="?pagina=register">Crear usuario</a></li>
    </ul>
  </form>
</div>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</body>

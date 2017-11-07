<?php
  require_once('../php/soporte.php');

		$usuarioLogueado = $auth->usuarioLogueado($db);

		if ($usuarioLogueado == null) {
			$nombre = "Invitado";
		} else {
			$nombre = $usuarioLogueado->getUsername();
    }
    $productos = ["Hotel", "Departamento", "Hostel", "Casa"];

		$usuarios = $db->traerTodos();
     ?>
    <h1>Inicio</h1>
	<h2>Bienvenido <?=$nombre?></h2>

	<?php for ($i = 0; $i < count($productos); $i++) { ?>
		<div>
			<a href="producto.php?id=<?=$i?>">
				<?php
					echo $productos[$i];
				?>
			</a>
		</div>
	<?php } ?>

	<h2> Usuarios </h2>

	<?php foreach ($usuarios as $usuario) { ?>
		<div>
			<a href="/php/miPerfil.php?id=<?=$usuario->getId()?>">
				<?php
					echo $usuario->getEmail();
				?>
			</a>
		</div>
	<?php } ?>

  <img src="img/berat-bw-12.jpg" alt="" class="main-post-img">
  <img src="img/logo-2.svg" alt="" class="logo2">
  <section class="main-post">
  <div class="post-title">
    <h2 class="sub-title">ES POSIBLE</h2>
    <h1 class="post-title">Consegui tu alojamiento soñado y viví las vacaciones que siempre soñaste</h1>
  </div>
  <div class="post-info">
    <p>En la playa, en la montaña, en la ciudad, en los suburbios, en medio de la naturaleza. We love to travel siempre con vos.</p>
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

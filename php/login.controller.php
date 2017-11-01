<?php
session_start();

//Validacion Login

$errores = [];

  $usuario = trim($_POST ["usuario"]);
  if ($usuario == "") {
    $errores[]= "El nombre de usuario es obligatorio";
  }

  $email = trim($_POST ["email"]);
  if ($email == "") {
    $errores[]= "El email es obligatorio";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errores[]= "El email ingresado no es válido";
  }

  $password = trim($_POST["password"]);
  if ($password =="") {
    $errores["password"]="La password es obligatoria";
  }



//Falta validacion concuerda pass con usuario y mail

var_dump($errores);

//Loguear

if (!isset($_SESSION["logueado"]) && isset($_COOKIE["logueado"])) {
		$_SESSION["logueado"] = $_COOKIE["logueado"];
	}

function loguear($email){
  $_SESSION["logueado"] = $email;
}

function estaLogueado(){
  return isset($_SESSION["logueado"]);
}

function usuarioLogueado(){
  if (estaLogueado()) {
    $mail=$_SESSION["logueado"];
    return traerPorMail($mail);
  }else{
    return NULL;
  }
}

function logout(){
  session_destroy();
  setcookie("logueado", "", -1);
}



if (count($errores) == 0) {
  loguear($_POST["email"]);
  if (isset($_POST["recordarme"])) {
    recordarme($_POST["email"]); //Recordame
  }
  header("Location:../home.php");
}


$_SESSION ["usuario"] = $_POST["usuario"];
if (estaLogueado()) {
header("Location:../home.php");
exit;
}



 ?>

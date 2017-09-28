<?php
session_start();


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

var_dump($errores);

$_SESSION ["usuario"] = $_POST["usuario"];

header("Location:../home.php");


 ?>

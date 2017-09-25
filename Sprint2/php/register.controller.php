<?php

$errores = [];

$name = trim($_POST ["name"]);
if ($name == "") {
  $errores[]= "El nombre es un requisito obligatorio";
}

$surname = trim($_POST ["surname"]);
if ($surname == "") {
  $errores[]= "El apellido es un requisito obligatorio";
}

$telefono = trim($_POST["telefono"]);
if(!is_numeric($telefono)){
  $errores[] = "El número de teléfono no es válido";
}

$mail = trim($_POST ["mail"]);
if ($mail == "") {
  $errores[]= "El email es un requisito obligatorio";
} elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
  $errores[]= "El email ingresado no es válido";
}

var_dump($errores);
echo "<br>";
var_dump($_POST);





 ?>

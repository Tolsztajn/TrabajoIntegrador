<?php
session_start();

define("DB_PATH", "../db/usuarios.json");

require "../helpers.php";

//Validacion

$errores = [];

$name = trim($_POST ["name"]);
if ($name == "") {
  $errores["name"]= "El nombre es un requisito obligatorio";
}

$surname = trim($_POST ["surname"]);
if ($surname == "") {
  $errores["surname"]= "El apellido es un requisito obligatorio";
}

$telefono = trim($_POST["telefono"]);
if(!is_numeric($telefono)){
  $errores["telefono"] = "El número de teléfono no es válido";
}

$mail = trim($_POST ["mail"]);
if ($mail == "") {
  $errores["mail"]= "El email es un requisito obligatorio";
} elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
  $errores["mail"]= "El email ingresado no es válido";
}

if (getUserByEmail($mail, "../db/usuarios.json")){
  $errores["mail"]="El mail ya existe en la base";
}

$password = trim($_POST["password"]);
if ($password =="") {
  $errores["password"]="La password es obligatoria";
}

if($errores){
  $_SESSION ["errores"] = $errores;
  $_SESSION ["inputsValues"] = $_POST;
  header("Location: ../register.php");
  exit;
}

//Crear Imagen

//Crear usuario

$usuario = [
  "name" => $name,
  "surname" => $surname,
  "telefono" => $telefono,
  "mail" => $mail,
  "password" => password_hash($password, PASSWORD_DEFAULT)
];

// Recuperar datos
$usuarios = getUsers("../db/usuarios.json");

// Guardar usuario
$usuarios[] = $usuario;
$json = json_encode($usuarios);
file_put_contents(DB_PATH, $json);


 ?>

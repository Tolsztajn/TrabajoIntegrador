<?php
/*var_dump($_FILES['avatar']);
if($_FILES['avatar']['error']==UPLOAD_ERR_OK){
  $origen=$_FILES['avatar']['tmp_name'];

$ext= pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
var_dump($ext);
}
//move_upload_file($origen,$destino);
*/

session_start();

define("DB_PATH", "../db/usuarios.json");

include "../helpers.php";
include "pdo.php";
include "/Clases/Usuario.php";

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

function crearUsuario(){
  $usuario = [
    "name" => $_POST["name"],
    "surname" => $_POST["surname"],
    "telefono" => $_POST["telefono"],
    "mail" => $_POST["mail"],
    "password" => password_hash($_POST["password"], PASSWORD_DEFAULT)
  ];

  return $usuario;
}

/*function guardarUsuario($usuario){
  global $db;
  $query = $db ->prepare("Insert into usuario values (default, :name, :surname, :telefono, :mail, :password)");

      $query->bindValue(":name", $usuario["name"]);
  		$query->bindValue(":surname", $usuario["surname"]);
  		$query->bindValue(":telefono", $usuario["telefono"]);
  		$query->bindValue(":mail", $usuario["mail"]);
  		$query->bindValue(":password", $usuario["password"]);

  		$id = $db->lastInsertId();
  		$usuario["id"] = $id;

  		$query->execute();

  		return $usuario;
}*/


$usuario = new Usuario ($_POST['name'],$_POST['surname'],$_POST['telefono'],$_POST['mail'],$_POST['password']);
$usuario->save();
exit;





function traerTodos() {
		global $db;

		$query = $db->prepare("Select * from usuarios");
		$query->execute();

		return $query->fetchAll();
	}

	function traerPorMail($mail) {
		global $db;

		$query = $db->prepare("Select * from usuarios wheremail = :mail");
		$query->bindValue(":mail", $mail);

		$query->execute();

		return $query->fetch();
	}





// Recuperar datos
$usuarios = getUsers("../db/usuarios.json");

// Guardar usuario
$usuarios[] = $usuario;
$json = json_encode($usuarios);
file_put_contents(DB_PATH, $json);


 ?>

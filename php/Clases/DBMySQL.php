<?php

require_once("db.php");
require_once("usuario.php");

class DBMySQL extends DB {
  private $db;

  public function __construct() {
    $dsn = 'mysql:host=localhost;dbname=reglog;
    charset=utf8mb4;port=3306';
    $user ="root";
    $pass = "root";

    try {
      $this->db = new PDO($dsn, $user, $pass);
    } catch (Exception $e) {
      echo "La conexion a la base de datos falló: " . $e->getMessage();
    }

  }

  public function guardarUsuario(Usuario $usuario) {

		$query = $this->db->prepare("Insert into usuarios values(default, :email, :password,:edad,:username,:pais)");

		$query->bindValue(":email", $usuario->getEmail());
		$query->bindValue(":password", $usuario->getPassword());
		$query->bindValue(":edad", $usuario->getEdad());
		$query->bindValue(":username", $usuario->getUsername());
		$query->bindValue(":pais", $usuario->getPais());

		$id = $this->db->lastInsertId();
		$usuario->setId($id);

		$query->execute();

		return $usuario;
  }
  public function traerTodos() {
		$query = $this->db->prepare("Select * from usuarios");
		$query->execute();

    $arrayFinal = [];

		$usuarios = $query->fetchAll();

    foreach ($usuarios as $usuario) {
      $arrayFinal[] = new Usuario($usuario);
    }

    return $arrayFinal;
  }
  public function traerPorMail($email) {
		$query = $this->db->prepare("Select * from usuarios where email = :email");
		$query->bindValue(":email", $email);

		$query->execute();

		$usuario = $query->fetch();

    if ($usuario != null) {
      return new Usuario($usuario);
    }
    else {
      return null;
    }
  }
}

?>

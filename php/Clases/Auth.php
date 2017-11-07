<?php
require_once("db.php");
class Auth {

  public function __construct() {
    session_start();

  	if (!isset($_SESSION["logueado"]) && isset($_COOKIE["logueado"])) {
  		$_SESSION["logueado"] = $_COOKIE["logueado"];
  	}
  }

  public function loguear($email) {
    $_SESSION["logueado"] = $email;
  }

  public function estaLogueado() {
    return isset($_SESSION["logueado"]);
  }

  public function usuarioLogueado(DB $db) {
    if ($this->estaLogueado()) {
      $mail = $_SESSION["logueado"];
      return $db->traerPorMail($mail);
    } else {
      return NULL;
    }
  }

  public function recordame($email) {
    setcookie("logueado", $email, time() + 3600 * 2);
  }

  public function logout() {
    session_destroy();
		setcookie("logueado", "", -1);
  }
}


?>

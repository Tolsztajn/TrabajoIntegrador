<?php

require_once("db.php");

class Validador {
  public function validarInformacion($informacion, DB $db) {
    $errores = [];

		foreach ($informacion as $clave => $valor) {
			$informacion[$clave] = trim($valor);
		}


		if (strlen($informacion["username"]) <= 3) {
			$errores["username"] = "Tenes que poner más de 3 caracteres en tu nombre de usuario";
		}

		if ($informacion["edad"] < 18) {
			$errores["edad"] = "Tenes que tener más de 18 años";
		}

		if (is_numeric($informacion["telefono"]) == false) {
			$errores["telefono"] = "El telefono debe ser un numero";
		}


		if ($informacion["email"] == "") {
			$errores["email"] = "Che, dejaste el mail incompleto";
		}
		else if (filter_var($informacion["email"], FILTER_VALIDATE_EMAIL) == false) {
			$errores["mail"] = "El mail tiene que ser un mail";
		} else if ($db->traerPorMail($informacion["email"]) != NULL) {
			$errores["mail"] = "El usuario ya existia!";
		}

		if ($informacion["password"] == "") {
			$errores["password"] = "No llenaste la contraseña";
		}

		if ($informacion["cpassword"] == "") {
			$errores["cpassword"] = "No llenaste completar contraseña";
		}

		if ($informacion["password"] != "" && $informacion["cpassword"] != "" && $informacion["password"] != $informacion["cpassword"]) {
			$errores["password"] = "Las contraseñas no coinciden";
		}

    if ($_FILES["avatar"]["error"] != UPLOAD_ERR_OK)
		{
      $errores["avatar"] = "Hubo un error al cargar la imagen";
    } else {
      $nombre=$_FILES["avatar"]["name"];

			$ext = pathinfo($nombre, PATHINFO_EXTENSION);

			if ($ext != "jpg" && $ext != "png" && $ext != "jpeg") {
				$errores["avatar"] = "La imagen no tiene el formato adecuado";
			}
    }


		return $errores;
  }

  public function validarLogin($informacion, DB $db) {
    $errores = [];

		foreach ($informacion as $clave => $valor) {
			$informacion[$clave] = trim($valor);
		}


		if ($informacion["email"] == "") {
			$errores["email"] = "Che, dejaste el mail incompleto";
		}
		else if (filter_var($informacion["email"], FILTER_VALIDATE_EMAIL) == false) {
			$errores["mail"] = "El mail tiene que ser un mail";
		} else if ($db->traerPorMail($informacion["email"]) == NULL) {
			$errores["mail"] = "El usuario no esta en nuestra base";
		}

		$usuario = $db->traerPorMail($informacion["email"]);

		if ($informacion["password"] == "") {
			$errores["password"] = "No llenaste la contraseña";
		} else if ($usuario != NULL) {
			//El usuario existe y puso contraseña
			// Tengo que validar que la contraseño que ingreso sea valida
			if (password_verify($informacion["password"], $usuario->getPassword()) == false) {
				$errores["password"] = "La contraseña no verifica";
			}
		}




		return $errores;
  }
}

 ?>

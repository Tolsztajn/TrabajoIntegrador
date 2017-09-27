<?php

function getUsers ($pathDB)
{
	$usuarios = [];
	if (file_exists($pathDB)) {
		$json = file_get_contents($pathDB);
		$usuarios = json_decode($json, true);
	}
	return $usuarios;
}

function getUserByEmail ($mail, $pathDB)
{
	$usuarios = getUsers($pathDB);
	$usuario = false;
	for($i=0;$i<count($usuarios); $i++){
		if($usuarios[$i]['mail'] == $mail){
			$usuario = $usuarios[$i];
			break;
		}
	}
	return $usuario;
}
?>

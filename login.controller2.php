<?php

$j_usuarios = array('name'=> 'Juan', 'surname'=> 'Perez','telefono'=> '1122334455', 'mail'=> 'jperez@mail.com'
        );


//Creo archivo usuarios JSON
$json_usuarios = json_encode($j_usuarios);
$file = 'usuarios.json';
file_put_contents($file, $json_usuarios);

// Leo archivo usuarios JSON

$datos_usuarios = file_get_contents("usuarios.json");
$json_usuarios = json_decode($datos_usuarios, true);

foreach ($json_usuarios as $j_usuarios) {

    echo $j_usuarios."<br>";
}

?>

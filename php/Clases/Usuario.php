<?php


class Usuario {

  private $name;
  private $surname;
  private $telefno;
  private $mail;
  private $password;
  private $db;

  function _construct($name, $surname, $telefono, $mail,$password){

   $this->name = $name;
   $this->surname = $surname;
   $this->telefono = $telefono;
   $this->mail = $mail;
   $this->password = $this->setPassword($password);

   $this->db = new PDO("mysql:host=localhost;dbname=hoteles_db","root","root");

}

  public function setPassword($value){

    $this->password = password_hash($value, PASSWORD_DEFAULT);

  }


}




 ?>

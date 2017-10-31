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
   $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}

  public function setPassword($value){

    $this->password = password_hash($value, PASSWORD_DEFAULT);

  }

  public function save(){

    $sql = "INSERT INTO usuarios (name,surname,telefono,mail,password) VALUES (?,?,?,?,?)";
    $stmt = $this->db->prepare($sql);
    $stmt ->bindValue(":nombre", $this->nombre, PARAM::STR);
    $stmt ->bindValue(":surname", $this->surname, PARAM::STR);
    $stmt ->bindValue(":telefono", $this->telefono, PARAM::INT);
    $stmt ->bindValue(":mail", $this->mail, PARAM::STR);
    $stmt ->bindValue(":password", $this->password, PARAM::STR);
    $stmt->execute();


  }


}




 ?>

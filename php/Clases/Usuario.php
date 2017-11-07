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



    /**
     * Get the value of Name
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of Name
     *
     * @param mixed name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of Surname
     *
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set the value of Surname
     *
     * @param mixed surname
     *
     * @return self
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get the value of Telefno
     *
     * @return mixed
     */
    public function getTelefno()
    {
        return $this->telefno;
    }

    /**
     * Set the value of Telefno
     *
     * @param mixed telefno
     *
     * @return self
     */
    public function setTelefno($telefno)
    {
        $this->telefno = $telefno;

        return $this;
    }

    /**
     * Get the value of Mail
     *
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of Mail
     *
     * @param mixed mail
     *
     * @return self
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get the value of Password
     *
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Get the value of Db
     *
     * @return mixed
     */
    public function getDb()
    {
        return $this->db;
    }

    /**
     * Set the value of Db
     *
     * @param mixed db
     *
     * @return self
     */
    public function setDb($db)
    {
        $this->db = $db;

        return $this;
    }

}



 ?>

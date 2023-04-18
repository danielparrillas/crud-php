<?php

class DataBaseConnection
{
  private $host = "localhost";
  private $name = "php_crud";
  private $user = "php_user";
  private $password = "12345678";

  public function conectar()
  {
    try {
      $PDO = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->name, $this->user, $this->password);
      return $PDO;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }
}

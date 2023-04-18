<?php

class UserModel
{
  private $PDO;
  public function __construct()
  {
    require_once($_SERVER['DOCUMENT_ROOT'] . '/crud/config/db.php');
    $con = new DataBaseConnection();
    $this->PDO = $con->conectar();
  }

  public function insertar($nombre)
  {
    $sql = $this->PDO->prepare("INSERT INTO users (username) VALUES(:nombre)");
    $sql->bindParam(":nombre", $nombre);
    return $sql->execute() ? $this->PDO->lastInsertId() : false;
  }

  public function encontrarPorId($id)
  {
    $sql = $this->PDO->prepare("SELECT * FROM users WHERE id = :id LIMIT 1");
    $sql->bindParam(":id", $id);
    return $sql->execute() ? $sql->fetch() : false;
  }

  public function traerTodos()
  {
    $sql = $this->PDO->prepare("SELECT * FROM users");
    return $sql->execute() ? $sql->fetchAll() : false;
  }

  public function actualizar($id, $nombre)
  {
    $sql = $this->PDO->prepare("UPDATE users SET username = :nombre WHERE id = :id");
    $sql->bindParam(":nombre", $nombre);
    $sql->bindParam(":id", $id);
    return $sql->execute() ? true : false;
  }

  public function eliminar($id)
  {
    $sql = $this->PDO->prepare("DELETE FROM users WHERE id = :id");
    $sql->bindParam(":id", $id);
    return $sql->execute() ? true : false;
  }
}

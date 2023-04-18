<?php


class UserController
{
  private $model;

  public function __construct()
  {
    require_once($_SERVER['DOCUMENT_ROOT'] . '/crud/models/userModel.php');
    $this->model = new UserModel();
  }

  public function guardar($nombre)
  {
    $id = $this->model->insertar($nombre);

    return $id ? header("Location:detail.php?id=" . $id) : header("Location:create.php");
  }

  public function encontrarPorId($id)
  {
    return $this->model->encontrarPorId($id) ?: header("Location:index.php");
  }

  public function traerTodos()
  {
    return $this->model->traerTodos() ?: false;
  }

  public function actualizar($id, $nombre)
  {
    return $this->model->actualizar($id, $nombre) ? header("Location:detail.php?id=" . $id) : header("Location: index.php");
  }

  public function eliminar($id)
  {
    return $this->model->eliminar($id) ? header("Location:/crud/views/user/index.php") : header("Location:show.php?id=" . $id);
  }
}

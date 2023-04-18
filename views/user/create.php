<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/crud/views/includes/header.php");

if (isset($_POST["submit"])) {
  require_once($_SERVER['DOCUMENT_ROOT'] . "/crud/controllers/userController.php");
  $controller = new UserController();
  $controller->guardar($_POST["nombre"]);
}

?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" autocomplete="off">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre del usuario</label>
    <input type="text" name="nombre" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Guardar</button>
  <a class="btn btn-danger" href="index.php">Cancelar</a>
</form>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/crud/views/includes/footer.php"); ?>
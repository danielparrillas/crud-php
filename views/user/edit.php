<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/crud/views/includes/header.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/crud/controllers/userController.php");

$userController = new UserController();

if (isset($_POST["submit"])) {
  $userController->actualizar($_POST["id"], $_POST["username"]);
  echo "is set";
} else {
  $user = $userController->encontrarPorId($_GET['id']);
}

?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" autocomplete="off">
  <h2>Editando registro</h2>
  <div class="mb-3">
    <input type="text" name="id" value="<?= $user["id"] ?>" readonly hidden>
    <label for="exampleInputEmail1" class="form-label">Nombre del usuario</label>
    <input type="text" name="username" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $user["username"] ?>">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Actualizar</button>
  <a class="btn btn-danger" href="index.php">Cancelar</a>
</form>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/crud/views/includes/footer.php"); ?>
<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/crud/views/includes/header.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/crud/controllers/userController.php");

$userController = new UserController();
$user = $userController->encontrarPorId($_GET['id']);
?>

<h2 class="text-center">Detalles del usuario</h2>
<div class="pb-3">
  <a href="index.php" class="btn btn-primary">Regresar</a>
  <a href="edit.php?id=<?= $user["id"] ?>" class="btn btn-warning">Editar</a>

  <?php require_once($_SERVER['DOCUMENT_ROOT'] . "/crud/views/includes/eliminarUsuarioModal.php") ?>

</div>
<table class="table container-fluid">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th>Nombre</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="col"><?php echo $user["id"] ?></td>
      <td scope="col"><?php echo $user["username"] ?></td>
    </tr>
  </tbody>
</table>



<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/crud/views/includes/footer.php"); ?>
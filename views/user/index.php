<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/crud/views/includes/header.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/crud/controllers/userController.php");
$userController = new UserController();

$users = $userController->traerTodos();
?>

<div class="mb-3">
  <a href="/crud/views/user/create.php" class="btn btn-primary">Agregar nuevo usuario</a>
</div>
<table class="table container-fluid">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php if ($users) : ?>
      <?php foreach ($users as $user) : ?>
        <tr>
          <td><?= $user["id"] ?></td>
          <td><?= $user["username"] ?></td>
          <td>
            <a href="detail.php?id=<?= $user["id"] ?>" class="btn btn-success">👀</a>
            <a href="edit.php?id=<?= $user["id"] ?>" class="btn btn-warning">🖋️</a>
            <?php require($_SERVER['DOCUMENT_ROOT'] . "/crud/views/includes/eliminarUsuarioModal.php") ?>
          </td>
        </tr>
      <?php endforeach; ?>
    <?php else : ?>
      <tr>
        <td colspan="3" class="text-center">No hay registros</td>
      </tr>
    <?php endif; ?>
  </tbody>
</table>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/crud/views/includes/footer.php"); ?>
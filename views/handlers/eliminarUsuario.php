<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/crud/controllers/userController.php");
$userController = new UserController();
$userController->eliminar($_GET["id"]);

  <!-- Button trigger modal -->
  <a href="eliminar.php?id=<?= $user["id"] ?>" class="btn btn-danger" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">¿Desea eliminar el registro?</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Una vez eliminado no se podra recuperar el registro
        </div>
        <div class="modal-footer">
          <a href="/crud/views/handlers/eliminarUsuario.php?id=<?= $user["id"] ?>" type="button" class="btn btn-danger">Eliminar</a>
        </div>
      </div>
    </div>
  </div>
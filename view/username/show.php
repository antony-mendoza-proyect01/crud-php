<?php
    require_once("C://xampp/htdocs/proyecto/view/head/head.php");
    require_once("C://xampp/htdocs/proyecto/controller/usernameController.php");

    $obj = new usernameController();
    //datelles de registro
    $date = $obj->show($_GET['id']);
   // print_r($date);
?>

    <h2 class="text-center">Detalles del Registro </h2>
    <div class="pb-3">
        <a href="index.php" class="btn btn-primary"> Regresar</a>
        <a href="edit.php?id=<?= $date[0]?>" class="btn btn-info"> Actualizar</a>
        <!-- Button trigger modal -->
        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" >Eliminar</a>

    <!-- Modal -->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">¿Desea Eliminar el Registro?</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           Una vez Eliminado no se podra Recuperar el registro
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
            <a href="delete.php?id=<?= $date[0]?>" class="btn btn-danger">Eliminar</a>
        </div>
        </div>
    </div>
    </div>
</div>

<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="col"><?= $date["id"]?></td>
            <td scope="col"><?= $date["nombre"]?></td>
        </tr>
    </tbody>
</table>




<?php
require_once("C://xampp/htdocs/proyecto/view/head/footer.php");
?>
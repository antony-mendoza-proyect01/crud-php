<?php
    require_once("C://xampp/htdocs/proyecto/view/head/head.php");
    require_once("C://xampp/htdocs/proyecto/controller/usernameController.php");

    $obj = new usernameController();
    //datelles de registro
    $user = $obj->show($_GET['id']);
   // print_r($user);
?>

<form action="update.php" method="post" autocomplete="off">
    <h2 class="text-center">Modificar Registro </h2>
<div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">ID</label>
    <div class="col-sm-10">
      <input type="text"  name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?= $user[0]?>">
    </div>

  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-10">
      <input type="text" name="nombre" class="form-control" id="inputPassword" value="<?= $user[1]?>">
    </div>
  </div>
  <div>
    <input type="submit" class="btn btn-info" value="Actualizar">
    <a class="btn btn-danger" href="show.php?id=<?= $user[0]?>">Cancelar</a>
  </div>

</form>



<?php
require_once("C://xampp/htdocs/proyecto/view/head/footer.php");
?>
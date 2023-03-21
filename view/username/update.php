<?php
require_once("C://xampp/htdocs/proyecto/controller/usernameController.php");
$obj = new usernameController();
$obj->update($_POST['id'],$_POST['nombre']);
?>
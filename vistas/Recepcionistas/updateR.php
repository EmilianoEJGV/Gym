<?php

require_once("C://xampp/htdocs/GYM/controladores/controladorecep.php");

$obj= new controladorecep();
$obj->update($_POST['id'],$_POST['recepcionista'],$_POST['password'],$_POST['correo']);

?>
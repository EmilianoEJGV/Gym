<?php

require_once("C://xampp/htdocs/GYM/controladores/controladorplan.php");

$obj= new controladorplan();
$obj->update($_POST['id'],$_POST['nombredelplan']);

?>
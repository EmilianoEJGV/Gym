<?php

require_once("C://xampp/htdocs/GYM/vistas/head/head.php");
require_once("C://xampp/htdocs/GYM/controladores/controladorplan.php");

$obj = new controladorplan();
$obj->delete($_GET['id']);


?>
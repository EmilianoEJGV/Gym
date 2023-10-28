<?php

require_once("C://xampp/htdocs/GYM/vistas/head/head.php");
require_once("C://xampp/htdocs/GYM/controladores/controladorecep.php");

$obj = new controladorecep();
$obj->delete($_GET['id']);


?>
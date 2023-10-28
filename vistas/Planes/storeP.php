<?php

    require_once ("C:/xampp/htdocs/GYM/controladores/controladorplan.php");

    $obj = new controladorplan();

    $obj -> guardar ( $_POST['nombredelplan']);

?>

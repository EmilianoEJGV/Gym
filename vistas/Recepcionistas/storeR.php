<?php

    require_once ("C:/xampp/htdocs/GYM/controladores/controladorecep.php");

   

    $obj = new controladorecep();


    $obj -> guardar ( $_POST['recepcionista'],$_POST['password'],$_POST['correo']);
    ?>
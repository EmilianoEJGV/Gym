<?php
require_once("C://xampp/htdocs/GYM/vistas/head/head.php");
require_once("C://xampp/htdocs/GYM/controladores/controladorecep.php");

$obj = new controladorecep();
$user = $obj->show($_GET['id']);
?>

<div class="container mt-4">
    <form action="updateR.php" method="post" autocomplete="off">
        <h2 class="mb-4">Modificación de Registro</h2>

        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">ID Recepcionista</label>
            <div class="col-sm-10">
                <input type="text" name="id" readonly class="form-control-plaintext" value="<?=$user[0]?>">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo nombre del Recepcionista</label>
            <div class="col-sm-10">
                <input type="text" name="recepcionista" class="form-control" value="<?=$user[1]?>">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password del recepcionista</label>
            <div class="col-sm-10">
                <input type="text" name="password" class="form-control" value="<?=$user[2]?>">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Correo</label>
            <div class="col-sm-10">
                <input type="text" name="correo" class="form-control" value="<?=$user[3]?>">
            </div>
        </div>

        <div class="mb-3 row">
            <div class="col-sm-10 offset-sm-2">
                <input type="submit" class="btn btn-success" value="Actualizar">
                <a class="btn btn-danger" href="showR.php?id=<?=$user[0]?>">Cancelar</a>
            </div>
        </div>
    </form>
</div>

<?php
require_once("C://xampp/htdocs/GYM/vistas/head/footer.php");
?>

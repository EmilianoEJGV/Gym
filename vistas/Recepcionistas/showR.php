<?php
require_once("C://xampp/htdocs/GYM/vistas/head/head.php");
require_once("C://xampp/htdocs/GYM/controladores/controladorecep.php");

$obj = new controladorecep();
$date = $obj->show($_GET['id']);
?>

<div class="container mt-4">
    <h2 class="text-center">Detalles del registro</h2>
    <div class="pb-3">
        <a href="indexR.php" class="btn btn-primary">Regresar</a>
        <a href="editR.php?id=<?=$date[0]?>" class="btn btn-success">Actualizar</a>
        <!-- Button trigger modal -->
        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">¿Desea eliminar el registro del usuario?</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Una vez eliminado, ya no se podrá recuperar el registro
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
                        <a href="deleteR.php?id=<?=$date[0]?>" class="btn btn-danger">Eliminar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <table class="table container-fluid">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Password</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="col"><?=$date[1]?></td>
                <td scope="col"><?=$date[2]?></td>
            </tr>
        </tbody>
    </table>
</div>

<?php
require_once("C://xampp/htdocs/GYM/vistas/head/footer.php");
?>

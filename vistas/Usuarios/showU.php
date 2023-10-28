<?php
require_once("C://xampp/htdocs/GYM/vistas/head/head.php");
require_once("C://xampp/htdocs/GYM/controladores/controladorusuarios.php");

$obj = new controladorusuarios();
$date = $obj->show($_GET['id']);
?>

<div class="container mt-4">
    <h2 class="text-center">Detalles del registro</h2>
    <div class="pb-3">
        <a href="indexU.php" class="btn btn-primary">Regresar</a>
        <a href="editU.php?id=<?=$date[0]?>" class="btn btn-success">Actualizar</a>
        
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
                        <a href="deleteU.php?id=<?=$date[0]?>" class="btn btn-danger">Eliminar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <table class="table container-fluid">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Primer Nombre</th>
                <th scope="col">Segundo Nombre</th>
                <th scope="col">Primer Apellido</th>
                <th scope="col">Segundo Apellido</th>
                <th scope="col">Edad</th>
                <th scope="col">Correo</th>
                <th scope="col">Celular</th>
                <th scope="col">Contraseña</th>
                 <!--<th scope="col">ID Plan</th>-->
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="col"><?=$date[0]?></td>
                <td scope="col"><?=$date[1]?></td>
                <td scope="col"><?=$date[2]?></td>
                <td scope="col"><?=$date[3]?></td>
                <td scope="col"><?=$date[4]?></td>
                <td scope="col"><?=$date[5]?></td>
                <td scope="col"><?=$date[6]?></td>
                <td scope="col"><?=$date[7]?></td>
                <td scope="col"><?=$date[8]?></td>
            </tr>
        </tbody>
    </table>
</div>

<?php
require_once("C://xampp/htdocs/GYM/vistas/head/footer.php");
?>

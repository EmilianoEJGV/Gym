<?php
    require_once("C://xampp/htdocs/GYM/vistas/head/head2.php");
    require_once("C://xampp/htdocs/GYM/controladores/controladorusuarios2.php");

    $obj = new controladorusuarios2();
    $row = $obj->indexSesion();
?>

<div class="container mt-4">
    <div class="table-responsive mx-auto">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
              
            </thead>
            <tbody>
                <?php if ($row): ?>
                    <tr class="table-success">
                        <td>ID Cliente:</td>
                        <td><?= isset($row['id']) ? $row['id'] : '' ?></td>
                    </tr>
                    <tr class="table-success">
                        <td>Primer Nombre:</td>
                        <td><?= isset($row['primernombre']) ? $row['primernombre'] : '' ?></td>
                    </tr>
                    <tr class="table-success">
                        <td>Segundo Nombre:</td>
                        <td><?= isset($row['segundonombre']) ? $row['segundonombre'] : '' ?></td>
                    </tr>
                    <tr class="table-success">
                        <td>Primer Apellido:</td>
                        <td><?= isset($row['primerapellido']) ? $row['primerapellido'] : '' ?></td>
                    </tr>
                    <tr class="table-success">
                        <td>Segundo Apellido:</td>
                        <td><?= isset($row['segundoapellido']) ? $row['segundoapellido'] : '' ?></td>
                    </tr>
                    <tr class="table-success">
                        <td>Edad:</td>
                        <td><?= isset($row['edad']) ? $row['edad'] : '' ?></td>
                    </tr>
                    <tr class="table-success">
                        <td>Correo:</td>
                        <td><?= isset($row['correo']) ? $row['correo'] : '' ?></td>
                    </tr>
                    <tr class="table-success">
                        <td>Celular:</td>
                        <td><?= isset($row['celular']) ? $row['celular'] : '' ?></td>
                    </tr>
                    <tr class="table-success">
                        <td>Password:</td>
                        <td><?= isset($row['password']) ? $row['password'] : '' ?></td>
                    </tr>
                    <tr class="table-success">
                        <td>Acciones:</td>
                        <td class="text-center align-middle">
                           
                        
                        <a href="editU.php?id=<?= isset($row['id']) ? $row['id'] : '' ?>" class="btn btn-secondary">Actualizar</a>
                        <!-- Button trigger modal -->
                        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?= isset($row['id']) ? $row['id'] : '' ?>">Eliminar</a>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal<?= isset($row['id']) ? $row['id'] : '' ?>" tabindex="-1" aria-labelledby="exampleModalLabel<?= isset($row['id']) ? $row['id'] : '' ?>" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel<?= isset($row['id']) ? $row['id'] : '' ?>">¿Desea eliminar el registro del usuario?</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Una vez eliminado, ya no se podrá recuperar el registro
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
                                        <a href="deleteU.php?id=<?= isset($row['id']) ? $row['id'] : '' ?>" class="btn btn-danger">Eliminar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        </td>
                    </tr>
                <?php else: ?>
                    <tr>
                        <td colspan="2" class="text-center table-danger">No hay registros</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>



<?php require_once("C://xampp/htdocs/GYM/vistas/head/footer.php"); ?>


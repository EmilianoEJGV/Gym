<?php
    require_once("C://xampp/htdocs/GYM/vistas/head/head2.php");
    require_once("C://xampp/htdocs/GYM/controladores/controladorplan.php");

    $obj = new controladorplan();
    $rows = $obj->index();
?>

<div class="container mt-4">
    <div class="mb-3">
        <!--<a href="/GYM/vistas/Usuarios/createP.php" class="btn btn-primary">Agregar nuevo Plan</a>-->
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">ID Plan</th>
                <th scope="col">Nombre del plan</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php if ($rows): ?>
                <?php foreach ($rows as $row): ?>
                    <tr>
                        <td><?=$row[0]?></td>
                        <td><?=$row[1]?></td>
                        <td class="text-center align-middle">
                            <a href="showP2.php?id=<?=$row[0]?>" class="btn btn-primary">Detalles</a>
                            

                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3" class="text-center">No hay registros</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?php
    require_once("C://xampp/htdocs/GYM/vistas/head/footer.php");
?>


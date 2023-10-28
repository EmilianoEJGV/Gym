<?php
session_start();


//print_r($_POST);
if ($_POST) {
    

    include("C://xampp/htdocs/GYM/BD/ConexionBD.php");
    $conexion = ConexionBD::getInstance();
    

    $sentencia = $conexion->getConnection()->prepare("SELECT *,count(*) as n_usuarios 
        FROM `tbl_usuarios` WHERE primernombre=:primernombre AND password=:password");

    $primernombre = $_POST["primernombre"];
    $password = $_POST["password"];

    $sentencia->bindParam(":primernombre", $primernombre);
    $sentencia->bindParam(":password", $password);

    $sentencia->execute();
    $registro = $sentencia->fetch(PDO::FETCH_LAZY);
   

    if ($registro["n_usuarios"] > 0) {
        $_SESSION['primernombre'] = $registro["primernombre"];
        $_SESSION['logueado'] = true;

        header("Location:indexusuarios.php");
    } else {
        $mensaje = "Error: El usuario o contraseña son incorrectos";
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body class="d-flex align-items-center justify-content-center" style="min-height: 100vh; font-size: 18px;">
    <main class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header custom-header text-center">
                        <img src="http://localhost/muscle.jpeg" alt="Logo" width="200" height="90">
                    </div>
                    <div class="card-body custom-body">
                        <?php if (isset($mensaje)) { ?>
                            <div class="alert alert-danger" role="alert">
                                <strong><?php echo $mensaje; ?></strong>
                            </div>
                        <?php } ?>

                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="primernombre" class="form-label">Cuenta Usuarios:</label>
                                <input type="text" class="form-control" name="primernombre" id="primernombre"
                                    aria-describedby="helpId" placeholder="Escriba su usuario">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña:</label>
                                <input type="password" class="form-control" name="password" id="password"
                                    aria-describedby="helpId" placeholder="Digite su contraseña">
                            </div>

                           <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-dark btn-lg">Iniciar sesión</button>
                             
                            </div>

                        </form>
                    </div>
                    <div class="card-footer text-muted"></div>
                </div>  
            </div>
        </div>
    </main>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
        crossorigin="anonymous"></script>
</body>

</html>

<style>
    .custom-header {
        background-color: #546e7a; /* Gris azulado */
        color: #ffffff; /* Blanco */
        padding: 20px;
    }

    .custom-body {
        background-color: #424242; /* Gris oscuro */
        color: #ffffff; /* Blanco */
        padding: 20px;
    }

    .accent-color {
        background-color: #8d6e63; /* Marrón oscuro */
        color: #ffffff; /* Blanco */
    }

    body {
        background-color: #616161; /* Gris medio */
    }
</style>











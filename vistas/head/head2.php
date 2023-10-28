

<?php
    
    session_start();
   

    if(isset($_SESSION['primernombre'])){
      //  header("Location:".$url_base."index.php");
    }
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Musclehealth</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid bg-dark p-2 mb-3">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/GYM/indexusuarios.php">Musclehealth Users</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Usuarios
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/GYM/vistas/Usuarios2/indexU2.php">Información Personal</a></li>
                        </ul>
                    </li>

                    <!-- Second Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Planes a elegir
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/GYM/vistas/Planes2/indexP2.php">Información planes</a></li>
                        </ul>
                    </li>
                    <!-- Add more dropdowns as needed -->

                    <!-- Third Dropdown Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Consejos de nutrición
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/GYM/vistas/Recepcionistas/indexR2.php">Información acerca de nutrición</a></li>
                        </ul>
                    </li>
                    <!-- Add more dropdowns as needed -->


                    
                    <!-- Third Dropdown Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Sesión
                        </a>
                        <ul class="dropdown-menu">
                        
                        <li><a class="dropdown-item"> Usuario: <?php echo $_SESSION['primernombre']?> </a></li>
                            <li><a class="dropdown-item" href="/GYM/cerrar.php">Cerrar sesión</a></li>
                        </ul>
                    </li>
                    <!-- Add more dropdowns as needed -->

                </ul>
            </div>
        </div>
    </nav>

    </div>
    <div class="container-fluid">


   

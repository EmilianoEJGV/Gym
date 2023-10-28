<?php
    require_once("C://xampp/htdocs/GYM/vistas/head/head.php");
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MuscleHealth - Tu destino para un cuerpo saludable</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #4682b4;
            padding: 20px;
            text-align: center;
            color: white;
        }

        header img {
            max-width: 200px;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        header img:hover {
            transform: scale(1.1);
        }

        header h1 {
            margin: 10px 0 0;
        }

        header p {
            margin: 5px 0 0;
        }

        main {
            flex: 1;
            padding: 20px;
        }

        main img {
            max-width: 450px;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        main img:hover {
            transform: scale(1.1);
        }

        main p {
            text-align: center;
            font-weight: bold;
            font-size: 18px;
            color: #333;
        }

        footer {
            background-color: #4682b4;
            color: white;
            padding: 10px 0;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<!-- Encabezado de la página -->
<header>
    <img src="http://localhost/muscle.jpeg" alt="MuscleHealth Logo">
    <h1>Bienvenido a MuscleHealth</h1>
    <p>Descubre el poder de un cuerpo saludable y fuerte</p>
    <nav>
        <ul>
            
        </ul>
    </nav>  
</header>

<main>
    <!-- Espacio para las imágenes y textos -->
    <div style="display: flex; justify-content: space-around; align-items: center; margin-top: 20px;">

        <div>
            <img src="http://localhost/Usuariosss.jpg" alt="Imagen 1">
            <p>Gestión de Usuarios</p>
        </div>

        <div>
            <img src="http://localhost/planes.jpg" alt="Imagen 2">
            <p>Gestión de planes</p>
        </div>

        <div>
            <img src="http://localhost/empleados.jpeg" alt="Imagen 3">
            <p>Gestión de empleados</p>
        </div>
        
    </div>

    <!-- Tu contenido actual va aquí -->
    <!--<a href="/GYM/vistas/Usuarios-->


 <!-- Pie de página -->
<footer>
    <p>&copy; 2023 MuscleHealth. Todos los derechos reservados.</p>
</footer>

</body>
</html>






<?php
require_once("C://xampp/htdocs/GYM/vistas/head/footer.php");
?>
<?php
    require_once("C://xampp/htdocs/GYM/vistas/head/head2.php");
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MuscleHealth Users - Tu destino para un cuerpo saludable</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f0f0f0;
        }

        header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        header img {
            max-width: 150px;
            height: auto;
            border-radius: 50%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            margin-bottom: 10px;
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

        .image-container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .image-container div {
            text-align: center;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 10px;
            flex: 1;
            min-width: 250px;
        }

        main img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            margin-bottom: 10px;
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
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
            box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>

<!-- Encabezado de la página -->
<header>
    <img src="http://localhost/muscle.jpeg" alt="MuscleHealth Logo">
    <h1>Bienvenido a MuscleHealth</h1>
    <p>Descubre el poder de un cuerpo saludable y fuerte</p>
</header>

<main>
    <!-- Espacio para las imágenes y textos -->
    <div class="image-container">
        <div>
            <img src="http://localhost/consulta.jpg" alt="Imagen 1">
            <p>Consulta de infromación</p>
        </div>

        <div>
            <img src="http://localhost/infoplan.png" alt="Imagen 2">
            <p>Infromación de planes</p>
        </div>

        <div>
            <img src="http://localhost/profesional.jpeg" alt="Imagen 3">
            <p>Consulta con nuestros especialistas</p>
        </div>
    </div>
</main>

<!-- Pie de página -->
<footer>
    <p>&copy; 2023 MuscleHealth. Todos los derechos reservados.</p>
</footer>

</body>

</html>





<?php
require_once("C://xampp/htdocs/GYM/vistas/head/footer.php");

<?php
    require_once("C://xampp/htdocs/GYM/vistas/head/head.php");
?>

        <form action = "storeR.php" method= "POST" autocomplete= "off">

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre del Recepcionista</label>
            <input type="text" name="recepcionista" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">


        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">password</label>
            <input type="text" name="password" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">


        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">correo</label>
            <input type="text" name="correo" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">


        </div>
        
       
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a  class="btn btn-danger" href="indexR.php">Cancelar</a>
        </form>

<?php
require_once("C://xampp/htdocs/GYM/vistas/head/footer.php");
?>
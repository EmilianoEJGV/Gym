<?php
    require_once("C://xampp/htdocs/GYM/vistas/head/head.php");
?>

        <form action = "storeP.php" method= "POST" autocomplete= "off">

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre del Plan</label>
            <input type="text" name="nombredelplan" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">


        </div>
        
       
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a  class="btn btn-danger" href="indexP.php">Cancelar</a>
        </form>

<?php
require_once("C://xampp/htdocs/GYM/vistas/head/footer.php");
?>
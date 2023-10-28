<?php
    require_once("C://xampp/htdocs/GYM/vistas/head/head.php");
?>


        <form action = "storeU.php" method= "POST" autocomplete= "off">

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Primer Nombre</label>
            <input type="text" name="primernombre" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">


            <label for="exampleInputEmail1" class="form-label">Segundo Nombre</label>
            <input type="text" name="segundonombre"  required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            <label for="exampleInputEmail1" class="form-label">Primer Apellido</label>
            <input type="text" name="primerapellido"  required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">


            <label for="exampleInputEmail1" class="form-label">Segundo Apellido</label>
            <input type="text" name="segundoapellido" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            <label for="exampleInputEmail1" class="form-label">Edad</label>
            <input type="text" name="edad"  required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            <label for="exampleInputEmail1" class="form-label">correo</label>
            <input type="text" name="correo" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            
            <label for="exampleInputEmail1" class="form-label">celular</label>
            <input type="text" name="celular" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            <label for="exampleInputEmail1" class="form-label">contraseña</label>
            <input type="text" name="password" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">


        </div>
        
       
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a  class="btn btn-danger" href="indexU.php">Cancelar</a>
        </form>



<?php
require_once("C://xampp/htdocs/GYM/vistas/head/footer.php");
?>
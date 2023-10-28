<?php

require_once("C://xampp/htdocs/GYM/BD/ConexionBD.php");

class modelousuarios2 {

    private $conexion;

    //////////////////////////////
    public function __construct() {
        $this->conexion = ConexionBD::getInstance();
    }
   //////////////////////////////
   
      //////////////////////////////   //////////////////////////////
    public function mostrarSesion() {


        $idUsuarioLogueado = $_SESSION['primernombre']['id'];

        $statement = $this->conexion->getConnection()->prepare("SELECT * FROM tbl_usuarios WHERE id = :idUsuarioLogueado");
        $statement->bindParam(":idUsuarioLogueado", $idUsuarioLogueado, PDO::PARAM_INT);

        if ($statement->execute()) {
            $usuario = $statement->fetch(PDO::FETCH_ASSOC);
            return $usuario;
        } else {
            return false;
        }
    }
   //////////////////////////////   //////////////////////////////

      //////////////////////////////   //////////////////////////////

   /* public function indexSesion() {
        $idUsuarioLogueado = $_SESSION['primernombre'];

        $query = "SELECT * FROM tbl_usuarios WHERE id = :idUsuarioLogueado";
        $statement = $this->conexion->getConnection()->prepare($query);
        $statement->bindParam(":idUsuarioLogueado", $idUsuarioLogueado);

        return ($statement->execute()) ? $statement->fetch(PDO::FETCH_ASSOC) : false;
    }*/


    public function indexSesion() {
        $usuarioLog = $_SESSION['primernombre'];
        $query = "SELECT * FROM tbl_usuarios WHERE primernombre = :usuarioLog";
        $statement = $this->conexion->getConnection()->prepare($query);
        $statement->bindParam(":usuarioLog", $usuarioLog, PDO::PARAM_STR);
    
        if ($statement->execute()) {
            $data = $statement->fetch(PDO::FETCH_ASSOC);
    
            if ($data !== false && is_array($data)) {
                return $data;
            } else {
                return false;
            }
        } else {
            echo "Error al ejecutar la consulta SQL: " . implode(" - ", $statement->errorInfo());
            return false;
        }
    }
    
    

       //////////////////////////////   //////////////////////////////


          //////////////////////////////   //////////////////////////////
    public function update ($id,$primernombre, $segundonombre, $primerapellido, $segundoapellido, $edad, $correo, $celular){

        $statement=$this->conexion->getConnection()->prepare("UPDATE tbl_usuarios SET primernombre=:primernombre, segundonombre=:segundonombre, primerapellido=:primerapellido,
        segundoapellido= :segundoapellido, edad=:edad, correo=:correo, celular=:celular WHERE id=:id ");
        
        $statement->bindParam(":id", $id);
        $statement->bindParam(":primernombre", $primernombre);
        $statement->bindParam(":segundonombre", $segundonombre);
        $statement->bindParam(":primerapellido", $primerapellido);
        $statement->bindParam(":segundoapellido", $segundoapellido);
        $statement->bindParam(":edad", $edad);
        $statement->bindParam(":correo", $correo);
        $statement->bindParam(":celular", $celular);
        $statement->bindParam("password", $password);

        return($statement->execute())? $id : false;

    }
   //////////////////////////////   //////////////////////////////


    
    
    }

?>
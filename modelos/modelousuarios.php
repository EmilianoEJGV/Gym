<?php

require_once("C://xampp/htdocs/GYM/BD/ConexionBD.php");

class modelousuarios {

    private $conexion;

    public function __construct() {
        $this->conexion = ConexionBD::getInstance();
    }

   
    public function insertar($primernombre, $segundonombre, $primerapellido, $segundoapellido, $edad, $correo, $celular, $password) {
        $query = "INSERT INTO tbl_usuarios 
        VALUES (null, :primernombre, :segundonombre, :primerapellido, :segundoapellido, :edad, :correo, :celular, :password)";
    
        $statement = $this->conexion->getConnection()->prepare($query);
    
        $statement->bindParam(":primernombre", $primernombre);
        $statement->bindParam(":segundonombre", $segundonombre);
        $statement->bindParam(":primerapellido", $primerapellido);
        $statement->bindParam(":segundoapellido", $segundoapellido);
        $statement->bindParam(":edad", $edad);
        $statement->bindParam(":correo", $correo);
        $statement->bindParam(":celular", $celular);
        $statement->bindParam(":password", $password);
    
        return ($statement->execute()) ? $this->conexion->getConnection()->lastInsertId() : false;
    }


    public function mostrar($id){

        $statement=$this->conexion->getConnection()->prepare("SELECT * FROM tbl_usuarios WHERE id= :id");
        $statement->bindParam(":id", $id);

        return($statement->execute())? $statement->fetch(): false;
    }


    public function index(){
        $statement=$this->conexion->getConnection()->prepare("SELECT * FROM tbl_usuarios");
        return ($statement->execute())? $statement->fetchAll(): false ;
    }


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
        //$statement->bindParam("password", $password);

        return($statement->execute())? $id : false;

    }


    public function delete($id){
        $statement= $this->conexion->getConnection()->prepare("DELETE FROM tbl_usuarios WHERE id=:id");
        $statement->bindParam(":id", $id);
        return($statement->execute())?true:false;

    }


    
    
    }

?>

<?php

require_once("C://xampp/htdocs/GYM/BD/ConexionBD.php");

class modeloplan {

    private $conexion;

    public function __construct() {
        $this->conexion = ConexionBD::getInstance();
    }


    public function insertar($nombredelplan) {
        $query = "INSERT INTO tbl_planes
                  VALUES (null, :nombredelplan)";
    
        $statement = $this->conexion->getConnection()->prepare($query);
    
        $statement->bindParam(":nombredelplan", $nombredelplan);
        
        return ($statement->execute()) ? $this->conexion->getConnection()->lastInsertId() : false;
    }


    public function mostrar($id){

        $statement=$this->conexion->getConnection()->prepare("SELECT * FROM tbl_planes WHERE id = :id");
        $statement->bindParam(":id", $id);

        return($statement->execute())? $statement->fetch(): false;
    }

    
    


    public function index(){
        $statement=$this->conexion->getConnection()->prepare("SELECT * FROM tbl_planes");
        return ($statement->execute())? $statement->fetchAll(): false ;
    }


    public function update ($id,$nombredelplan){

        $statement=$this->conexion->getConnection()->prepare("UPDATE tbl_planes SET nombredelplan=:nombredelplan WHERE id=:id ");
        
        $statement->bindParam(":id", $id);
        $statement->bindParam(":nombredelplan", $nombredelplan);
        ;

        return($statement->execute())? $id : false;

    }


    public function delete($id){
        $statement= $this->conexion->getConnection()->prepare("DELETE FROM tbl_planes WHERE id=:id");
        $statement->bindParam(":id", $id);
        return($statement->execute())?true:false;

    }


    
    
    }

?>

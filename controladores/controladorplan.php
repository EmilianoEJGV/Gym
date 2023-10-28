<?php

class controladorplan{

    private $model;

    public function __construct(){

        require_once("C://xampp/htdocs/GYM/modelos/modeloplan.php");
        $this->model = new modeloplan();
    }


    public function guardar($nombredelplan){
        $id=$this->model->insertar($nombredelplan);
        return($id!=false) ? header("Location:showP.php?id=".$id): header("Location:createP.php");
    
    }

    public function show($id){

        return($this->model->mostrar($id) != false)? $this->model->mostrar($id): header("Location:indexP.php") ;

    }

    public function index(){
        return($this->model->index()) ? $this->model->index(): false ;
    }


    public function update($id, $nombredelplan){
        return($this->model->update($id, $nombredelplan) 
        != false) ? header("Location:showP.php?id=".$id) : header("Location.indexP.php");
    }

    public function delete($id){

        return($this->model->delete($id)) ? header("Location:indexP.php") :header("Location:showP.php?id=".$id);
    }

}
?>
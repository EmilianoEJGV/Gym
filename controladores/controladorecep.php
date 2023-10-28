<?php

class controladorecep{

    private $model;

    public function __construct(){

        require_once("C://xampp/htdocs/GYM/modelos/modelorecep.php");
        $this->model = new modelorecep();
    }


    public function guardar($recepcionista, $password, $correo){
        $id=$this->model->insertar($recepcionista, $password, $correo);
        return($id!=false) ? header("Location:showR.php?id=".$id): header("Location:createR.php");
    
    }

    public function show($id){

        return($this->model->mostrar($id) != false)? $this->model->mostrar($id): header("Location:indexR.php") ;

    }

    public function index(){
        return($this->model->index()) ? $this->model->index(): false ;
    }


    public function update($id, $recepcionista, $password, $correo){
        return($this->model->update($id, $recepcionista, $password, $correo) 
        != false) ? header("Location:showR.php?id=".$id) : header("Location.indexR.php");
    }

    public function delete($id){

        return($this->model->delete($id)) ? header("Location:indexR.php") :header("Location:showR.php?id=".$id);
    }

}
?>
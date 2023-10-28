<?php

class controladorusuarios{

    private $model;

    public function __construct(){

        require_once("C://xampp/htdocs/GYM/modelos/modelousuarios.php");
        $this->model = new modelousuarios();
    }


    public function guardar($primernombre, $segundonombre, $primerapellido, $segundoapellido, $edad, $correo, $celular, $password){
        $id=$this->model->insertar($primernombre, $segundonombre, $primerapellido, $segundoapellido, $edad, $correo, $celular, $password);
        return($id!=false) ? header("Location:showU.php?id=".$id): header("Location:createU.php");
    
    }

    public function show($id){

        return($this->model->mostrar($id) != false)? $this->model->mostrar($id): header("Location:indexU.php") ;

    }

    public function index(){
        return($this->model->index()) ? $this->model->index(): false ;
    }


    public function update($id, $primernombre, $segundonombre, $primerapellido, $segundoapellido, $edad, $correo, $celular){
        return($this->model->update($id, $primernombre, $segundonombre, $primerapellido, $segundoapellido, $edad, $correo, $celular) 
        != false) ? header("Location:showU.php?id=".$id) : header("Location.indexU.php");
    }

    public function delete($id){

        return($this->model->delete($id)) ? header("Location:indexU.php") :header("Location:showU.php?id=".$id);
    }

}
?>
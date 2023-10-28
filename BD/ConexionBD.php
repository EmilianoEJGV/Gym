<?php

class ConexionBD {
    private static $instance;
    private $connection;

    private function __construct() {
        $servidor = "localhost";
        $baseDeDatos = "musclehealth";
        $usuario = "root";
        $contrasenia = "";

        try {
            $this->connection = new PDO("mysql:host=$servidor;dbname=$baseDeDatos", $usuario, $contrasenia);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getConnection() {
        return $this->connection;
    }

    public function closeConnection() {
        $this->connection = null; // Cierra la conexión estableciéndola a null
    } 
}

?>
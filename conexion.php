<?php

class Conexion {
    protected $bd;
    private $driver = "mysql";
    private $host = "localhost";
    private $dbname = "bd_acdivoca";
    private $user = "root";
    private $password = "";

    public function __construct() {
        try {
            $bd = new PDO("{$this->driver}:host={$this->host};dbname={$this->dbname}", $this->user, $this->password);
            $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexión exitosa";
            return $bd;
        } catch (PDOException $e) {
            echo "Ha surgido un error al tratar de conectarse a la Base de Datos." . $e->getMessage();
        }
    }
}
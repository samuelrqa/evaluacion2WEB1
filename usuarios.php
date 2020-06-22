<?php

require_once('conexion.php');

class Usuarios extends Conexion {

    public function __construct() {
        $this->bd = parent::__construct();
    }

    public function agregar($nombre, $apellido, $correo, $usuario, $clave, $fecha) {
        $statement = $this->bd->prepare("INSERT INTO usuarios (nombre, apellido, correo, usuario, clave, fecha_registro) VALUES (:Nombre, :Apellido, :Correo, :Usuario, :Clave, :Fecha)");
        $statement->bindParam(':Nombre', $nombre);
        $statement->bindParam(':Apellido', $apellido);
        $statement->bindParam(':Correo', $correo);
        $statement->bindParam(':Usuario', $usuario);
        $statement->bindParam(':Clave', $clave);
        $statement->bindParam(':Fecha', $fecha);
        $statement->execute();
    }

    public function getUsers() {
        $rows = null;
        $statement = $this->bd->prepare("SELECT * FROM usuarios");
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
    }

    public function getById($id) {
        $rows = null;
        $statement = $this->bd->prepare("SELECT id_usuario, nombre, apellido, correo, usuario, clave, fecha_registro FROM usuarios WHERE id_usuario = :id");
        $statement->bindParam(':id', $id);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
    }

    public function update($id, $nombre, $apellido, $correo, $usuario, $clave, $fecha) {
        $statement = $this->bd->prepare("UPDATE usuarios SET nombre=:Nombre, apellido=:Apellido, correo=:Correo, clave=:Clave");
        $statement->bindParam(':Id', $id);
        $statement->bindParam(':Nombre', $nombre);
        $statement->bindParam(':Apellido', $apellido);
        $statement->bindParam(':Correo', $correo);
        $statement->bindParam(':Usuario', $usuario);
        $statement->bindParam(':Clave', $clave);
        $statement->bindParam(':Fecha', $fecha);
        if ($statement->execute()) {
            header('Location: index.php');
        }else {
            header('Location: edit.php');
        }
    }

    public function delete($id) {
        $statement = $this->bd->prepare("DELETE FROM usuarios WHERE ID_ESTUDIANTE = :Id");
        $statement->bindParam(':Id', $id);
        if ($statement->execute()) {
            header('Location: ../Pages/index.php');
        }else {
            header('Location: ../Pages/delete.php');
        }
    }

    public function search($search) {
        $rows = null;
        $statement = $this->bd->prepare("SELECT ID_ESTUDIANTE, NOMBRE, APELLIDO, DOCUMENTO, CORREO, MATERIA, DOCENTE, PROMEDIO, FECHA_REGISTRO FROM estudiantes WHERE NOMBRE like concat('%, :Search, %') OR APELLIDO like concat('%, :Search, %') OR DOCUMENTO like concat('%, :Search, %') OR CORREO like concat('%, :Search, %') OR MATERIA like concat('%, :Search, %') OR DOCENTE like concat('%, :Search, %')");
        $statement->bindParam(':Search', $search);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
    }
}

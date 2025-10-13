<?php
namespace app\models;

use lib\database;
class PersonaModel extends database{

    public function getPersona(){
        $conexion = $this->getConnection();
        $sql = $conexion->query("SELECT * FROM tbl_persona");
        return $sql->fetchAll();
    }

    public function guardarPersona($data){
        $conexion = $this->getConnection();
        $stmt = $conexion->prepare("INSERT INTO `tbl_personas`(`nombre`, `apellido`, `correo`, `edad`) VALUES (?, ?, ?, ?)");
        $stmt ->bindParam(1,$data['nombre']);
        $stmt ->bindParam(2,$data['apellido']);
        $stmt ->bindParam(3,$data['edad']);
        $stmt ->bindParam(4,$data['correo']);

        if ($stmt->execute()) {
            return true;
        }else {
            return false;
        }
    }
}
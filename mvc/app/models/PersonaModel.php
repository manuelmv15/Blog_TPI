<?php

namespace app\models;

use lib\database;

class PersonaModel extends database
{

    public function getPersona()
    {
        $conexion = $this->getConnection();
        $sql = $conexion->query("SELECT * FROM tbl_personas");
        return $sql->fetchAll();
    }

    public function guardarPersona($data)
    {
        $conexion = $this->getConnection();
        $stmt = $conexion->prepare("INSERT INTO `tbl_personas`(`nombre`, `apellido`, `correo`, `edad`) VALUES (?, ?, ?, ?)");
        $stmt->bindParam(1, $data['nombre']);
        $stmt->bindParam(2, $data['apellido']);
        $stmt->bindParam(3, $data['correo']);
        $stmt->bindParam(4, $data['edad']);


        //validar que no exista otro correo igual
        $checkStmt = $conexion->prepare("SELECT COUNT(*) FROM `tbl_personas` WHERE `correo` = ?");
        $checkStmt->bindParam(1, $data['correo']);
        $checkStmt->execute();
        $count = $checkStmt->fetchColumn();

        if ($count > 0) {
            return false;
        }
        
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}

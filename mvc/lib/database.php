<?php
namespace lib;
use PDO;
use PDOException;

class Database {
    private $host = "db";
    private $db_name = "DB_SDS";
    private $username = "root";
    private $password = "rootpass";
    public $conn;


    public function getConnection() {
        $this->conn = null;
        
        // Verificar y crear DB primero
        $this->crearDB();

        try {
            $this->conn = new \PDO("mysql:host=".$this->host.";dbname=" .$this->db_name,$this->username, $this->password );
            $this->conn->exec("set names utf8mb4");
            $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            
            // Crear tablas si no existen
            $this->crearTablas();
        } catch (\PDOException $e) {
            error_log("No se pudo conectar a la db -> error: ".$e->getMessage());
        }
        return $this->conn;
        
    }        public function crearDB()  {
            try {
                // Conectar sin especificar la base de datos
                $tempConn = new \PDO("mysql:host=".$this->host, $this->username, $this->password);
                $tempConn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                
                // Verificar si la base de datos existe
                $stmt = $tempConn->query("SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '".$this->db_name."'");
                $dbExists = $stmt->fetch();
                
                if (!$dbExists) {
                    // Crear la base de datos si no existe
                    $tempConn->exec("CREATE DATABASE IF NOT EXISTS `".$this->db_name."` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
                    // Base de datos creada exitosamente (comentado para evitar headers sent)
                }
                
                $tempConn = null;
                return true;
            } catch (\PDOException $e) {
                // Error al verificar/crear la base de datos (comentado para evitar headers sent)
                error_log("Error al verificar/crear la base de datos: ".$e->getMessage());
                return false;
            }
        }

        public function crearTablas() {
            try {
                $sqlPersonas = "CREATE TABLE IF NOT EXISTS tbl_personas (
                    id_persona INT AUTO_INCREMENT PRIMARY KEY,
                    nombre VARCHAR(100),
                    apellido VARCHAR(100),
                    correo VARCHAR(150),
                    edad INT DEFAULT 0,
                    fecha_creacion DATETIME DEFAULT CURRENT_TIMESTAMP,
                    UNIQUE KEY uk_correo (correo)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
                
                $this->conn->exec($sqlPersonas);
                
                return true;
            } catch (\PDOException $e) {
                // Silenciar si las tablas ya existen
                return false;
            }
        }


    }
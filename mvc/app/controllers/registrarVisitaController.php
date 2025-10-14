<?php
namespace app\controllers;
use lib\controller;

use app\models\PersonaModel;

class registrarVisitaController extends controller{

    public function index(){
        $model = new PersonaModel();
        $personas = $model->getPersona();
        return $this->view('registrarVisitaView',[
            'title'=>'Registrar Visita',
            'personas' => $personas
        ]);
    }

   public function guardarPersona() {
         $model = new PersonaModel();


        $personas = $model->getPersona();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        
        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $correo = trim($_POST['correo']);
        $edad = $_POST['edad'];

        
        $errores = [];

        
        if (!preg_match("/^[\w\.-]+@([\w-]+\.)+[a-zA-Z]{2,}$/", $correo)) {
            $errores[] = "El correo no tiene un formato válido.";
        }

        
        if (!filter_var($edad, FILTER_VALIDATE_INT) || $edad < 0) {
            $errores[] = "La edad debe ser un número entero positivo.";
        }

        
        if (!empty($errores)) {

            return $this->view('registrarVisitaView', [
                'title' => 'Error al guardar',
                'errores' => $errores,
                'personas' => $personas
            ]);
        }

        
        $data = [
            'nombre' => $nombre,
            'apellido' => $apellido,
            'edad' => (int)$edad,
            'correo' => $correo
        ];

   

        if ($model->guardarPersona($data)) {
            
            return $this->index();
        } else {


            return $this->view('registrarVisitaView', [
                'title' => 'Error al guardar',
            'personas' => $personas,
                'errores' => ["No se pudo guardar la persona. El correo ya existe o hubo un error en la base de datos."]

            ]);
        }
    }
}

    
}

?>
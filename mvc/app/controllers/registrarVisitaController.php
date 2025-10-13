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

    public function guardarPersona(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'nombre' => $_POST['nombre'],
                'apellido' => $_POST['apellido'],
                'edad' => $_POST['edad'],
                'correo' => $_POST['correo']
            ];
            $model = new PersonaModel();
            if ($model->guardarPersona($data)) {
                 echo "Guardado correctamente";
                 return $this->index();
            }else {
                return $this->view('error',[
                    'title'=>'Error al guardar'
                ]);
            }
        }
    }
    
}

?>
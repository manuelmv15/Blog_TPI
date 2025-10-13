<?php
namespace app\controllers;
use lib\controller;
class registrarVisitaController extends controller{

    public function index(){
        
        return $this->view('registrarVisitaView',[
            'title'=>'Registrar Visita']);
    }
    
}

?>
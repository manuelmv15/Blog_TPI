<?php

namespace app\controllers;

use lib\controller;

class DiasController extends controller
{

    public function index()
    {
        return $this->view('lunesView', [
            'title' => 'Lunes'
        ]);
    }


    public function lunes()
    {
        echo "hola desde la pagina lunes";
        return $this->view('lunesView', [
            'title' => 'Lunes'
        ]);
    }
    public function martes()
    {

        return $this->view('martesView', [
            'title' => 'Martes'
        ]);
    }
    public function miercoles()
    {

        return $this->view('miercolesView', [
            'title' => 'Miercoles'
        ]);
    }
    public function jueves()
    {

        return $this->view('juevesView', [
            'title' => 'Jueves'
        ]);
    }
    public function viernes()
    {

        return $this->view('viernesView', [
            'title' => 'Viernes'
        ]);
    }
}

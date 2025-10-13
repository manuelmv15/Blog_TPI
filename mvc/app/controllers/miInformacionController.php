<?php
namespace app\controllers;
use lib\controller;
class miInformacionController extends controller{

    public function index(){

        return $this->view('miInformacionView',[
            'title'=>'Mi Informacion']);
    }
    
}

?>
<?php
namespace app\controllers;
use lib\controller;
class HomeController extends controller{

    public function index(){
       
        return $this->view('HomeView',[
            'title'=>'Home']);
    }
    
}

?>
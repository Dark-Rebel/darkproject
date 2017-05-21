<?php

class homeController extends controller {

    public function index(){
        $usuario = new usuario();
        $usuario->setName('vitor');

        $dados = array ( 'name' => $usuario->getName() );

        $this->loadTemplate('home', $dados);
    }

    public function sobre(){
        $dados = array();
        $this->loadTemplate('sobre', $dados);
    }

}

?>
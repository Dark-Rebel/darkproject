<?php

class grepoController extends controller {

    public function index() {
        $dados = array();

        $this->loadTemplate('grepo', $dados);
    }

}

?>
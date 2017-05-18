<?php
class core {

    private $currentController;
    private $currentAction;

    public function  run() {
        $url = substr($_SERVER['PHP_SELF'], 10 );


        if (!empty($url)) {
           $url = explode('/', $url);
           array_shift($url);

           $this->currentContrller = $url[0].'Controller';
           if (isset($url[1])){
               $this->currentAction = $url[1];
           } else {
               $this->currentAction = 'index';
           }

        } else {
            $this->currentController = 'homeController';
            $this->currentAction = 'index';
        }

        echo "controller:".$this->currentController;
        echo "<br>action:".$this->currentAction;
    }
}


?>
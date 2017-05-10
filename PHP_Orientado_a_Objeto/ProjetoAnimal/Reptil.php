<?php

require_once 'Animal.php';
class Reptil extends Animal{
    private $corEscama;
    
    public function alimentar() {
        echo "Comer vegetal</br>";
    }

    public function emitirSom() {
       echo "Reptil emitindo som </br>";
    }

    public function locomover() {
        echo "Rastejando </br>";
    }
    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }



}

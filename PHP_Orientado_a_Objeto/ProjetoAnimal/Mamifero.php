<?php

require_once 'Animal.php';
class Mamifero extends Animal{
    private $corPelo;
    
    public function alimentar() {
        echo "Mamar </br>";
    }

    public function emitirSom() {
       echo "Som de mamifero </br>";
    }

    public function locomover() {
        echo "Correndo </br>";
    }
    
    function getCorPelo() {
        return $this->corPelo;
    }

    function setCorPelo($corPelo) {
        $this->corPelo = $corPelo;
    }


}

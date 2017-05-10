<?php

require_once 'Animal.php';
class Ave extends Animal{
    private $corPena;
    
    public function fazerNinho() {
        echo "Fazendo ninho </br>";
    }
    
    public function alimentar() {
        echo "Comendo incetos </br>";
    }

    public function emitirSom() {
        echo"Passaro emitinto som </br>";
    }

    public function locomover() {
        echo "Voando </br>";
    }
    
    function getCorPena() {
        return $this->corPena;
    }

    function setCorPena($corPena) {
        $this->corPena = $corPena;
    }

}

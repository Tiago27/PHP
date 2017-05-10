<?php
require_once 'Animal.php';
class Peixe extends Animal{
    private $corEscama;
    
    public function fazerBolha() {
        echo "Fazendo Bolhas </br>";
    }

    public function alimentar() {
        echo "Comendo substancias </br>";
    }

    public function emitirSom() {
        echo "Não emite som </br>";
    }

    public function locomover() {
        echo "Nadando </br>";
    }
        
    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }

}

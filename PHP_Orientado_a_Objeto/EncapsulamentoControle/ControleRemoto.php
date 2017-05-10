<?php
require_once 'Controlador.php';
class ControleRemoto  implements Controlador{
    private $volume;
    private $ligado;
    private $tocando;
    
    public function __construct() {
        $this->volume = 50;
        $this->ligado = FALSE;
        $this->tocando = FALSE;
    }

    public function abrirMenu() {
        echo "------- MENU -------";
        echo "<br/>Está ligado?: ".$l=($this->getLigado()?"SIM":"NÂO");
        echo "<br/>Volume: ".$this->getVolume();
        
        for ($i = 0; $i < $this->getVolume(); $i+=10) {
            echo " |";
        }
        echo "<br/>Está tocando?: ".$t=($this->getTocando()?"SIM":"NÂO");
    }

    public function desligar() {
        
    }

    public function desligarMudo() {
        $this->setLigado(FALSE);
    }

    public function fecharMenu() {
        echo "Fechando Menu...";
    }

    public function ligar() {
        $this->setLigado(TRUE);
    }

    public function ligarMudo() {
        if ($this->getLigado() && $this->getVolume() > 0) {
            $this->setVolume(0);
        }
    }

    public function maisVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 5);
        } else {
            echo "O volume não pode ser aumentado!<br/>Teve está desligada!<br/>";
        }
    }

    public function menosVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() - 5);
        }
    }

    public function pause() {
        if ($this->getLigado() && $this->getTocando()) {
            $this->setTocando(FALSE);
        }
    }

    public function play() {
        if ($this->getLigado() && !($this->getTocando())) {
            $this->setTocando(TRUE);
        }
    }    
    private function getVolume() {
        return $this->volume;
    }

    private function getLigado() {
        return $this->ligado;
    }

    private function getTocando() {
        return $this->tocando;
    }

    private function setVolume($volume) {
        $this->volume = $volume;
    }

    private function setLigado($ligado) {
        $this->ligado = $ligado;
    }

    private function setTocando($tocando) {
        $this->tocando = $tocando;
    }


}

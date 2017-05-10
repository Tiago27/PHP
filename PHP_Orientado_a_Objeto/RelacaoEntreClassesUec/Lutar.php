<?php

require_once 'Lutadores.php';

class Lutar {
    private $desafiado;//tipo abstrato Lutadores
    private $desafiante;//tipo abstrato Lutadores
    private $rounds;
    private $aprovado;
    
    public function marcarLuta($l1, $l2){
        if (($l1->getCategoria() === $l2->getCategoria()) && ($l1 != $l2)) {
            $this->setAprovado(TRUE);
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        }else{
            $this->setAprovado(FALSE);
            $this->desafiado = NULL;
            $this->desafiante = NULL;
        }
    }
    
    public function lutaComecar() {
        if ($this->getAprovado()) {
            $this->desafiado->Apresentar();
            $this->desafiante->Apresentar();
            $vencedor = rand(0, 2);
            switch($vencedor){
                case 0:
                    echo "<p>---------------------------------------</p>";
                    echo "Empatou!";
                    $this->desafiante->empatarLuta();
                    $this->desafiado->empatarLuta();
                    break;
                case 1:
                    echo "<p>---------------------------------------</p>";
                    echo "<p>".$this->desafiado->getNome()." venceu </p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2:
                    echo "<p>---------------------------------------</p>";
                    echo "<p>".$this->desafiante->getNome()." venceu</p>";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
            }
        } else {
            echo "<p>Luta não pode acontecer</p>";
        }
    }
    
    function getDesafiado() {
        return $this->desafiado;
    }

    function getDesafiante() {
        return $this->desafiante;
    }

    function getRounds() {
        return $this->rounds;
    }

    function getAprovado() {
        return $this->aprovado;
    }

    function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
    }

    function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }

    function setRounds($rounds) {
        $this->rounds = $rounds;
    }

    function setAprovado($aprovado) {
        $this->aprovado = $aprovado;
    }


}

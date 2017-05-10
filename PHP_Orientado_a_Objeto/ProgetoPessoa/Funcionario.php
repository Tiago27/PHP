<?php
require_once 'Pessoa.php';
class Funcionario extends Pessoa{
    private $setor;
    private $trabalho;
    
    public function mudarTrabalho() {
        $this->trabalho = TRUE;
    }
    
    function getSetor() {
        return $this->setor;
    }

    function getTrabalho() {
        return $this->trabalho;
    }

    function setSetor($setor) {
        $this->setor = $setor;
    }

    function setTrabalho($trabalho) {
        $this->trabalho = $trabalho;
    }
}

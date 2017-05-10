<?php
require_once 'Pessoa.php';
class Professor extends Pessoa{
    private $especialidade;
    private $salario;
    
    public function receberAum($aumento) {
        $this->salario = $this->salario +(($this->salario/100)*$aumento);
        echo "<br/>Professor recebe aumento de ".$aumento."%";
    }

    function getEspecialidade() {
        return $this->especialidade;
    }

    function getSalario() {
        return $this->salario;
    }

    function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }

    function setSalario($salario) {
        $this->salario = $salario;
    }
}

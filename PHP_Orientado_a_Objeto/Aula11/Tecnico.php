<?php

//Especialização de Aluno, filha de aluno, descendente de Pessoa.
require_once 'Aluno.php';
class Tecnico extends Aluno{
    private $registroProfissional;
    
    public function Praticar() {
        echo "<p>".$this->getNome()." está praticando!</p>";
    }
    
    public function getRegistroProfissional() {
        return $this->registroProfissional;
    }

    public function setRegistroProfissional($registroProfissional) {
        $this->registroProfissional = $registroProfissional;
    }


}

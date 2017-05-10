<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa{
    private $matr;
    private $curso;
    
    public function cancelarMatricula() {
        $this->matr = FALSE;
        echo "<p>A matricula foi cancelada</p>";  
    }
    
    function getMatr() {
        return $this->matr;
    }

    function getCurso() {
        return $this->curso;
    }

    function setMatr($matr) {
        $this->matr = $matr;
    }

    function setCurso($curso) {
        $this->curso = $curso;
    }
}

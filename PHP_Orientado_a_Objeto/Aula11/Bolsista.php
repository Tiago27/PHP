<?php

//Classe fraca, filha, folha, descendente.
require_once 'Aluno.php';
class Bolsista extends Aluno{
    private $bolsa;
    public function RenovarBolsa() {
        echo "<p>Bolsa renova</p>";
    }
    
    //metodo sobrepõe
    public function PagarMensalidade() {
        echo "<p>".$this->getNome()." é bolsista então paga com desconto!</p>";
    }
    
    public function getBolsa() {
        return $this->bolsa;
    }

    public function setBolsa($bolsa) {
        $this->bolsa = $bolsa;
    }


}

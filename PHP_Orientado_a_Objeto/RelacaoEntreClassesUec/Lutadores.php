<?php

class Lutadores {
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empate;
    
    public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empate) {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empate = $empate;
    }

    public function apresentar() {
        echo "<p>-----------------------------------</p>";
        echo "Chegou a hora o lutador: ". $this->getNome();
        echo " veio diretamente de ". $this->getNacionalidade()."<br/>";
        echo "tem ".$this->getIdade()." anos<br/>";
        echo "Mede ".$this->getAltura()."m de altura,";
        echo " pesando ".$this->getPeso()."Kg<br/>";
        echo "Ganhou: ".$this->getVitorias()." vezes<br/>";
        echo "Perdeu: ".$this->getDerrotas()." vezes<br/>";
        echo "Empatou: ".$this->getEmpate()." vezes<br/>";
    }
    public function status() {
          echo "<p>-----------------------------------</p>";
        echo $this->getNome()."<br/>";
        echo "È um peso ".$this->getCategoria()."<br/>";
        echo $this->getVitorias()." vitórias<br/>";
        echo $this->getDerrotas()." derrotas<br/>";
        echo $this->getEmpate()." empates<br/>";
    }
    
    public function ganharLuta() {
        $this->setVitorias($this->getVitorias()+1);
    }
    public function perderLuta() {
        $this->setDerrotas($this->getDerrotas()+1);
    }
    public function empatarLuta() {
        $this->setEmpate($this->getEmpate()+1);
    }
    
    public function setNome($sNome) {
        $this->nome = $sNome;
    }
    public function getNome(){
        return $this->nome;
    }
    
    function setNacionalidade($nacionalidade) {
     $this->nacionalidade = $nacionalidade;
    }
    function getNacionalidade() {
        return $this->nacionalidade;
    }
    
    function setIdade($idade) {
        $this->idade = $idade;
    }
    function getIdade() {
        return $this->idade;
    }
 
    function setAltura($altura) {
        $this->altura= $altura;
    }
    function getAltura() {
        return $this->altura;
    }

    function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }
    function getPeso() {
        return $this->peso;
    }
    
    function setCategoria() {
        if ($this->getPeso() < 52.2) {
            $this->categoria ="Inválida";
        } elseif ($this->getPeso() < 70.3) {
            $this->categoria ="Leve";
        }elseif ($this->getPeso() < 128.2) {
            $this->categoria = "Pesado";
        }else{
            $this->categoria = "invalida";
        }
    }         
    function getCategoria() {
        return $this->categoria;
    }
    
    function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }
    function getVitorias() {
        return $this->vitorias;
    }
    
    function setDerrotas($derrotas) {
    $this->derrotas = $derrotas;
    }
    function getDerrotas() {
        return $this->derrotas;
    }
    
    function setEmpate($empate) {
        $this->empate = $empate;
    }
    function getEmpate() {
        return $this->empate;
    }
}

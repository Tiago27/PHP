<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Caneca
 *
 * @author Tiago
 */
class Caneca {
    //put your code here
    public $cor;
    protected $capacidade;
    private $alcaQuebrada;
    private $cheia;
    
    function __construct() {
        $this->cor = "Rosa";
        $this->alcaQuebrada = FALSE;
        $this->cheia= FALSE;
    }

    public function Encher(){
        $this->cheia = TRUE;
    }
    public function Esvasiar(){
        $this->cheia = FALSE;
    }
    public function setCaio($c) {
        $this->alcaQuebrada = $c;
    }
    public function getCaio() {
        return $this->alcaQuebrada;
    }
    public function setCor($confCor) {
        $this->cor = $confCor;
    }
   public function setCheio($cheioVazio) {
       $this->cheia = $cheioVazio; 
   }
   public function getCheio(){
       return $this->cheia;
   }
   public function setCapacidade($cap) {
       $this->capacidade = $cap;
   }
   public function getCapacidade(){
       return $this->capacidade;
   }
}

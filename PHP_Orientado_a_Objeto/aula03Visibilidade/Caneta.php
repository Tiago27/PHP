<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Caneta
 *
 * @author Tiago
 */
class Caneta {
    //put your code here
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;
    
    public function  rabiscar(){
        if ($this->tampada == TRUE) {
            echo "<p>ERRO! Não posso rabiscar</p>";
        } else {
            echo "<p>Estou rabiscando....</p>";
        }   
    }
    public function tampar(){
        $this->tampada = TRUE;
    }
    public function  destampar(){
        $this->tampada = FALSE;
    }
    public function TamanhoPonta($t){
        $tamanho = $t;
        switch ($tamanho){
            case 1:
                $this->ponta=0.5;
                break;
            case 2:
                $this->ponta=0.7;
                break;
            case 3:
                $this->ponta=0.9;
                break;
            default :
                $this->ponta="Valor invalido";
        }
    }
}

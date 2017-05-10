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
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;
    
    function  rabiscar(){
        if ($this->tampada == TRUE) {
            echo "<p>ERRO! Não posso rabiscar</p>";
        } else {
            echo "<p>Estou rabiscando....</p>";
        }
        
    }
    function tampar(){
        $this->tampada = TRUE;
    }
    function  destampar(){
        $this->tampada = FALSE;
    }
}

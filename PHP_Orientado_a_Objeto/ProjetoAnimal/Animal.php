<?php

abstract class Animal {
    protected  $peso;
    protected  $idade;
    protected  $nMembros;
    
    public abstract function locomover();
    public abstract function alimentar();
    public abstract function emitirSom();
    function getPeso() {
        return $this->peso;
    }

    function getIdade() {
        return $this->idade;
    }

    function getNMembros() {
        return $this->nMembros;
    }

    function setPeso($peso) {
        $this->peso = $peso;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setNMembros($nMembros) {
        $this->nMembros = $nMembros;
    }


}

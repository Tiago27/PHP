<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClasseBanco
 *
 * @author Tiago
 */
class ClasseBanco {
    //put your code here
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    public function abrirConta($tipo) {
        $this->setTipo($tipo);
        $this->setStatus(TRUE);
        if ($tipo == "cc") {
            $this->setSaldo(50);
        }elseif ($tipo == "cp") {
            $this->saldo = 150;
        }
    }
    
    public function fecharConta() {
        if ($this->getSaldo() > 0) {
            echo "<p>Conta ainda tem dinheiro, não pode fecha-la</p>";
        }elseif ($this->getSaldo() < 0) {
            echo "<p>Conta esta em debito, impossivel encerrar</p>";
        } else {
            $this->status = FALSE;
            echo "<p>Conta de ".$this->getDono()." fechada com sucesso.</p>";
        }
    }
    
    public function depositar($v) {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $v);
            //$this->saldo = $this->saldo + $v;                   
            echo "<p>Deposito de R$$v na conta de ".$this->getDono()."</p>";
        } else {
            echo "<p>Conta fechada, não consigo depositar.</p>";
        }
    }
    
    public function sacar($v) {
        if ($this->getStatus()) {
            if ($this->getSaldo() >= $v) {
            $this->setSaldo($this->getSaldo() - $v);
            //$this->saldo = $this->saldo - $v;                   
            echo "<p>Saque de R$$v autorizado na conta de ".$this->getDono()."</p>";
            } else {
                echo "<p>Saldo induficiente para saque</p>";
            }
        } else {
            echo "<p>Não posso sacar de uma conta fechada</p>";
        }
    }
    
    public function pagarMensal() {
        if ($this->getTipo() == "cc") {
            $v = 12;
        } elseif ($this->getTipo() == "cp") {
            $v = 20;
        } 
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $v);
            echo "<p>Mensalidade de R$$v debitada na conta de ".$this->getDono()."</p>";
        } else {
            echo "<p>Problemas com a conta!</p>";
        }
    }
    
    function __construct() {
        $this->setSaldo(0);
        $this->setStatus(FALSE);
        echo "<p>Conta criada com sucesso!</p>";
    }

    function setNumConta($numConta) {
        $this->numConta = $numConta;
    }

    function getNumConta() {
    return $this->numConta;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function getTipo() {
        return $this->tipo;
    }

    function setDono($dono) {
        $this->dono = $dono;
    }

    function getDono() {
        return $this->dono;
    }

    function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    function getSaldo() {
        return $this->saldo;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function getStatus() {
        return $this->status;
    }
}

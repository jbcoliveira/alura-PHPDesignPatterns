<?php

class Agencia {

    private $numero;
    private $digito;
    private $contas = array();
    
    function __construct($numero, $digito) {
        $this->numero = $numero;
        $this->digito = $digito;
    }

    function getContas() {
        return $this->contas;
    }

    function setContas($contas) {
        $this->contas = $contas;
    }
    
    function adicionaConta($conta) {
        $this->contas[] = $conta;
    }

    function getNumero() {
        return $this->numero;
    }

    function getDigito() {
        return $this->digito;
    }


}
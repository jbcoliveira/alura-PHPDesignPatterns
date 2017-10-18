<?php

class Conta {

    private $saldo;
    private $titular;

    function __construct($titular,$saldo) {
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function deposita($valor) {
        $this->saldo += $valor;
    }

    function getSaldo() {
        return $this->saldo;
    }

    function getTitular() {
        return $this->titular;
    }

    function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    function setTitular($titular) {
        $this->titular = $titular;
    }

}

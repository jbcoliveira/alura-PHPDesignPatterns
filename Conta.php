<?php

class Conta {

    private $saldo;

    function __construct($saldo) {
        $this->saldo = $saldo;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    public function deposita($valor) {
        $this->saldo += $valor;
    }

}

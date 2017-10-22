<?php

class Conta {

    private $saldo;
    private $titular;
    private $agencia;
    private $numero;
    private $dataAbertura;

    function __construct($titular, $saldo, $dataAbertura) {
        $this->titular = $titular;
        $this->saldo = $saldo;
        
        $datetime = new DateTime();
        $this->dataAbertura = $datetime->createFromFormat('d/m/Y', $dataAbertura);
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

    function getAgencia() {
        return $this->agencia;
    }

    function getNumero() {
        return $this->numero;
    }

    function setAgencia($agencia) {
        $this->agencia = $agencia;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function getDataAbertura() {
        return $this->dataAbertura;
    }

}

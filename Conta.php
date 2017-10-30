<?php

class Conta {

    private $saldo;
    private $titular;
    private $agencia;
    private $numero;
    private $dataAbertura;
    private $status;

    function __construct($titular, $valor, $dataAbertura) {
        $this->titular = $titular;
        
        $valor >= 0? $this->status = new Positivo(): $this->status = new Negativo();
        
        $this->deposita($valor);
        //$this->saldo = $saldo;
        
        $datetime = new DateTime();
        $this->dataAbertura = $datetime->createFromFormat('d/m/Y', $dataAbertura);
        
        
    }

    public function deposita($valor) {
        $this->status->deposita($this, $valor);
    }

    public function saca($valor) {
        $this->status->saca($this, $valor);
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

    function getStatus() {
        return $this->status;
    }

    function setStatus($status) {
        $this->status = $status;
    }

}

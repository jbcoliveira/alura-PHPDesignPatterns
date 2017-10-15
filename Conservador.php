<?php

class Conservador implements Investimento {

    private $retorno;

    function __construct() {
        $this->retorno = 0.008;
    }

    public function investeSaldo(Conta $conta) {
        return $conta->getSaldo() * $this->$retorno;
    }

    public function getRetorno() {
        return $this->retorno;
    }

}

<?php

class Arrojado implements Investimento {

    private $chance;
    private $retorno;

    function __construct() {
        $this->chance = mt_rand(1, 100);

        if ($this->chance <= 20) {
            $this->setRetorno(0.05) ;
        } elseif ($this->chance > 20 && $this->chance <= 50) {
            $this->setRetorno(0.03) ;
        } elseif ($this->chance >= 50) {
            $this->setRetorno( 0.006) ;
        }
    }

    public function investeSaldo(Conta $conta) {
        return $conta->getSaldo() * $this->retorno;
    }

    
    public function setRetorno($retorno) {
        $this->retorno = $retorno;
    }

    public function getRetorno() {
        return $this->retorno;
    }
}

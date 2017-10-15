<?php

class Moderado implements Investimento {

    private $chance;
    private $retorno;

    public function investeSaldo(Conta $conta) {
        $this->chance = mt_rand(1, 100);

        if ($this->chance >= 50) {
            $this->setRetorno(0.025);
        } else {
            $this->setRetorno(0.025);
        }
        return $conta->getSaldo() * $this->retorno;
    }

    public function setRetorno($retorno) {
        $this->retorno = $retorno;
    }

    public function getRetorno() {
        return $this->retorno;
    }

}

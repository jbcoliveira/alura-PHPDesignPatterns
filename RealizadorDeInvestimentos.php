<?php

class RealizadorDeInvestimentos {

    private $investimento;
    private $conta;
    
    function __construct(Conta $conta,Investimento $investimento) {
        $this->investimento = $investimento;
        $this->conta = $conta;
    }
    
    public function investe(){
        $resultado =  $this->investimento->investeSaldo($this->conta);
        
        $this->conta->deposita($resultado * 0.75);
        return $this->conta->getSaldo();
    }

}

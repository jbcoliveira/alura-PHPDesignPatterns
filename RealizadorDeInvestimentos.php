<?php

class RealizadorDeInvestimentos {

    private $investimento;
    private $conta;
    private $totalInvestido;
            
    function __construct(Conta $conta,Investimento $investimento) {
        $this->investimento = $investimento;
        $this->conta = $conta;
    }
    
    public function investe(){
        $resultado =  $this->investimento->investeSaldo($this->conta);
        
        $this->setTotalInvestido($resultado);
       
        $total = $resultado * 0.75;
              
        $this->conta->deposita($total);
        
        return $this->conta->getSaldo();
    }
    
    function getTotalInvestido() {
        return $this->totalInvestido;
    }

    function setTotalInvestido($totalInvestido) {
        $this->totalInvestido = $totalInvestido;
    }



}

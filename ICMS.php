<?php

class ICMS extends Imposto {

    function __construct(Imposto $outroImposto = null) {
        parent::__construct($outroImposto);
    }
    
    protected function calculoDoOutroImposto(\Orcamento $orcamento) {
        return parent::calculoDoOutroImposto($orcamento);
    }

   
    public function calcula(Orcamento $orcamento) {
        return ($orcamento->getValor() * 0.05) + 50  + $this->calculoDoOutroImposto($orcamento);
    }

}

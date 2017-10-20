<?php

class ISS extends Imposto {

    function __construct(Imposto $outroImposto = null) {
        parent::__construct($outroImposto);
    }
    
    protected function calculoDoOutroImposto(\Orcamento $orcamento) {
        return parent::calculoDoOutroImposto($orcamento);
    }


    public function calcula(Orcamento $orcamento) {
        return ($orcamento->getValor() * 0.06) + $this->calculoDoOutroImposto($orcamento);
    }

}

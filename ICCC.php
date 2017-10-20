<?php

class ICCC extends Imposto {

    function __construct(Imposto $outroImposto = null) {
        parent::__construct($outroImposto);
    }
    
    protected function calculoDoOutroImposto(\Orcamento $orcamento) {
        return parent::calculoDoOutroImposto($orcamento);
    }


    public function calcula(Orcamento $orcamento) {
        if ($orcamento->getValor() < 1000) {
            return ($orcamento->getValor() * 0.05)  + $this->calculoDoOutroImposto($orcamento);
        } elseif ($orcamento->getValor() >= 1000 && $orcamento->getValor() <= 3000) {
            return ($orcamento->getValor() * 0.07) + $this->calculoDoOutroImposto($orcamento);
        } elseif ($orcamento->getValor() > 3000) {
            return ($orcamento->getValor() * 0.08) + 30 + $this->calculoDoOutroImposto($orcamento);
        } else {
            return $orcamento + $this->calculoDoOutroImposto($orcamento);
        }
    }

}

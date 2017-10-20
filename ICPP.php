<?php

class ICPP extends TemplateDeImpostoCondicional {

    function __construct(Imposto $outroImposto = null) {
        parent::__construct($outroImposto);
    }

    protected function deveUsarMaximaTaxacao(\Orcamento $orcamento) {
        return $orcamento->getValor() > 500;
    }

    protected function maximaTaxacao(\Orcamento $orcamento) {
        return ($orcamento->getValor() * 0.07) + $this->calculoDoOutroImposto($orcamento);
    }

    protected function minimaTaxacao(\Orcamento $orcamento) {
        return ($orcamento->getValor() * 0.05) + $this->calculoDoOutroImposto($orcamento);
    }

}

<?php

class ImpostoAlto extends TemplateDeImpostoCondicional {

    function __construct(Imposto $outroImposto = null) {
        parent::__construct($outroImposto);
    }
    
    protected function calculoDoOutroImposto(\Orcamento $orcamento) {
        return parent::calculoDoOutroImposto($orcamento);
    }

    public function calcula(\Orcamento $orcamento) {
        return parent::calcula($orcamento);
    }

    protected function deveUsarMaximaTaxacao(\Orcamento $orcamento) {
        return $orcamento->getValor() > 0;
    }

    protected function maximaTaxacao(\Orcamento $orcamento) {
        return $orcamento->getValor() * 0.20;
    }

    protected function minimaTaxacao(\Orcamento $orcamento) {
        return $orcamento->getValor() * 0;
    }

    

}

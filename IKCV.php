<?php

class IKCV extends TemplateDeImpostoCondicional {

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
        return $orcamento->getValor() > 500 && $this->temItemComValorMaior100($orcamento);
    }

    protected function maximaTaxacao(\Orcamento $orcamento) {
        return $orcamento->getValor() * 0.10;
    }

    protected function minimaTaxacao(\Orcamento $orcamento) {
        return $orcamento->getValor() * 0.06;
    }

    protected function temItemComValorMaior100(\Orcamento $orcamento) {

        foreach ($orcamento->getItens() as $item) {
            if ($item->getValor() > 100)
                return true;
        }
        return false;
    }

}

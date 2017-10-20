<?php

class IHIT extends TemplateDeImpostoCondicional {

    function __construct(Imposto $outroImposto = null) {
        parent::__construct($outroImposto);
    }

    protected function deveUsarMaximaTaxacao(\Orcamento $orcamento) {
        return $this->temItemDuplicado($orcamento);
    }

    protected function maximaTaxacao(\Orcamento $orcamento) {
        return ($orcamento->getValor() * 0.13) + 100 + $this->calculoDoOutroImposto($orcamento);
    }

    protected function minimaTaxacao(\Orcamento $orcamento) {
        return ($orcamento->getValor() * count($orcamento->getItens()) * 0.01) + $this->calculoDoOutroImposto($orcamento);
    }

    protected function temItemDuplicado(\Orcamento $orcamento) {
        $noOrcamento = Array();

        foreach ($orcamento->getItens() as $item) {
            if (in_array($item->getDescricao(), $noOrcamento))
                return true;
            else
                $noOrcamento[] = $item->getDescricao();
        }

        return false;
    }

}

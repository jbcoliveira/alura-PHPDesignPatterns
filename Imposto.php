<?php

abstract class Imposto {

    private $outroImposto;

    function __construct(Imposto $outroImposto = null) {
        $this->outroImposto = $outroImposto;
    }

    protected function calculoDoOutroImposto(Orcamento $orcamento) {
        // tratando o caso do proximo imposto nao existir!
        if (is_null($this->outroImposto))
            return 0;

        return $this->outroImposto->calcula($orcamento);
    }

    abstract function calcula(Orcamento $orcamento);
}

<?php

class FiltroSaldoMaior500Mil extends Filtro {

    public function __construct(\Filtro $outroFiltro = null) {
        parent::__construct($outroFiltro);
    }

    public function filtra($contas) {

        foreach ($contas as $conta) {
            if ($conta->getSaldo() > 500000) {
                $this->adicionaConta($conta);
            }
        }

        foreach ($this->proximo($contas) as $conta) {
            $this->adicionaConta($conta);
        }

        return $this->getListaContas();
    }


    public function adicionaConta($conta) {
        parent::adicionaConta($conta);
    }

    public function getListaContas() {
        return parent::getListaContas();
    }

}

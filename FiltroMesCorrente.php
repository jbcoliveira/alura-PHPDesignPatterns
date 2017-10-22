<?php

class FiltroMesCorrente extends Filtro {

    public function __construct(\Filtro $outroFiltro = null) {
        parent::__construct($outroFiltro);
    }

    public function filtra($contas) {

        foreach ($contas as $conta) {
            $dataAbertura = $conta->getDataAbertura();
            $agora = new DateTime();

            $interval = date_diff($dataAbertura, $agora);
            if ($interval->days < 30){
                $this->adicionaConta($conta);
            }
                
            foreach ($this->proximo($contas) as $conta) {
                $this->adicionaConta($conta);
            }
            /*
              if ($dataAbertura  ) {
              $this->adicionaConta($conta);
              }
             * */
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

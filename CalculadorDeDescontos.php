<?php

class CalculadorDeDescontos {

    public function calcula(Orcamento $orcamento) {
        $d1 = new Desconto10PorcentoMais5Itens();
        $d2 = new Desconto7PorcentoMaiorQue500Reais();
        $d3 = new DescontoPorVendaCasada();
        
        $dultimo = new SemDesconto();

        $d1->setProximo($d2);
        $d2->setProximo($d3);
        $d3->setProximo($dultimo);

        return $d1->desconta($orcamento);
    }

}

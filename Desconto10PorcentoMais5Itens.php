<?php

class Desconto10PorcentoMais5Itens implements Desconto {

    public function desconta(Orcamento $orcamento) {
        if (count($orcamento->getItens()) > 5 ) {
            return $orcamento->getValor() * 0.10;
        } else {
            return $this->proximoDesconto->desconta($orcamento);
        }
    }

    public function setProximo(Desconto $proximo) {
        $this->proximoDesconto = $proximo;
    }

}

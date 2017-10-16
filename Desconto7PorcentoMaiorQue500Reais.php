<?php

class Desconto7PorcentoMaiorQue500Reais implements Desconto {

    public function desconta(Orcamento $orcamento) {
        if ($orcamento->getValor() > 500) {
            return $orcamento->getValor() * 0.07;
        } else {
            return $this->proximoDesconto->desconta($orcamento);
        }
    }

    public function setProximo(Desconto $proximo) {
        $this->proximoDesconto = $proximo;
    }

}

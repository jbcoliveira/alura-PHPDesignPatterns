<?php

class DescontoPorVendaCasada implements Desconto {

    public function desconta(\Orcamento $orcamento) {

        if ($this->aconteceuVendaCasadaEm($orcamento)) {
            return $orcamento->getValor() * 0.05;
        } else {
            return $this->proximoDesconto->desconta($orcamento);
        }
    }

    public function setProximo(\Desconto $proximo) {
        $this->proximoDesconto = $proximo;
    }

    private function aconteceuVendaCasadaEm(Orcamento $orcamento) {
        return $this->existe("CANETA", $orcamento) && $this->existe("LAPIS", $orcamento);
    }

    private function existe($nomeDoItem, Orcamento $orcamento) {
        foreach ($orcamento->getItens() as $item) {
            if ($item->getDescricao() == $nomeDoItem)
                return true;
        }
        return false;
    }

}

<?php

class EmAprovacao implements EstadoDeUmOrcamento {

    public function aplicaDescontoExtra(Orcamento $orcamento) {
        if ($orcamento->getDescontoDuplicado() != TRUE) {
            $valor = $orcamento->getValor();
            $orcamento->setValor($valor - $valor * 0.05);
            $orcamento->setDescontoDuplicado(TRUE);
        } else {
            throw new Exception("Desconto já aplicado");
        }
    }

    public function aprova(Orcamento $orcamento) {
        $orcamento->setEstado(new Aprovado());
    }

    public function reprova(Orcamento $orcamento) {
        $orcamento->setEstado(new Reprovado());
    }

    public function finaliza(Orcamento $orcamento) {
        throw new Exception("Orcamento em aprovação não pode ir para finalizado diretamente");
    }

}

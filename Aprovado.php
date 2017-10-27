<?php

class Aprovado implements EstadoDeUmOrcamento {

    public function aplicaDescontoExtra(Orcamento $orcamento) {
        if ($orcamento->getDescontoDuplicado() != TRUE) {
            $valor = $orcamento->getValor();
            $orcamento->setValor($valor - $valor * 0.02);
            $orcamento->setDescontoDuplicado(TRUE);
        } else {
            throw new Exception("Desconto já aplicado");
        }
    }

    public function aprova(Orcamento $orcamento) {
        throw new Exception("Orcamento aprovado não pode ser aprovado novamente.");
    }

    public function reprova(Orcamento $orcamento) {
        throw new Exception("Orcamento aprovado não pode ser reprovado.");
    }

    public function finaliza(Orcamento $orcamento) {
        $orcamento->setEstado(new Finalizado());
    }

}

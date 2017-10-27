<?php

class Reprovado implements EstadoDeUmOrcamento {

    public function aplicaDescontoExtra(Orcamento $orcamento) {
       throw new Exception("Orcamento reprovado não pode ser ter desconto.");
    }

    public function aprova(Orcamento $orcamento) {
        throw new Exception("Orcamento reprovado não pode ser aprovado.");
    }

    public function reprova(Orcamento $orcamento) {
        throw new Exception("Orcamento reprovado não pode ser reprovado novamente.");
    }

    public function finaliza(Orcamento $orcamento) {
        $orcamento->setEstado(new Finalizado());
    }

}

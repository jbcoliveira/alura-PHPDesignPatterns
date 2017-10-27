<?php

class Finalizado implements EstadoDeUmOrcamento  {

    public function aplicaDescontoExtra(Orcamento $orcamento) {
         throw new Exception("Orcamento finalizado não pode receber descontos.");
    }

    public function aprova(Orcamento $orcamento) {
        throw new Exception("Orcamento finalizado não pode ser aprovado.");
    }

    public function reprova(Orcamento $orcamento) {
         throw new Exception("Orcamento finalizado não pode ser reprovado.");
    }

    public function finaliza(Orcamento $orcamento) {
        throw new Exception("Orcamento finalizado não ser finalizado novamente.");
    }


}


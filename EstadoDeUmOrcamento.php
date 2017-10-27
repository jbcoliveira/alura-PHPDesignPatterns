<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author joao
 */
interface EstadoDeUmOrcamento {

    public function aplicaDescontoExtra(Orcamento $orcamento);

    public function aprova(Orcamento $orcamento);

    public function reprova(Orcamento $orcamento);

    public function finaliza(Orcamento $orcamento);
}

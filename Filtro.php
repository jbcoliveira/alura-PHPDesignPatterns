<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Filtro
 *
 * @author joao
 */
abstract class Filtro {

    private $outroFiltro;
    private $listaContas = array();

    function __construct(Filtro $outroFiltro = null) {
        $this->outroFiltro = $outroFiltro;
    }

    
    protected function proximo($contas) {
        if (!is_null($this->outroFiltro))
            return $this->outroFiltro->filtra($contas);
        else
            return Array();
    }

    function getListaContas() {
        return $this->listaContas;
    }

    function adicionaConta($conta) {
        $this->listaContas[] = $conta;
    }

    public abstract function filtra($contas);
}

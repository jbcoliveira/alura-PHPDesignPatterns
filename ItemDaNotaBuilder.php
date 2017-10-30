<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ItemDaNotaBuilder {
    
    private $descricao;
    private $valor;

    function __construct() {
        $this->descricao = "";
        $this->valor = 0;
    }

    function comDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function comValor($valor) {
        $this->valor = $valor;
    }

        
    public function build() {
        return new ItemDaNota($this->descricao, $this->valor);
    }
}
<?php

class Orcamento {
    
    private $valor;
    private $itens  = array();
    
    function __construct($valor) {
        $this->valor = $valor;
    }

    function getValor() {
        return $this->valor;
    }

    function getItens() {
        return $this->itens;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function adicionaItem(Item $item) {
        $this->itens[] = $item;
    }



   
}

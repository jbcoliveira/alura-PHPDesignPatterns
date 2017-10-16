<?php


class Item {

    private $descricao;
    private $valor;
    
    function __construct($descricao, $valor) {
        $this->descricao = $descricao;
        $this->valor = $valor;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getValor() {
        return $this->valor;
    }



}
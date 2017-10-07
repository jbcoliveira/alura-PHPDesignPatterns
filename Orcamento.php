<?php

class Orcamento {

    
    private $valor;
    function __construct($valor) {
        $this->valor = $valor;
    }

    
    function getValor() {
        return $this->valor;
    }

   
}

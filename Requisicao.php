<?php

class Requisicao {

    private $formato;

    public function __construct($formato) {
        $this->formato = $formato;
    }
    
    function getFormato() {
        return $this->formato;
    }


}

<?php

require_once '../Imposto.php.php';
require_once '../ICCC.php.php';
require_once '../ICMS.php.php';
require_once '../ISS.php';

class CriadorImposto {

    private $leilao;

    public function para($descricao) {
        $this->leilao = new Leilao($descricao);
        return $this;
    }

    public function lance(Usuario $usuario, $valor) {
        $this->leilao->propoe(new Lance($usuario, $valor));
        return $this;
    }

    public function constroi() { 
        return $this->leilao;
    }
}
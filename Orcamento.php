<?php

class Orcamento {

    private $valor;
    private $itens = array();
    private $estado;
    private $descontoDuplicado;

    function __construct($valor) {
        $this->valor = $valor;
        $this->estado = new EmAprovacao();
        $this->descontoDuplicado = false;
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

    function getEstado() {
        return $this->estado;
    }

    public function setEstado(EstadoDeUmOrcamento $estado) {
        $this->estado = $estado;
    }

    public function aplicaDescontoExtra() {
        $this->estado->aplicaDescontoExtra($this);
    }

    public function aprova() {
        $this->estado->aprova($this);
    }

    public function reprova() {
        $this->estado->reprova($this);
    }

    public function finaliza() {
        $this->estado->finaliza($this);
    }

    function getDescontoDuplicado() {
        return $this->descontoDuplicado;
    }

    function setDescontoDuplicado($descontoDuplicado) {
        $this->descontoDuplicado = $descontoDuplicado;
    }

}

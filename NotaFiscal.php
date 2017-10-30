<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class NotaFiscal {

    private $razaoSocial ;
    private $CNPJ;
    private $valorBruto;
    private $impostos ;
    private $dataEmissao ;
    private $observacoes;
    private $itens;
    
    function __construct($razaoSocial, $CNPJ, $valorBruto, $impostos, $dataEmissao, $observacoes, $itens) {
        $this->razaoSocial = $razaoSocial;
        $this->CNPJ = $CNPJ;
        $this->valorBruto = $valorBruto;
        $this->impostos = $impostos;
        $this->dataEmissao = $dataEmissao;
        $this->observacoes = $observacoes;
        $this->itens = array();
    }

    function getRazaoSocial() {
        return $this->razaoSocial;
    }

    function getCNPJ() {
        return $this->CNPJ;
    }

    function getValorBruto() {
        return $this->valorBruto;
    }

    function getImpostos() {
        return $this->impostos;
    }

    function getDataEmissao() {
        return $this->dataEmissao;
    }

    function getObservacoes() {
        return $this->observacoes;
    }

    function getItens() {
        return $this->itens;
    }

    function setRazaoSocial($razaoSocial) {
        $this->razaoSocial = $razaoSocial;
    }

    function setCNPJ($CNPJ) {
        $this->CNPJ = $CNPJ;
    }

    function setValorBruto($valorBruto) {
        $this->valorBruto = $valorBruto;
    }

    function setImpostos($impostos) {
        $this->impostos = $impostos;
    }

    function setDataEmissao($dataEmissao) {
        $this->dataEmissao = $dataEmissao;
    }

    function setObservacoes($observacoes) {
        $this->observacoes = $observacoes;
    }

    function setItens($itens) {
        $this->itens = $itens;
    }


}
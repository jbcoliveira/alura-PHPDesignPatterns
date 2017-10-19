<?php

class Banco {

    private $nome;
    private $endereco;
    private $telefone;
    private $email;
    private $agencias  = array();
    
    function __construct($nome, $telefone) {
        $this->nome = $nome;
        $this->telefone = $telefone;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getEmail() {
        return $this->email;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function getAgencias() {
        return $this->agencias;
    }

    function setAgencias(Agencia $agencias) {
        $this->agencias = $agencias;
    }

    function adicionaAgencia($agencia) {
        $this->agencias[] = $agencia;
    }
    
    function getNome() {
        return $this->nome;
    }

    function getTelefone() {
        return $this->telefone;
    }


    
    
}

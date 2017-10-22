<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProcessaContas
 *
 * @author joao
 */
class ProcessaContas {

    private $banco;
    private $listaContasSuspeitas = array();

    function __construct(Banco $banco) {
        $this->banco = $banco;
    }

    public function processar() {

        $agencias = $this->banco->getAgencias();

        foreach ($agencias as $agencia) {
            $contas = $agencia->getContas();
           
            $filtro = new FiltroSaldoMenorQue100(new FiltroSaldoMaior500Mil(new FiltroMesCorrente()) );
            //echo 'Agencia: ' . $agencia->getNumero() . '-' . $agencia->getDigito() . '<br />';
            $this->listaContasSuspeitas[] = $filtro->filtra($contas);
        }
    }

    function getListaContasSuspeitas() {
        return $this->listaContasSuspeitas;
    }

    function exibeContasSuspeitas() {

        foreach ($this->getListaContasSuspeitas() as $contas) {

            foreach ($contas as $conta) {
                echo 'Conta: '. $conta->getNumero(). 
                        '; Titular: '. $conta->getTitular(). 
                        '; Saldo: '. $conta->getSaldo().
                        '; Data de Abertura: '. $conta->getDataAbertura()->format("d/m/Y"). '<br />';
                
            }
        }
    }

}

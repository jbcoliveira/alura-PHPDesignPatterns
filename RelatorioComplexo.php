<?php

class RelatorioComplexo extends TemplateDeRelatorio {

    protected function cabecalho(\Banco $banco) {
        echo $banco->getNome() . ' ' . $banco->getEndereco() . ' ' . $banco->getTelefone() . '<br />';
    }

    protected function corpo(\Banco $banco) {
        $agencias = $banco->getAgencias();

        foreach ($agencias as $agencia) {
            $contas = $agencia->getContas();
            echo 'Agencia: ' . $agencia->getNumero() . '-' . $agencia->getDigito() . '<br />';
            foreach ($contas as $conta) {
                echo 'Conta: ' . $conta->getNumero() . '<br />';
                echo 'Titular: ' . $conta->getTitular() . '<br />';
                echo 'Saldo: ' . $conta->getSaldo() . '<br /><br />';
            }
        }
    }

    protected function rodape(\Banco $banco) {
        echo $banco->getEmail() . ' ' . date("d/m/Y") . '<br />';
    }

}

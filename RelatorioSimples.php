<?php

class RelatorioSimples extends TemplateDeRelatorio {

    protected function cabecalho(\Banco $banco) {
        echo $banco->getNome() . '<br />';
    }

    protected function corpo(\Banco $banco) {
        $agencias = $banco->getAgencias();

        foreach ($agencias as $agencia) {
            $contas = $agencia->getContas();
            foreach ($contas as $conta) {
                echo 'Titular: ' . $conta->getTitular() . '<br />';
                echo 'Saldo: ' . $conta->getSaldo() . '<br /><br />';
            }
        }
    }

    protected function rodape(\Banco $banco) {
        echo $banco->getEmail() . '<br />';
    }

}

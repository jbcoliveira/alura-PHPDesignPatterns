<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Positivo implements StatusDeUmaConta {

    public function saca(Conta $conta, $valor) {
        $conta->setSaldo($conta->getSaldo() - $valor);

        if ($conta->getSaldo() < 0) {
            $conta->setStatus(new Negativo());
        }
    }

    public function deposita(Conta $conta, $valor) {
        $conta->setSaldo( $conta->getSaldo() + $valor * 0.98);
    }

}

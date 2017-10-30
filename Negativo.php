<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Negativo implements StatusDeUmaConta {
    
    public function saca(Conta $conta, $valor) {
         if ($conta->getSaldo() < 0){
             throw new Exception("Conta no negativo. Impossível sacar.");
         }
                   
        $conta->setSaldo($conta->getSaldo() - $valor);
    }

    public function deposita(Conta $conta, $valor) {
        $conta->setSaldo( $conta->getSaldo() + $valor * 0.95);
        
        
        if ($conta->saldo > 0){
            $conta->setStatus(new Positivo());
        }
    }

}
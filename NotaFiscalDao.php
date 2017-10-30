<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NotaFiscalDao
 *
 * @author jboliveira
 */
class NotaFiscalDao implements AcaoAposGerarNota{
    public function executa(\NotaFiscal $notaFiscal) {
        echo '</br >Gravando no Banco</br >';
    }

}

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NotaFiscalMultiplicador
 *
 * @author jboliveira
 */
class NotaFiscalMultiplicador implements AcaoAposGerarNota {

    private $fator;

    public function __construct($fator) {
        $this->fator = $fator;
    }

    public function executa(\NotaFiscal $notaFiscal) {
        echo "<br />". $notaFiscal->getValorBruto() *  $this->fator ."<br />";
    }

}

<?php

require_once '../Orcamento.php';
require_once '../Imposto.php';
require_once '../ICCC.php';
require_once '../ICMS.php';
require_once '../ISS.php';
require_once '../CalculadorDeImposto.php';

class ImpostoTest extends PHPUnit\Framework\TestCase {

    private $orcamento;
    private $icms;
    private $iss;
    private $iccc;
    private $calculadorDeImposto;

    public function setUp() {

        $this->orcamento = new Orcamento(0);
        $this->icms = new ICMS();
        $this->iss = new ISS();
        $this->iccc = new ICCC();

        $this->calculadorDeImposto = new CalculadorDeImposto();
    }

    public function testICCCmenorQue1000Retorna5PorCento() {
        
        $this->orcamento->setValor(500);

        $valorEsperado = 25;

        $this->assertEquals($valorEsperado, $this->calculadorDeImposto->realizaCalculo($this->orcamento, $this->iccc));
    }

    public function testICCCEntre1000e3000Retorna7PorCento() {
        
        $this->orcamento->setValor(1000);

        $valorEsperado = 70;

        $this->assertEquals($valorEsperado, $this->calculadorDeImposto->realizaCalculo($this->orcamento, $this->iccc));
    }

    public function testICCCmaiorQue3000Retorna8PorCentoMais30() {
       
        $this->orcamento->setValor(10000);

        $valorEsperado = 830;

        $this->assertEquals($valorEsperado, $this->calculadorDeImposto->realizaCalculo($this->orcamento, $this->iccc));
    }

}

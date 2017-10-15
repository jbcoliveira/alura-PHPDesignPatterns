<?php

function autoload($class) {
    require_once $class . ".php";
}

spl_autoload_register("autoload");
/*
$reforma = new Orcamento(10000);
$icms = new ICMS();
$iss = new ISS();
$iccc = new ICCC();


echo $reforma->getValor();


$calculadorDeImposto = new CalculadorDeImposto();

echo '<br />';

echo $calculadorDeImposto->realizaCalculo($reforma, $iccc);

echo '<br />';
*/


$conta = new Conta(1000);

$investimento = new Arrojado();

$realizadorDeInvestimento = new RealizadorDeInvestimentos($conta,$investimento);

echo 'Saldo: ' . $conta->getSaldo();
echo '<br />';



echo 'Valor a ser investido: ' . $investimento->investeSaldo($conta);
echo '<br />';


echo 'Saldo Final: ' . $realizadorDeInvestimento->investe();


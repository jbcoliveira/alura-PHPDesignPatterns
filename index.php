<?php

function autoload($class) {
    require_once $class . ".php";
}

spl_autoload_register("autoload");

$reforma = new Orcamento(10000);
$icms = new ICMS();
$iss = new ISS();
$iccc = new ICCC();


echo $reforma->getValor();


$calculadorDeImposto = new CalculadorDeImposto();

echo '<br />';

echo $calculadorDeImposto->realizaCalculo($reforma, $iccc);


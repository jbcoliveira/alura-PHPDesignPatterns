<?php

function autoload($class) {
    require_once $class . ".php";
}

spl_autoload_register("autoload");

$reforma = new Orcamento(500);
$icms = new ICMS();
$iss = new ISS();


echo $reforma->getValor();


$calculadorDeImposto = new CalculadorDeImposto();

echo '<br />';

$calculadorDeImposto->realizaCalculo($reforma, $icms);

echo '<br />';

$calculadorDeImposto->realizaCalculo($reforma, $iss);


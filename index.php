<?php

function autoload($class) {
    require_once $class . ".php";
}

spl_autoload_register("autoload");


// Teste Orçamento

echo '<br /> Teste Orçamento';
$conta = new Conta(500);

$investimento = new Conservador();

$realizadorDeInvestimento = new RealizadorDeInvestimentos($conta, $investimento);

echo 'Saldo: ' . $conta->getSaldo();
echo '<br />';


echo 'Saldo Final: ' . $realizadorDeInvestimento->investe() . ' (descontados 25%)';
echo '<br />';

echo 'Retorno R$: ' . $realizadorDeInvestimento->getTotalInvestido();
echo '<br />';

echo 'Retorno %: ' . $investimento->getRetorno();
echo '<br />';



echo '<br />Teste Descontos <br />';

//Testa Descontos
$orcamento = new Orcamento(300);

$calculador = new CalculadorDeDescontos();

$orcamento->adicionaItem(new Item("CANETA", 50.0));
$orcamento->adicionaItem(new Item("LAPIS", 50.0));

$orcamento->adicionaItem(new Item("CANETA", 50.0));
$orcamento->adicionaItem(new Item("LAPIS", 50.0));

$orcamento->adicionaItem(new Item("CANETA", 50.0));
$orcamento->adicionaItem(new Item("LAPIS", 50.0));


$desconto = $calculador->calcula($orcamento);

echo 'Valor do Orçamento: ' . $orcamento->getValor();
echo '<br />';
echo 'Numero de Itens: ' . count($orcamento->getItens());
echo '<br />';
echo 'Desconto: ' . $desconto;



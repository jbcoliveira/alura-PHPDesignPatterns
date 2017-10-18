<?php

function autoload($class) {
    require_once $class . ".php";
}

spl_autoload_register("autoload");


// Teste Conta
/*
echo '<br /> Teste Orçamento';
$conta = new Conta('Joao',500);

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
$orcamento = new Orcamento(100);

$calculador = new CalculadorDeDescontos();

$orcamento->adicionaItem(new Item("CANETA", 50.0));
$orcamento->adicionaItem(new Item("LAPIS", 50.0));



$desconto = $calculador->calcula($orcamento);

echo 'Valor do Orçamento: ' . $orcamento->getValor();
echo '<br />';
echo 'Numero de Itens: ' . count($orcamento->getItens());
echo '<br />';
echo 'Desconto: ' . $desconto;


//Testa Requisicao

$conta = new Conta('Joao',500);

$formato = new Formato();

$requisicao = new Requisicao($formato::$PORCENTO);

$correnteFormato = new CorrenteFormatos();

echo $correnteFormato->requisita($requisicao, $conta);
*/

//Teste Imposto

$orcamento = new Orcamento(501);

$calculador = new CalculadorDeImposto();

$orcamento->adicionaItem(new Item("LAPIS", 50.0));
$orcamento->adicionaItem(new Item("CANETA", 10.0));
$orcamento->adicionaItem(new Item("BORRACHA", 10.0));
$orcamento->adicionaItem(new Item("ESTOJO", 10.0));        
$orcamento->adicionaItem(new Item("LAPIS", 50.0));

$icpp = new ICPP();
$ikcv = new IKCV();
$ihit = new IHIT();
$imposto = $calculador->realizaCalculo( $orcamento, $ihit);

echo 'Valor do Orçamento: ' . $orcamento->getValor();
echo '<br />';
echo 'Numero de Itens: ' . count($orcamento->getItens());
echo '<br />';
echo 'Imposto: ' . $imposto;
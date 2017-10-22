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
 * 
 * 

//Teste Relatorios

$banco = new Banco("Banco","(11) 1234-5678");
$banco->setEmail("banco@banco.com");
$banco->setEndereco("Rua ABC, 1234");

$agencia1 = new Agencia(12345,8);
$agencia2 = new Agencia(1222,9);

$conta1 = new Conta("Joao",1000);
$conta1->setNumero(123);

$conta2 = new Conta("Ana",500);
$conta2->setNumero(999);

$agencia1->adicionaConta($conta1);
$agencia2->adicionaConta($conta2);

$banco->adicionaAgencia($agencia1);
$banco->adicionaAgencia($agencia2);

$relatorio = new RelatorioSimples();

$relatorio->imprime($banco);
 * 
 * 
 

//Teste Imposto (Decorator)

$orcamento = new Orcamento(100);

$imposto1 = new ISS(new ICMS());
$imposto2 = new ICPP(new IHIT());
$imposto3 = new ICMS(new ImpostoAlto());

$calculador = new CalculadorDeImposto();

$orcamento->adicionaItem(new Item("LAPIS", 50.0));
$orcamento->adicionaItem(new Item("CANETA", 10.0));
$orcamento->adicionaItem(new Item("CANETA", 10.0));
$orcamento->adicionaItem(new Item("BALA", 10.0));




$imposto1Valor = $calculador->realizaCalculo( $orcamento, $imposto1);
$imposto2Valor = $calculador->realizaCalculo( $orcamento, $imposto2);
$imposto3Valor = $calculador->realizaCalculo( $orcamento, $imposto3);


echo 'Valor do Orçamento: ' . $orcamento->getValor();
echo '<br />';
echo 'Numero de Itens: ' . count($orcamento->getItens());
echo '<br />';
echo 'Imposto1: ' . $imposto1Valor;
echo '<br />';
echo 'Imposto2: ' . $imposto2Valor;
echo '<br />';
echo 'Imposto3: ' . $imposto3Valor;
 * 
 */

//Teste Filtros

$banco = new Banco("Banco","(11) 1234-5678");
$banco->setEmail("banco@banco.com");
$banco->setEndereco("Rua ABC, 1234");

$agencia1 = new Agencia(12345,8);
$agencia2 = new Agencia(1222,9);

$conta1 = new Conta("Joao",500  ,date("d/m/Y"));
$conta1->setNumero(123);

$conta3 = new Conta("Maria",5000000  ,"01/01/1995");
$conta3->setNumero(5001);

$conta2 = new Conta("Ana",500,"01/01/2015");
$conta2->setNumero(999);

$agencia1->adicionaConta($conta1);
$agencia2->adicionaConta($conta2);
$agencia1->adicionaConta($conta3);

$banco->adicionaAgencia($agencia1);
$banco->adicionaAgencia($agencia2);

$processaContas =  new ProcessaContas($banco);
$processaContas->processar();
$processaContas->exibeContasSuspeitas();

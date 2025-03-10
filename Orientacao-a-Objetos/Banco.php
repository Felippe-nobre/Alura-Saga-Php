<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$felippe = new Titular(new CPF('123.456.789-10'), 'Felippe Nobre');
$primeiraConta = new Conta($felippe);
$primeiraConta->depositar(valorADepositar:500);
$primeiraConta->sacar(valorASacar: 300);


echo $primeiraConta->recuperaNomeTitular() .PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() .PHP_EOL;
echo $primeiraConta->recuperaSaldo().PHP_EOL;

$caike = new Titular(new CPF('123.456.789-11'), 'Caike');
$segundaConta = new Conta($caike);
var_dump( $segundaConta);


echo Conta:: recuperaNumeroDeContas() .PHP_EOL;

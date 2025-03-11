<?php
use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$conta = new Conta(
    new Titular(
        new CPF('123.456.789-10'), 
        'Felippe Nobre', 
        new Endereco('Sao Paulo', 'Centro', 'Rua 1', '123')
    ),
    1
);

$conta ->deposita(500);
$conta -> saca(100);
echo $conta -> recuperaSaldo();
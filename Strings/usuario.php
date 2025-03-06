<?php

$nome = 'Felíppe Nobre';
$email = 'felippeNobre@alura.com.br';
$senha = '123';

if(strlen($senha) < 8){ // strlen serve para saber o tamanho da string, ele retorna o tamanho da string em bytes
    echo'Senha insegura' . PHP_EOL;
}

$posicaoDoArroba = strpos($email, '@'); // strpos serve para saber a posicao de uma string

// echo substr($email,0, 12) . PHP_EOL; //substr serve para tirar uma parte da string
// echo substr($email,12) . PHP_EOL;
// echo strtoupper($usario) . PHP_EOL; // strtoupper serve para deixar as letras maiusculas, usamos quando nosso programa tem que ter letras maiusculas
$usario = substr($email,0, $posicaoDoArroba);
echo strtolower($usario) . PHP_EOL; // strtolower serve para deixar as letras minusculas, usamos quando nosso programa tem que ter letras minusculas
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;

list($nome, $sobrenome) = explode(' ', $nome);// explode serve para dividir uma string em um array usando um delimitador
echo 'Nome: ' . $nome . PHP_EOL;
echo 'Sobrenome: ' . $sobrenome . PHP_EOL;

$csv = 'Felippe Nobre,21,felippeNobre@alura.com.br';
var_dump(explode(',', $csv));

trim($email) . PHP_EOL; 
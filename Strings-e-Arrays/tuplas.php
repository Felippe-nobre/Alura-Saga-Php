<?php

$dados = [
    'nome' => 'Felippe', 
    'nota' => 10, 
    'idade' => 24
];
// $nome = $dados[0];
// $nota = $dados[1];
// $idade = $dados[2];
//['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados; // $nome = $dados[0], $nota = $dados[1], $idade = $dados[2], $nome = $dados['nome'], $nota = $dados['nota'], $idade = $dados['idade']

extract($dados); //extract serve para extrair as chaves do array
var_dump($nome, $nota, $idade);

var_dump(compact('nome', 'nota', 'idade')); //compact serve para compactar as chaves do array
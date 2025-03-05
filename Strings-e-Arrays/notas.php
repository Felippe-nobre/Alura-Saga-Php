<?php 

$notas = [
    'Felippe' =>  10,
    'Maria' =>  8,
    'Paulo' =>  9,
    'Joao' =>  7,
    'Pedro' =>  6
];

krsort($notas); //krsort serve para ordenar o array em ordem decrescente
//ksort($notas); //ksort serve para ordenar o array em ordem crescente
//asort( $notas ); //asort serve para ordenar o array em ordem crescente
// arsort($notas); //arsort serve para ordenar o array em ordem crescente
// rsort($notas); //rsort serve para ordenar o array em ordem decrescente 
//uksort($notas); //uksort serve para ordenar o array em ordem crescente

var_dump($notas);
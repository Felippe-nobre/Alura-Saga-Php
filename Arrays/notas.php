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

// if (gettype($notas) == 'array'){ // gettype serve para saber o tipo da variavel 
//     echo 'Sim, é um array';
// }; 


if (is_array($notas) == 'array'){ // is_array serve para saber se a variavel e um array 
    echo 'Sim, é um array' . PHP_EOL;
}; 

// var_dump(array_is_list($notas)); // array_is_list serve para saber se a variavel e um array

// echo'Felippe fez a prova:'. PHP_EOL;
//var_dump(array_key_exists('Felippe', $notas)); // array_key_exists serve para saber se a chave existe no array

var_dump(isset($notas["Felippe"])); // isset serve para saber se a chave existe no array

echo "Algum aluno tirou nota 10". PHP_EOL;
var_dump(in_array(10, $notas, true)); // in_array serve para saber se o valor existe no array, o segundo parametro serve para saber se o valor existe no array, o terceiro parametro serve para saber se o valor existe no array, o quarto parametro serve para saber se o valor existe no array


echo'Quem tirou 10?'. PHP_EOL;
echo(array_search(10, $notas)). PHP_EOL; // array_search serve para saber se o valor existe no array
echo(array_search(10, $notas, true));

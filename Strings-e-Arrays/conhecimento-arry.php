<?php 

$array = [
    1 => "um",
    2 => "dois",
    3 => "tres",
];

$contador = 0;
foreach ($array as $numeral => $nomeNumero) {
    echo "$numeral em português é: $nomeNumero" . PHP_EOL;
}

echo"Total: ". count($array) . PHP_EOL; // count serve para saber o tamanho do array, tabém temos o sizeof que também serve para saber o tamanho do array


//var_dump($array); // var_dump serve para saber o tipo da variavel
<?php

$texto = 'Texto com qualquer coisa poxa e caramba';

echo str_replace( // str_replace serve para substituir uma string por outra
    ['poxa', 'caramba'], 
['p', 'c'], 
$texto
) . PHP_EOL;

echo strtr($texto, 'poxa', '***@') . PHP_EOL; // strtr serve para substituir caracteres
echo strtr($texto,['poxa' => 'p', 'caramba'=> 'c']) . PHP_EOL;
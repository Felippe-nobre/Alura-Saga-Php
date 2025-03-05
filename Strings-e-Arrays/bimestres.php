<?php

$notasBimestre1 = [
    'Felippe' =>  10,
    'Maria' =>  8,
    'Paulo' =>  10,
    'Joao' =>  7,
    'Pedro' =>  6
];
$notasBimestre2 = [
  
    'Maria' =>  8,
    'Paulo' =>  10,
    'Joao' =>  7,
    
    
];

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2); // array_diff serve para saber a diferenca entre dois arrays, array_diff_key serve para saber a diferenca entre dois arrays, array_diff_assoc serve para saber a diferenca entre dois arrays

$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);


var_dump(array_keys($alunosFaltantes));
var_dump(array_values($alunosFaltantes));
var_dump(array_combine($notasAlunos, $nomesAlunos)); // array_combine serve para combinar dois arrays
var_dump(array_flip($alunosFaltantes)); // array_flip serve para inverter um array
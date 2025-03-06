<?php
$alunos2025 = [
    'Felippe',
    'Maria',
    'Paulo',
    'Joao',
    'Pedro' 
];

$novosAlunos = [
    'Daniel',
    'Joaquim',
    'Lucas',
    'Thiago'
];

//$alunos2026 = $alunos2025 + $novosAlunos; // + serve para juntar dois arrays
// $alunos2026 = array_merge($alunos2025, $novosAlunos); // array_merge serve para juntar dois arrays
$alunos2026 = [...$alunos2025, 'Fernando', ...$novosAlunos]; // ... serve para juntar dois arrays ela se chama spread operator, também temos o rest operator, que serve para juntar dois arrays
array_push($alunos2026, 'Thiago', 'Joaquim', 'matheus'); // array_push serve para juntar dois arrays
$alunos2026[] = 'samuel'; // array_push serve para juntar dois arrays
echo(array_unshift($alunos2026, 'sergio', 'artur')). PHP_EOL; // array_unshift serve para juntar dois arrays

echo(array_pop($alunos2026)). PHP_EOL; // array_pop serve para juntar dois arrays
var_dump($alunos2026);
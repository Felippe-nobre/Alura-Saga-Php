<?php

function exibeMensagem($mensagem){
    echo $mensagem . PHP_EOL;
}

$contasCorrentes = [
    48169779880 => [
        'titular' => 'Felippe', 
        'saldo' => 1000
    ],
    48169779881 =>  [
        'titular' => 'Maria', 
        'saldo' => 10000
    ], 
    48169779882 =>   [
        'titular' => 'Paulo', 
        'saldo' => 300
    ]
];

 $contasCorrentes[481697879880] = [
    'titular' => 'Daniel',
    'saldo' => 100
];

if(500 > $contasCorrentes['48169779881'] ['saldo']){
    exibeMensagem("Você não pode sacar, seu saldo é insuficiente" . PHP_EOL) ;
}else{
    $contasCorrentes['48169779881'] ['saldo'] -=500;
}

if (500 > $contasCorrentes['48169779882'] ['saldo']){
    exibeMensagem("Você não pode sacar, seu saldo é insuficiente" . PHP_EOL) ;
}else{
    $contasCorrentes['48169779882'] ['saldo'] -= 500;
}

foreach ($contasCorrentes as $cpf => $conta){
    echo  $cpf . " " .    $conta['titular'] .  ' ' . $conta['saldo']   . PHP_EOL; 
}
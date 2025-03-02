<?php
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


foreach ($contasCorrentes as $cpf => $conta){
    echo $conta['titular'] . PHP_EOL; 
}



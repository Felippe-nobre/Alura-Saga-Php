<?php

require_once 'funcoes.php'; // inclui o arquivo funcoes.php, voce pode incluir quantos arquivos quiser e pode usar os parenteses para chamar funcoes dentro do proprio arquivo ou não precisa do parenteses se for chamar fora do arquivo, pode usar o require ou o require_once que vai incluir o arquivo apenas uma vez
// se for usar o require_once ele vai incluir o arquivo apenas uma vez, se for usar o require ele vai incluir o arquivo quantas vezes quiser, se caso usar mais de uma vez ele vai dar erro

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

$contasCorrentes['48169779881'] = sacar( $contasCorrentes['48169779881'], 500);

$contasCorrentes['48169779880'] = depositar (
    $contasCorrentes['48169779880'], 
    900
);

titularComLetrasMaiusculas($contasCorrentes['48169779881']);


foreach ($contasCorrentes as $cpf => $conta){
    echo  "$cpf {$conta["titular"]} {$conta["saldo"]}" . PHP_EOL; 
}
 
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
//unset($contasCorrentes['48169779882']); // remove a chave 48169779882 do array contasCorrentes, caso nao use o & ele vai criar uma copia da variavel
titularComLetrasMaiusculas($contasCorrentes['48169779881']);
//a baixo fechamos a tag php, em seguida comecamos a escrever codigo html
?> 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Contas corentes</h1>
    <dl>
    <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3></dt>
        <dd>
            Saldo: <?=  $conta['saldo']; ?></dd>
        <?php } ?>
    </dl>
</body>
</html>

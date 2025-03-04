<?php 

function sacar(array $conta,  float $valorASacar): array {
    if ($valorASacar > $conta['saldo']){
        exibeMensagem("Você não pode sacar, seu saldo é insuficiente" . PHP_EOL) ;
    }else{
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}
function exibeMensagem($mensagem){
    echo $mensagem . PHP_EOL;
}

function depositar($conta, $valorADepositar){
    if ($valorADepositar > 0){
        $conta['saldo'] -= $valorADepositar;
    }else{
        exibeMensagem("Deposito precisa ser positivo" . PHP_EOL);
    }
    return $conta;
}

function titularComLetrasMaiusculas(array &$conta){ // & serve para passar o endereco da variavel, caso nao use o & ele vai criar uma copia da variavel
    $conta['titular'] = mb_strtoupper($conta['titular']); // mb_strtoupper ou strtoupper serve para deixar as letras maiusculas, podemos usar o strtolower para deixar as letras minusculas 
}
<?php

try {
    echo"Excutando" . PHP_EOL;
    throw new Exception('Exceção aqui');
}catch(Throwable $e){
    echo "Caindo no catch" . PHP_EOL;
}finally{ // finally serve para executar algo no final , utlizado para tratamento de erros quando o try falhar
    echo "Finally". PHP_EOL;
}
<?php

$url = 'http://alura.com.br';

if(str_starts_with($url, 'https://')){// } // str_starts_with serve para saber se uma string começa com outra string, util para validação 
    echo 'É uma url segura' . PHP_EOL;
}else{
    echo 'Nao é uma url segura' . PHP_EOL;
}


echo PHP_EOL;

if(str_ends_with($url, '.br')){ // str_ends_with serve para saber se uma string termina com outra string, util para validação
    echo 'É um domínio do Brasil'. PHP_EOL;
}else{
    echo 'Nao é um domínio do Brasil'. PHP_EOL;
}

echo PHP_EOL;
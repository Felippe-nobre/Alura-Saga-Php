<?php

$nome = 'Felippe Nobre';

$ehDaMinhaFamilia = str_contains($nome,'Nobre');// str_contains serve para saber se uma string contem outra string, util para validação

if ($ehDaMinhaFamilia) {
    echo "$nome é da minha família" . PHP_EOL;
}else{
    echo "$nome nao é da minha família". PHP_EOL;
}
 

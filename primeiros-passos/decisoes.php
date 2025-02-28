<?php

$idade = 16;
$numeorDePessoas = 2;

echo "Você só pode entrar se a partir de 18 anos ou ";
echo "a partir de 16 anos acompanhado".PHP_EOL;

if ($idade >= 18){
    echo"Você tem $idade anos Pode entrar sozinho";
}else if( $idade >= 16 && $numeorDePessoas > 1){
    echo " Vocé tem $idade anos, está acompanhado(a), pode entrar";
}
else{
    echo "Você tem $idade anos.Acesso negado";
}


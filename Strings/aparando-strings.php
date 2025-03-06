<?php

$csv = '.,Felippe Nobre,21,.';
echo trim( $csv, ',' ) . PHP_EOL;// trim serve para tirar os espacos em branco da string
echo ltrim( $csv, '.,' ) . PHP_EOL;// ltrim serve para tirar os espacos em branco da esquerda da string
echo rtrim( $csv, '.,') . PHP_EOL;// rtrim serve para tirar os espacos em branco da direita da string
<?php

$string = 'Testes de integração com php';

echo mb_strlen($string) . PHP_EOL; // mb são textos que possuem alguns caracteres que demandam mais de um byte para serem representados
echo mb_strtoupper($string) . PHP_EOL;

$convertida = mb_convert_encoding($string,'ISO-8859-1','UTF-8');
echo $convertida . PHP_EOL;

echo mb_convert_case($string, MB_CASE_TITLE);
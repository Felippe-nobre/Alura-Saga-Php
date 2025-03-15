<?php

$arquivoCursos = new SplFileObject('cursos.csv');

while (!$arquivoCursos->eof()){// enquanto nao chegar ao final do arquivo 
    $linha = $arquivoCursos->fgetcsv(';');// pega a linha e transforma em array usando ; como separador
    echo mb_convert_encoding($linha[0], 'UTF-8', 'Windows-1252') . PHP_EOL; // converte a string para utf-8
}

$date = new DateTime();
$date->setTimestamp($arquivoCursos->getCTime()); // pega a data de quando o arquivo foi criado no sistema

echo $date->format('d/m/Y') . PHP_EOL;
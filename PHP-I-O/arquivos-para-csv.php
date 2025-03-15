<?php

$meusCursos = file('lista-cursos.txt');
$outrosCursos = file('cursos-php.txt');

$arquivoCsv = fopen('cursos.csv', 'w');

foreach ($meusCursos as $curso) {
    $linha = [trim(mb_convert_encoding($curso,"Windows-1252","UTF-8")), 'Sim'];//trim serve para tirar os espacos em branco do inicio e fim da string, mb_convert_encoding serve para converter a string para utf-8

    fputcsv($arquivoCsv, $linha, ';');// função para escrever em csv, ela recebe um arquivo e um array com os dados
}

foreach ($outrosCursos as $curso) {
    $linha = [trim(mb_convert_encoding($curso,"Windows-1252","UTF-8")), 'Não'];

    fputcsv($arquivoCsv, $linha, ';');
}

fclose($arquivoCsv);
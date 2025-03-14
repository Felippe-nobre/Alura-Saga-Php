<?php

// // $tela = fopen('php://stdout', 'w'); // stdout = standard output = saida padrao do console, w = write somente escrita
// $tela = fopen(stderr, 'w');// stderr = standard error = erro padrao do console

// fwrite( $tela,'Ola, Mundo!');

// // print "Ola, Mundo!"; // print serve para escrever na tela

$curso = fopen('zip://arquivos.zip#cursos-php.txt', 'r');
stream_copy_to_stream($curso, STDOUT);
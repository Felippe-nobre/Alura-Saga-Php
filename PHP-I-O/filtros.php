<?php

require 'MeuFiltro.php';

$arquivoCursos = fopen("lista-cursos.txt","r");


stream_filter_register("alura.partes",MeuFiltro::class);
stream_filter_append($arquivoCursos, 'alura.partes'); // stream_filter_append serve para adicionar um filtro ao arquivo, recebe 2 parametros, o primeiro o ponteiro para o arquivo e o segundo o filtro que vai ser adicionado ao arquivo, string.toupper serve para deixar as letras maiusculas

echo fread($arquivoCursos,filesize('lista-cursos.txt'));// fread serve para ler o arquivo, recebe 2 parametros, o primeiro o ponteiro para o arquivo e o segundo o tamanho do arquivo, filesize serve para obter o tamanho do arquivo


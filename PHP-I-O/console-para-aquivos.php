<?php


//$teclado = fopen('php://stdin', 'r'); // stdin = standard input = entrada padrao do console, r = read somente leitura

$novoCurso = trim(fgets(STDIN));

file_put_contents('cursos-php.txt', "\n $novoCurso", FILE_APPEND); // file_put_contents serve para escrever no arquivo, recebe 2 parametros, o primeiro o caminho do arquivo e o segundo o conteudo que vai ser escrito no arquivo, FILE_APPEND serve para adicionar o conteudo ao final do arquivo

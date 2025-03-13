<?php

$arquivo = fopen('lista-cursos.txt', 'r'); // abre o arquivo, retorna um ponteiro para o arquivo, se o arquivo nao existir ele cria um novo. r = read somente leitura
/*

 while (!feof($arquivo)) // feof serve para verificar se o ponteiro chegou ao fim do arquivo
 {
     $curso = fgets($arquivo); // fgets serve para ler o arquivo, retorna uma string com o conteudo do arquivo, se o arquivo nao existir ele cria um novo    
     echo $curso;
 }
 $tamanhoDoArquivo = filesize('lista-cursos.txt'); // filesize serve para verificar o tamanho do arquivo();
 $curso = fread($arquivo,$tamanhoDoArquivo); // fread serve para ler o arquivo, retorna uma string com o conteudo do arquivo
 echo $curso;
 fclose($arquivo); // fecha o arquivo
 $arquivo = file_get_contents('lista-cursos.txt'); // file_get_contents serve para ler o arquivo, retorna uma string com o conteudo do arquivo e vai fechar o arquivo, ela ajuda a nao precisar fechar o arquivo e usa menos memoria
 */
$arquivo = file('lista-cursos.txt'); // file serve para ler o arquivo, retorna um array com o conteudo do arquivo
 var_dump( $arquivo);

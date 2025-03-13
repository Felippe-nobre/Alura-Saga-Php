<?php

//$arquivo = fopen("cursos-php.txt","a+");// w = write somente escrita, utilizado para sobrescrever o arquivo, a = append somente escrita, utilizado para adicionar o conteudo ao arquivo
/*
    
Lista dos possíveis modos de fopen() utilizando mode
mode	Descrição
'r':	Abre somente para leitura; coloca o ponteiro do arquivo no começo do arquivo.
'r+':	Abre para leitura e escrita; coloca o ponteiro do arquivo no começo do arquivo.
'w':	Abre somente para escrita; coloca o ponteiro do arquivo no começo do arquivo e reduz o comprimento do arquivo para zero. Se o arquivo não existir, tenta criá-lo.
'w+':	Abre para leitura e escrita; fora isso, tem o mesmo comportamento de 'w'.
'a':	Abre somente para escrita; coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não existir, tenta criá-lo. Neste modo, fseek() não tem efeito, a escrita é sempre adicionada.
'a+':	Abre para leitura e escrita; coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não existir, tenta criá-lo. Neste modo, fseek() somente afeta a posição de leitura, escrita é sempre adicionada.
'x':	Cria e abre o arquivo somente para escrita; coloca o ponteiro no começo do arquivo. Se o arquivo já existir, a chamada a fopen() falhará, retornando false e gerando um erro de nível E_WARNING. Se o arquivo não existir, tenta criá-lo. Isto é equivalente a especificar as opções O_EXCL|O_CREAT para a chamada de sistema open(2) subjacente.
'x+':	Cria e abre o arquivo para leitura e escrita; fora isso, tem o mesmo comportamento de 'x'.
'c':	Abre o arquivo somente para escrita. Se o arquivo não existir, ele é criado. Se existir, ele não é truncado (ao contrário de 'w') e nem a chamada a esta função falha (como no caso de 'x'). O ponteiro é posicionado no início do arquivo. Isto pode ser útil se for desejado obter uma trava consultiva (consulte flock()) antes de tentar modificar o arquivo, já que usar 'w' poderia trincar o arquivo antes que a trava fosse obtida (se o truncamento for desejado, ftruncate() pode ser usando depois que a trava for requisitada).
'c+':	Abre o arquivo para leitura e escrita; fora isso, tem o mesmo comportamento de 'c'.
'e':	Define a opção close-on-exec no descritor do arquivo aberto. Somente disponível no PHP compilado em sistemas conforme POSIX.1-2008.


*/

$curso = "Design Patterns PHP II: Boas práticas de programação";

//fwrite( $arquivo,$curso,21); // fwrite serve para escrever no arquivo, recebe 2 parametros, o primeiro o ponteiro para o arquivo e o segundo o conteudo do arquivo
// fwrite( $arquivo,$curso);
// fclose($arquivo);

file_put_contents("cursos-php.txt", $curso, FILE_APPEND); // file_put_contents serve para escrever no arquivo, recebe 2 parametros, o primeiro o nome do arquivo e o segundo o conteudo do arquivo , file_append serve para adicionar o conteudo ao arquivo, file_text serve para escrever o conteudo do arquivo como texto
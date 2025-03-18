<?php

var_dump($_FILES['arquivo']);
//is_uploaded_file() serve para verificar se o arquivo foi enviado pelo formulario
var_dump(move_uploaded_file($_FILES['arquivo']['tmp_name'],__DIR__ . '/a.jpg')); //move o arquivo para o caminho desejado

//php -S localhost:80 serve para rodar o servidor localmente, para que o nosso formulario funcione

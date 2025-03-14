<?php

$contexto = stream_context_create([
    'http'=> [
        'method'=> 'POST',
        'header'=> "X-From: PHP\r\nContent-type: text/plain",
        'content'=> 'Teste do corpo da requisicao',
        
    ]
    ]); // stream_context_create serve para criar um contexto de stream, aqui estamos criando um contexto de stream com o metodo POST


echo file_get_contents('http://httpbin.org/post',false, $contexto);
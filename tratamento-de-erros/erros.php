<?php
error_reporting(E_ALL); // E_ALL serve para mostrar todos os erros
ini_set('display_errors', 1); // ini_set serve para mostrar os erros, display_errors serve para mostrar os erros
// ini_set('log_errors',1);//log_errors serve para mostrar os erros no log
//  ini_set('error_log','/var/log/minha-aplicacao');
set_error_handler(function($errno, $errstr, $errfile, $errline) { //set_error_handler usmaos quando queremos tratar os erros e ver o caminho que o script esta percorrendo
    switch ($errno) {
        case E_WARNING:
            echo "Aviso: Isos é perigoso";
            break;
        case E_NOTICE:
            echo "Melhor não fazer isso";
            break;    
    }
});
echo $variavel;
echo $array[12]; // @$ serve para ignorar os erros, mas nunca use em produção, se caso vir ele em algum momento tire ele


echo 'constante';//A constante PHP E_NOTICE se refere a avisos de tempo de execução. Avisos indicam que o script encontrou algo que pode indicar um erro, mas também pode acontecer no curso normal da execução de um script.
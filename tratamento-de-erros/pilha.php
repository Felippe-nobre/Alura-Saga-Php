<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    try{ //try serve para tentar algo e se der erro ele vai para o catch, catch serve para tratar o erro, utilizado para tratamento de erros
     funcao2();
    } catch(Throwable $problema){ //RuntimeException serve para tratar erros de runtime, DivisionByZeroError serve para tratar erros de divisao por zero, podemos passar dois  erros para tratar  o erro de runtime e o erro de divisao por zero isso se chama multi catch, Throwable serve para tratar erros de runtime e de divisao por zero, BadFunctionCallException serve para tratar erros de runtime e de divisao por zero
        echo "Na função 1, eu resolvi o problema da funcao 2". PHP_EOL;
        echo $problema->getMessage() . PHP_EOL; //getMessage serve para pegar a mensagem do erro
        echo $problema->getLine() . PHP_EOL; //getMessage serve para pegar a mensagem do erro, getLine serve para pegar a linha do erro
        //echo $problema->getFile() . PHP_EOL; //getMessage serve para pegar a mensagem do erro, getFile serve para pegar o arquivo do erro
        echo $problema->getTraceAsString() . PHP_EOL;//getTrace serve para pegar o caminho que o script esta percorrendo, getTraceAsString serve para pegar o caminho que o script esta percorrendo em string
        throw new RuntimeException('Execeção foi tratada, mas, pega aí', 1,$problema); //throw serve para lancar um erro , a estrutura abaixo serve para lancar um erro, o primeiro parametro serve para o erro, o segundo parametro serve para o codigo de erro, o terceiro parametro serve para o objeto que vai ser lancado
    }
    
    
    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;
    
   //throw $exception = new RuntimeException();//RuntimeException serve para tratar erros de runtime throw serve para lancar um erro
    // throw new BadMethodCallException('Essa é a mesnagem de exceção', 1);//BadMethodCallException serve para tratar erros de runtime throw serve para lancar um erro
    //throw new BadFunctionCallException('Essa é a mesnagem de exceção', 1);//BadFunctionCallException serve para tratar erros de runtime throw serve para lancar um erro


    echo 'Saindo da função 2' . PHP_EOL;




    // $divisao =intdiv(5,0);
    // $arrayFixo = new SplFixedArray(2); // SplFixedArray serve para criar um array fixo
    // $arrayFixo[3 ] = 'valor';
    // for ($i = 1; $i <= 5; $i++) {
    //     echo $i . PHP_EOL;
    // }
    // var_dump(debug_backtrace());//debug_backtrace serve para ver o caminho que o script esta percorrendo
    // print_r(debug_backtrace());//print_r serve para ver o caminho que o script esta percorrendo
    
}


echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;

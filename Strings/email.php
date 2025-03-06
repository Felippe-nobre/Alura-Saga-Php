<?php 


function geraEmail(string $nome): void
{

    $conteudoEmail = <<<FINAL
        Ola, $nome!
        
        Estamos entrando em contato para
        {motivo do contato}
        
        {assinatura}
    FINAL;
    echo $conteudoEmail;
}

geraEmail('Felippe' );
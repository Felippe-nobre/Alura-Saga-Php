<?php

class MinhaExcecao extends DomainException
{
    public function exibreFelippe()
    {
        echo"Felippe";
    }
}
try{

    throw new MinhaExcecao();
}catch(MinhaExcecao $e) {
    $e ->exibreFelippe();
}

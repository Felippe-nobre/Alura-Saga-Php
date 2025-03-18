<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Autenticavel;

class Gerente extends Funcionario implements Autenticavel //implementsé usado para indicar que uma classe está adotando uma ou mais interfaces, obrigando-a a definir seus métodos.
{
    public function calculaBonificacao(): float
    {
        return $this->recuperaSalario();
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '4321';
    }
}

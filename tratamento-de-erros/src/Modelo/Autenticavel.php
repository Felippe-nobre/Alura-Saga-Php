<?php

namespace Alura\Banco\Modelo;

interface Autenticavel //interfacedefinição de um conjunto de métodos que uma classe deve implementar, garantindo um contrato para sua estrutura.
{
    public function podeAutenticar(string $senha): bool;
}

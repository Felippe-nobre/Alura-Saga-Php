<?php

namespace Alura\Banco\Modelo;

trait AcessoPropriedades //traité um mecanismo para reutilizar código em múltiplas classes, permitindo a inclusão de métodos sem herança múltipla.
{
    public function __get(string $nomeAtributo) //__get($name)é um método mágico chamado quando se tenta acessar uma propriedade inacessível ou inexistente de um objeto.
    {
        $metodo = 'recupera' . ucfirst($nomeAtributo); //ucfirst()é uma função que coloca a primeira letra de uma string em maiúscula, deixando o restante inalterado.

        return $this->$metodo();
    }
    public function __set($nomeAtributo, $value): void{
        $metodo = 'altera' . ucfirst($nomeAtributo);
        $this->$metodo($value);

    }
}
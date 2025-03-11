<?php
namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

class Titular extends Pessoa // extends serve para herdar de outra classe, ou seja, herdar os metodos e propriedades de outra classe
{
    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }
    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }
}

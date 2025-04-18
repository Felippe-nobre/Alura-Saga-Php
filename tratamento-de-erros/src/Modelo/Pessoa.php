<?php

namespace Alura\Banco\Modelo; //namespace serve para criar um namespace, ele vai ser executado automaticamente quando a classe for instanciada


abstract class Pessoa
{
    use AcessoPropriedades;

    protected $nome;//protected serve para proteger a variavel, ele nao pode ser acessada fora da classe'
    private $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    final protected function validaNome(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}

<?php

namespace Alura\Banco\Modelo\Conta;

class Conta
{
    private $titular;// public serve para deixar a variavel publica, temos também private e protected, private serve para deixar a variavel privada, protected serve para deixar a variavel protegida
    private $saldo;
    private static $numeroDeContas = 0;//static serve para deixar a variavel estatica
    private int $tipo;

    public function __construct(Titular $titular, $tipo)  //__construct serve para criar um construtor, ele vai ser executado automaticamente quando a classe for instanciada
    {
        $this->titular = $titular;
        $this->saldo = 0;
        $this->tipo = $tipo;

        self::$numeroDeContas++; //:: serve para chamar uma variavel estatica, self serve para chamar uma variavel estatica
    }

    public function __destruct()//__destruct serve para destruir a classe, ele vai ser executado automaticamente quando a classe for destruida
    {
        self::$numeroDeContas--;
    }

    public function saca(float $valorASacar): void
{
    if ($this->tipo === 1) {
        $tarifaSaque = $valorASacar * 0.05;
    } else {
        $tarifaSaque = $valorASacar * 0.03;
    }

    $valorSaque = $valorASacar + $tarifaSaque;
    if ($valorSaque > $this->saldo) {
        echo "Saldo indisponível";
        return;
    }

    $this->saldo -= $valorSaque;
}
    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }

    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }
}

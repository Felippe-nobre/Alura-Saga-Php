<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta
{
    private  Titular $titular;// public serve para deixar a variavel publica, temos também private e protected, private serve para deixar a variavel privada, protected serve para deixar a variavel protegida
    protected float $saldo;
    private static int $numeroDeContas = 0;//static serve para deixar a variavel estatica

    public function __construct(Titular $titular)//__construct serve para criar um construtor, ele vai ser executado automaticamente quando a classe for instanciada
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;//:: serve para chamar uma variavel estatica, self serve para chamar uma variavel estatica
    }

    public function __destruct()//__destruct serve para destruir a classe, ele vai ser executado automaticamente quando a classe for destruida
    {
        self::$numeroDeContas--;
    }

    public function saca(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            throw new SaldoInsuficienteException($valorSaque, $this->saldo);//throw serve para lancar um erro
        }

        $this->saldo -= $valorSaque;
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            throw new \InvalidArgumentException();
        }

        $this->saldo += $valorADepositar;
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

    abstract protected function percentualTarifa(): float; //abstract serve para deixar uma função abstrata
}

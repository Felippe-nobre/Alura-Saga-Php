<?php

class Conta
{
    private $titular; // public serve para deixar a variavel publica, temos também private e protected, private serve para deixar a variavel privada, protected serve para deixar a variavel protegida
    private float $saldo ;
    private static $numeroDeContas = 0; //static serve para deixar a variavel estatica

    public function __construct(Titular $titular) //__construct serve para criar um construtor, ele vai ser executado automaticamente quando a classe for instanciada
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self :: $numeroDeContas++; //:: serve para chamar uma variavel estatica, self serve para chamar uma variavel estatica
    }

    public function __destruct() //__destruct serve para destruir a classe, ele vai ser executado automaticamente quando a classe for destruida
    {
        self::$numeroDeContas--;
    }    
    public function sacar(float $valorASacar)
    {
        if ($valorASacar > $this -> saldo){ //this serve para chamar a variavel da classe
            echo"Saldo indisponivel" . PHP_EOL;
            return;
        }
        $this -> saldo -= $valorASacar;
        
    }
    public function depositar(float $valorADepositar):void
    {
        if ($valorADepositar < 0){
            echo "Valor precisa ser positivo". PHP_EOL;
            return;
        } 
        $this -> saldo += $valorADepositar;
        
    }
    public function transferir(float $valorATransferir, Conta $contaDestino):void //void serve para nao retornar nada
    {
        if ($valorATransferir > $this -> saldo){
            echo "Saldo indisponivel". PHP_EOL;
            return;
        }
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

   public function recuperaSaldo():float
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
   public static function recuperaNumeroDeContas():int
   {
    return Conta::$numeroDeContas;
   }
   
}



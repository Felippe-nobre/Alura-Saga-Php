<?php
class Titular
{
    private  $cpf;
    
    private   $nome;

    public function __construct(CPF $cpf,string $nome)
    {
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }
    public function recuperaCpf() : string
    {
        return $this->cpf->recuperaNumero();
    }
    public function recuperaNome() : string
    {
        return $this->nome;
    }

    private function validaNomeTitular(string $nomeTitular):void
    {
     if(strlen($nomeTitular) <5){
         echo"O nome precisa ter pelo menos 5 caracteres" . PHP_EOL;
         exit();
     }
    }
}

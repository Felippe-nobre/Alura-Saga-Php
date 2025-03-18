<?php
namespace Alura\Banco\Modelo;
/**
 * Class Endereco
 * @package Alura\Banco\Modelo
 * @property-read string $cidade
 * @property-read string $bairro
 * @property-read string $rua
 * @property-read string $numero
 */
class Endereco
{
    use AcessoPropriedades; // estamos usando a trait dentro da class
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct( $cidade,  $bairro, $rua, $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }
    public function recuperaCidade(): string
    {
        return $this->cidade;
    }
    public function recuperaBairro(): string
    {
        return $this->bairro;
    }
    public function recuperaRua(): string
    {
        return $this->rua;
    }
    public function recuperaNumero(): string
    {
        return $this->numero;
    }
    public function __toString(): string // __toString é um método mágico que define como um objeto deve ser representado como uma string quando usado em contextos de string.
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }
   
    
}

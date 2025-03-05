<?php 

$notas = [
    [
        'aluno' => 'João',
        'nota' => 10
    ],
    [
        'aluno' => 'Maria',
        'nota' => 6
    ],
    [
        'aluno' => 'Pedro',
        'nota' => 9
    ]
];

function ordenaNotas(array $nota1, array $nota2): int 
{
    return $nota2['nota'] <=> $nota1['nota'];
} 
usort($notas, 'ordenaNotas');//usort serve para ordenar o array usando uma funcao callback para comparar os elementos do array 


//sort( $notas ); //sort serve para ordenar o array em ordem crescente 
var_dump( $notas );

<?php

require_once 'vendor/autoload.php';
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;

$pdo = ConnectionCreator::createConnection();

$preparedStatement = $pdo->prepare('DELETE FROM students WHERE id = ?;');//
$preparedStatement->bindValue(1,11, PDO::PARAM_INT);// Aqui estamos pegando o id do aluno que queremos remover, o 4 significa que queremos remover o aluno com o id 4, pdo::PARAM_INT significa que o id eh um inteiro


var_dump($preparedStatement->execute());


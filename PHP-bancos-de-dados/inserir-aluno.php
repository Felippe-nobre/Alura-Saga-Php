<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();

$student = new Student(null,
 'Caike Naboa',
  new \DateTimeImmutable('2002-07-11')
); // Aqui estamos criando um novo aluno, com o nome Felippe Nobre e a data de nascimento 2003-03-11

//$sqlInsert = "INSERT INTO students (name, birth_date) VALUES ('{$student->name()}', '{$student->birthDate()->format('Y-m-d')}');";
// $sqlInsert = "INSERT INTO students (name, birth_date) VALUES (?, ?);";// Aqui estamos criando uma query para inserir um aluno no banco de dados, usando o PDO para evitar sql injection os dois ? serao substituidos pelo nome e data de nascimento do aluno
$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name, :birth_date);";
$statement = $pdo->prepare($sqlInsert);// Aqui estamos preparando a query, usando o PDO para evitar sql injection isso faz com que o PDO prepare a query e evite o sql injection
$statement->bindValue(':name',$student->name());
$statement->bindValue(':birth_date',$student->birthDate()->format("Y-m-d"));
if($statement->execute()){
    echo "Aluno inserido com sucesso" . PHP_EOL;
}

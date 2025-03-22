<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
use Alura\Pdo\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();
$studentRepository = new PdoStudentRepository($connection);

// realizo processos de definição da turma

$connection->beginTransaction();// beginTransaction é uma função do PDO que serve para iniciar uma transação

try {
    $aStudent = new Student(
        null,
        'Danilo Soares',
        new DateTimeImmutable('2000-01-01'),
    );
    $studentRepository->save($aStudent);

    $anotherStudent = new Student(
        null,
        'Lucas Abati',
        new DateTimeImmutable('2000-01-01'),
    );
    $studentRepository->save($anotherStudent);

    $connection->commit();// commit é uma função do PDO que serve para confirmar uma transação
} catch (\PDOException $e) {
    echo $e->getMessage();
    $connection->rollBack();// rollBack é uma função do PDO que serve para cancelar uma transação
}


<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$student = new Student(
    null,
    'Felippe Nobre',
    new \DateTimeImmutable('2003-03-11')
);

echo $student->age();

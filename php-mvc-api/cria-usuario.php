<?php

declare(strict_types=1);

$dbPath = __DIR__ . '/banco.sqlite';
$pdo = new PDO("sqlite:$dbPath");

$email = $argv[1];//argv serve para pegar os argumentos da linha de comando
$password = $argv[2];
$hash = password_hash($password, PASSWORD_ARGON2ID);//password_hash serve para criptografar a senha e o PASSWORD_ARGON2ID serve para criptografar a senha com o algoritmo argon2id

$sql = 'INSERT INTO users (email, password) VALUES (?, ?);';
$statement = $pdo->prepare($sql);
$statement->bindValue(1, $email);
$statement->bindValue(2, $hash);
$statement->execute();


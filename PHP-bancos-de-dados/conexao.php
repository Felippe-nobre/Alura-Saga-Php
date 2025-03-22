<?php

// $caminhoBanco = __DIR__ . '/banco.sqlite';// Aqui estamos pegando o caminho do banco de dados, __DIR__ serve para pegar o caminho do arquivo atual

// // Removendo o banco antigo se existir
// if (file_exists($caminhoBanco)) {
//     unlink($caminhoBanco);
// }

// $pdo = new PDO('sqlite:' . $caminhoBanco);
// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);// Aqui estamos criando uma conexão com o banco de dados, o pdo sigifica PDO e o sqlite significa que estamos usando o banco de dados sqlite
// /*
// Que o PDO é uma abstração para acesso a diversos bancos de dados
// Que, para acessar cada um dos bancos, um driver específico é necessário
// Que os drivers são habilitados através da instalação de extensões no PHP
// Que SQLite é um gerenciador de banco de dados que não precisa de um servidor
// A criar a nossa primeira conexão com um banco de dados
//  */

// $pdo->exec('CREATE TABLE IF NOT EXISTS students (
//     id INTEGER PRIMARY KEY AUTOINCREMENT,
//     name TEXT NOT NULL,
//     birth_date TEXT NOT NULL
// );');

// echo "Banco de dados recriado com sucesso!";


$caminhoBanco = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $caminhoBanco);

echo 'Conectei<br>';

// Criar as tabelas primeiro
$createTableSql = '
    CREATE TABLE IF NOT EXISTS students (
        id INTEGER PRIMARY KEY,
        name TEXT,
        birth_date TEXT
    );

    CREATE TABLE IF NOT EXISTS phones (
        id INTEGER PRIMARY KEY,
        area_code TEXT,
        number TEXT,
        student_id INTEGER,
        FOREIGN KEY(student_id) REFERENCES students(id)
    );
';
$pdo->exec($createTableSql);
echo 'Tabelas criadas<br>';

// Inserir um aluno primeiro, para que student_id 1 exista
$pdo->exec("INSERT INTO students (name, birth_date) VALUES ('João', '2000-01-01');");
echo 'Aluno inserido<br>';

// Agora sim, insere os telefones com student_id 1
$pdo->exec("INSERT INTO phones (area_code, number, student_id) VALUES 
    ('24', '999999999', 1), 
    ('21', '22222222', 1);");
echo 'Telefones inseridos<br>';

exit();


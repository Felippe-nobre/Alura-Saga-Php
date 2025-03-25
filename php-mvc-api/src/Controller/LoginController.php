<?php

declare(strict_types=1);

namespace Alura\Mvc\Controller;

class LoginController implements Controller
{
    private \PDO $pdo;

    public function __construct()
    {
        $dbPath = __DIR__ . '/../../banco.sqlite';
        $this->pdo = new \PDO("sqlite:$dbPath");
    }

    public function processaRequisicao(): void
    {
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, 'password');

        $sql = 'SELECT * FROM users WHERE email = ?';
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $email);
        $statement->execute();

        $userData = $statement->fetch(\PDO::FETCH_ASSOC);
        $correctPassword = password_verify($password, $userData['password'] ?? '');//password_verify serve para verificar se a senha esta correta
        if(password_needs_rehash($userData['password'], PASSWORD_ARGON2ID)){
            $statement = $this->pdo->prepare('UPDATE users SET password = ? WHERE id = ?;');
            $statement->bindValue(1, password_hash($password, PASSWORD_ARGON2ID));
            $statement->bindValue(2,$userData['id']);
            $statement->execute();
        }

        if ($correctPassword) {
            //session_start();//session_start serve para iniciar a sessao do usuario, usamos quando nosso programa tem que ter uma sessao
            $_SESSION['logado'] = true;//$_SESSION serve para armazenar informacoes na sessao do usuario
            header('Location: /');
        } else {
            header('Location: /login?sucesso=0');
        }
        }
}
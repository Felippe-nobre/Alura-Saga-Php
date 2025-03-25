<?php

declare(strict_types=1);

namespace Alura\Mvc\Controller;

class LogoutController implements Controller
{
         public function processaRequisicao(): void
    {
                session_destroy();//session_destroy serve para destruir a sessao do usuario
                header('Location: /login');
    }
}
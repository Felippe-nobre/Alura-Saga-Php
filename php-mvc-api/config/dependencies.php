<?php

$builder = new \DI\ContainerBuilder();
$builder->addDefinitions([
    PDO::class => function (): PDO {
        $dbPath = __DIR__ . '/../banco.sqlite';
        return new PDO("sqlite:$dbPath");
    },
    \League\Plates\Engine::class => function () {
        $templatePath = __DIR__ . '/../views';
        return new League\Plates\Engine($templatePath);
    }
]);

/** @var \Psr\Container\ContainerInterface $container */
$container = $builder->build();

return $container;

// Nesse arquivo você pode configurar as dependências do seu projeto, usamos o DI para injetar as dependências do projeto essas dependências são injetadas no container para serem usadas em toda a aplicação
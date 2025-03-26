<?php

declare(strict_types=1);

namespace Alura\Mvc\Controller;

abstract class ControllerWithHtml implements Controller
{
    private const TEMPLATE_PATH = __DIR__ .'/../../views/';

    public function renderTemplate(string $templateName, array $context = []): string
    {
        extract($context);//extract serve para extrair as chaves do array
        
        ob_start();//ob_start serve para iniciar o buffer de saida
        require_once self::TEMPLATE_PATH . $templateName . '.php';
        return ob_get_clean();//ob_get_clean serve para limpar o buffer de saida
        
    }
}
<?php

namespace App\Controller;

class CoreController{
    private const VIEWS_PATH = '/../resources/views/';
    
    protected function view(string $file, array $args = []): void
    {
        $args['content'] = __DIR__ . self::VIEWS_PATH . $file . '.phtml';
        extract($args);
        require_once __DIR__ . self::VIEWS_PATH . 'layout.phtml';
    }
}
<?php

// Criando Rotas para consultas
function resolve($route) {
    // Pega a requisição passada pelo usuario, no navegador
    $path = $_SERVER['PATH_INFO'] ?? '/';

    $route = '/^'. str_replace('/', '\/', $route) .'$/';

    if(preg_match($route, $path, $params)) {
        return $params;
    }
    return false;
}

// Verifica as rotas do usuário e encaminha para os diretorios seguintes
if (resolve('/admin/?(.*)')) {
    // Arquivo de Rotas, responável pelas rotas de Administração
    require __DIR__ . '/admin/routes.php';
}elseif (resolve('/(.*)')) {
    // Arquivo de Rotas, responável pelas rotas do Site
    require __DIR__ . '/site/routes.php';
}
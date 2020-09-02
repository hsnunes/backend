<?php

// Criando uma funcionalidade de templates
function render($content, $template, array $data = []) {
    $content = __DIR__ . '/../templates/'. $template .'/'. $content . '.tpl.php';
    return include __DIR__ . '/../templates/'. $template . '.tpl.php';
}
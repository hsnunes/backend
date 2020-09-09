<?php

// Função para pegar dados do form pages
function page_get_data($redirectOnError) {
    $title = filter_input(INPUT_POST, 'title');
    $url = filter_input(INPUT_POST, 'url');
    $body = filter_input(INPUT_POST, 'body');

    if ( is_null($title) or is_null($url)) {
        flash('Preencha os campos Title e Url, são obrigatórios', 'error');
        header('location: '.$redirectOnError);
        die();
    }

    return compact('title', 'url', 'body');
}


$pages_all = function () use ($conn) {
    $result = $conn->query("SELECT * FROM pages");
    return $result->fetch_all(MYSQLI_ASSOC);
};
$pages_one = function ($id) {
    // Gerencia de paginas
};

$pages_create = function () use ($conn) {
    $data = page_get_data('/admin/pages/create');

    $sql = "INSERT INTO pages (title, url, body, created, updated) VALUES (?, ?, ?, now(), now())";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sss', $data['title'], $data['url'], $data['body']);

    flash('Criou registro com sucesso', 'success');

    return $stmt->execute();
};

$pages_edit = function ($id) {
    // Gerencia de paginas
    flash('Atualizou registro com sucesso', 'success');
};

$pages_delete = function ($id) {
    // Gerencia de paginas
    flash('Exclusão registro com sucesso', 'success');
};
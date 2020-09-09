<?php

$pages_all = function () use ($conn) {
    $result = $conn->query("SELECT * FROM pages");
    return $result->fetch_all(MYSQLI_ASSOC);
};
$pages_one = function ($id) {
    // Gerencia de paginas
};

$pages_create = function () {
    flash('Criou registro com sucesso', 'success');
};

$pages_edit = function ($id) {
    // Gerencia de paginas
    flash('Atualizou registro com sucesso', 'success');
};

$pages_delete = function ($id) {
    // Gerencia de paginas
    flash('Exclusão registro com sucesso', 'success');
};
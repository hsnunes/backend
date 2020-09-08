<?php

require __DIR__ . '/db.php';

if (resolve('/admin/pages/?')) {
    $pages = $pages_all();
    render('pages/index', 'admin', ['pages' => $pages]);

}elseif (resolve('/admin/pages/create')) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $pages_create();
        return header('location: /admin/pages');
    }
    render('pages/create', 'admin');

}elseif ($params = resolve('/admin/pages/(\d+)')) {
    $page = $pages_one($params[1]);
    render('pages/view', 'admin', ['page' => $page]);

}elseif ($params = resolve('/admin/pages/(\d+)/edit')) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $pages_edit($params[1]);
        return header('location: /admin/pages/'. $params[1]);
    }
    render('pages/edit', 'admin');
}elseif ($params = resolve('/admin/pages/(\d+)/delete')) {
    $pages_delete($params[1]);
    return header('location: /admin/pages');
}
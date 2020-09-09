<?php

$users_all = function () use ($conn) {
    $result = $conn->query("SELECT * FROM users");
    return $result->fetch_all(MYSQLI_ASSOC);
};

$user_one = function () use ($conn) {
    $sql = "SELECT * FROM users WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();

    $result = $stmt->get_result();
    return $result->fetch_assoc();
};

$users_create = function () use ($conn) {
    $data = user_get_data('/admin/user/create');

    $sql = "INSERT INTO user (email, login, password, created, )";
};

$users_edit = function () use ($conn) {

};

$users_delete = function () use ($conn) {};
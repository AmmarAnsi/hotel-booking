<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') :

    require_once(__DIR__ . '\\..\\boot.php');

    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $result = $q->where(
        'users',
        " where `email` = '{$email}' and `password` = '{$password}'"
    );

    if (count($result) == 1) {
        // session_destroy();
        $_SESSION['user_id'] = $result[0]->id;
        $_SESSION['name'] = $result[0]->name;
        $_SESSION['email'] = $result[0]->email;
        $_SESSION['is_admin'] = $result[0]->is_admin;
        return header('Location: index.php');
        exit();
    }
// return back to previous page

endif;



<?php

require_once (__DIR__ . '\\boot.php');

function dd($var) {
    var_dump($var);die;
}

function checkIfServiceBooked(int $service_id) {
    global $q;
    $result = $q->where('bookings', ' where `is_active` = 1 and `service_id` = \'' . $service_id . '\'' );
    return count($result) > 0;
}

function checkIfAdmin() {
    global $q;
    $email = $_SESSION['email'] ?? '';
    $result = $q->where('users', ' where is_admin = 1 and `email` = \'' . $email . '\'' );
    return count($result) == 1;
}

function getAdminName() {
    global $q;
    $email = $_SESSION['email'] ?? '';
    $result = $q->where('users', ' where is_admin = 1 and `email` = \'' . $email . '\'' );
    if (count ($result) == 1) {
        echo $result[0]->name;
    }
}

function getUserName($id) {
    global $q;
    $result = $q->where('users', ' where `id` = \'' . $id . '\'' );
    return $result[0]->name;
}

function getServiceName($id) {
    global $q;
    $result = $q->where('services', ' where `id` = \'' . $id . '\'' );
    return $result[0]->name;
}

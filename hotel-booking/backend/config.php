<?php

return [
    'database' => [
        'name' => 'hotel_booking',
        'username' => 'root',
        'password' => '',
        'connection' => 'mysql:host=127.0.0.1;port=3306',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        ],
    ],
];
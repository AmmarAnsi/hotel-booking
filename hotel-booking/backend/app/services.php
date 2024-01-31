<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once (__DIR__ . '\\..\\Boot.php');

$services = $q->all('services');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['service_id'])) :
    $q->insert('bookings', [
        'user_id' => $_SESSION['user_id'],
        'service_id' => $_POST['service_id']
    ]);
endif;
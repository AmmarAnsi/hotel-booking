<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once (__DIR__ . '\\..\\Boot.php');

$bookings = $q->all('bookings');
<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
    ob_clean();
}
include_once ('backend/functions.php');
?>
<!DOCTYPE html>
<html lang="ar">

    <?php include_once ('frontend/parts/head.php') ?>

<body>
    <?php include_once ('frontend/parts/header.php') ?>


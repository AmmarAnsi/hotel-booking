<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if(isset($_POST['email']) && !empty($_POST['email'])):
    require_once (__DIR__ . '\\..\\Boot.php');

    $q->insert('newsletter', ['email' => $_POST['email']]);

    $_SESSION['email_added'] = 'تم الاشتراك بنجاح'; 
    // return back to previous page
    return header('Location: ' . $_SERVER['HTTP_REFERER']);
else:
    $_SESSION['email_added'] = 'يرجى ادخال البريد الالكتروني'; 
    return header('Location: ' . $_SERVER['HTTP_REFERER']);
endif;
 
    



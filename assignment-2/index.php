<?php
    session_start();

    if (isset($_SESSION['user'])) {
        //if login success, load success page
        header("Location: pages/success.php"); 
        exit();
    } 
    else {
        // if no account, let user register
        header("Location: pages/register.php"); 
        exit();
    }
?>


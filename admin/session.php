<?php
    session_start();
    if($_SESSION['login'] ==false) {
        header('Location: ../admin/login.php');
    }
?>
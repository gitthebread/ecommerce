<?php
    session_start();
    unset($_SESSION['username']);
    unset($_SESSION['role']);
    unset($_SESSION['firstName']);
    unset($_SESSION['lastName']);
    header("Location: ../../index.php");
?>
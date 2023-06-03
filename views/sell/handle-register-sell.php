<?php
    session_start();
    include_once "../../controllers/shopController.php";
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    
    $controller = new shopController();
    $controller->register($_SESSION['username'], $name, $phone, $address, $email);
?>
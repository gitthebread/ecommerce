<?php
    session_start();
    include_once "../../controllers/shopController.php";
    $controller = new shopController();
    $controller->checkExisted($_SESSION['username']);
?>
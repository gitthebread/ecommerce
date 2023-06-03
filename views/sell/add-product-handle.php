<?php
    session_start();
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $img = $_POST['img'];
    $id_category = $_POST['id_category'];
    $id_type = $_POST['id_type'];
    $size = $_POST['size'];
    $desc = $_POST['desc'];

    include_once "../../controllers/productController.php";
    $controller = new productController();
    $controller->addProduct_sell($_SESSION['username'], $name, $price, $quantity, $img, $id_category, $id_type, $size, $desc);
?>
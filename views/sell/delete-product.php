<?php
    include_once "../../controllers/productController.php";

    $controller = new productController();
    $controller->deleteProduct_sell($_GET['id'])
?>
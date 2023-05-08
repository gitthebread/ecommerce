<?php
if (!function_exists('currency_format')) {
    function currency_format($number, $suffix = 'đ')
    {
        if (!empty($number)) {
            return number_format($number, 0, ',', '.') . "{$suffix}";
        }
    }
}
if (!function_exists('color_format')) {
    function color_format($color)
    {
        $colorHex = "";
        $arraycolor = array(
            "blue" => "C6E9EC",
            "white" => "FFFFFF",
            "pink" => "FB6E7C",
            "orange" => "F3A45F",
            "yellow" => "F4ED95",
            "red" => "EC3333",
            "black" => "212529",
            "brown" => "C4B095",
            "green" => "98A882",
            "gray" => "A8A9AD",
        );
        while ($element = current($arraycolor)) {
            if (key($arraycolor) == $color) {
                $colorHex = $arraycolor[key($arraycolor)];
            }
            next($arraycolor);
        }
        return $colorHex;
    }
}
$products = NULL;
$limit = 4;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kênh người bán</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e50213ec74.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./styles/header.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../../style.css">
    <script src="https://kit.fontawesome.com/a76b54ad15.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/smoothness/jquery-ui.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


</head>

<body>
    <?php session_start(); ?>
    <div id="container">
        <header>
            <?php include_once "../../components/header_sell.php" ?>
        </header>
        <div>
            <div id="dssp" style="">
                <div style="padding: 20px">
                    <h1 id="title"><strong></strong>Danh sách sản phẩm</h1>
                    <a id="view-detail" href="./product.php">Xem tất cả</a>
                </div>
                <div>
                    <?php
                        include_once "../../controllers/productController.php";
                        $controller = new ProductController();
                        $controller->getAllProductByLimit_Sell($_SESSION['username'], 4 , 0);
                    ?>
                </div>
            </div>
            <br>
            <div id="dssp" style="">
                <div style="padding: 20px">
                    <h1 id="title"><strong></strong>Danh sách đơn hàng</h1>
                    <a id="view-detail" href="./bill.php">Xem tất cả</a>
                </div>
                <div>
                    <?php
                        include_once "../../controllers/bill_billDetailController.php";
                        $controller = new bill_billDetailController();
                        $controller->getAllByLimit($_SESSION['username'], 0 , 4);
                    ?>
                </div>
            </div>
            
            <?php  
                include_once "../../controllers/billController.php";
                $controller = new billController();
                echo
                "<p id='revenue'><strong>Doanh thu cửa hàng:   </strong>".number_format($controller->getRevenue($_SESSION['username']))." đ</p>"
            ?>
                    
            
        </div>
    </div>
</body>

</html>
<style>
    #title {
        font-size: 25px;
        display: inline-block;
    }

    #view-detail {
        font-size: 15px;
        border: 1px solid #212A3E;
        padding: 10px;
        border-radius: 20px;
        margin-left: 20px;
    }
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
    }
    #revenue
    {
        font-size: 30px;
        margin-top: 20px;
        margin-left: 20px;  
    }
</style>
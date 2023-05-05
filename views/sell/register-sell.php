<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a76b54ad15.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./styles/content.css">
    <link rel="stylesheet" href="../../style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/smoothness/jquery-ui.css">
</head>

<body>
<?php session_start(); ?>
    <div class="container">
    <header>
        <?php include_once "../../components/header.php"?>
    </header>
        <div class="content">
        <form id="form-dk" action="xulydangnhap.php" method="post">
                <h1 style="text-align:center; padding-top: 20px;">Đăng ký cửa hàng</h1>
                <div class="form-group">
                    <label for="name">Tên cửa hàng: </label><br>
                    <input type="text" id="name" name="name" placeholder="Nhập tên cửa hàng vào đây">
                </div>
                <div class="form-group">
                    <label for="sdt">Số điện thoại cửa hàng: </label><br>
                    <input type="text" id="sdt" name="sdt" placeholder="Nhập số điện thoại vào đây ">
                </div>
                <div class="form-group">
                    <label for="address">Địa chỉ cửa hàng: </label><br>
                    <input type="text" id="address" name="address" placeholder="Nhập địa chỉ vào đây ">
                </div>
                <div class="form-group">
                    <label for="email">Email cửa hàng: </label><br>
                    <input type="text" id="email" name="email" placeholder="Nhập email vào đây ">
                </div>
                <div class="form-group">
                    <input id="dk_sell" type="submit" Value="Đăng ký">
                </div>
                
            </form>
        </div>
    <footer>
        <?php
            include_once "../../components/footer.php";
        ?>
    </footer>
    </div>
</body>

</html>
<style>
    #form-dk
    {
        background-color: white;
        margin: 50px auto;
        margin-left: 30%;
        margin-right: 30%;
        font-size: 20px;
        background-color: #F0F0F0;
        border: 1px solid #212A3E
    }
    #form-dk .form-group
    {
        margin-left: 20px;
        margin-top: 30px;
    }
    #form-dk .form-group input
    {
        border: none;
        background-color: lightgrey;
        width: 90%;
        padding: 12px 20px;
    }
    #form-dk .form-group input:focus
    {
        background-color: #E8B972;
    }
    #dk_sell
    {
        background-color: #D5A01C !important;
        width: 50% !important;
        margin-left: 20%;
    }
</style>
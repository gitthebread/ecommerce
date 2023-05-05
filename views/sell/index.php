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
            <?php include_once "../../components/header.php" ?>
        </header>

        <div class="content" style="margin-top: 100px">
            <div class='row' style="text-align: center">
                <div class='col-md-6 col-12' style="margin-top: 60px">
                    <h1 style="font-size: 55px"><strong>Trở thành người bán hàng trên trang web chúng tôi</strong></h1>
                    <a href="./register-sell.php"><button id="btn_register" type="button">Đăng ký</button></a>
                    
                </div>
                <div class='col-md-6 col-12'>
                    <img id='img_sell' src='../../src/img/Sell/index_page.png' alt=''>
                </div>
                
            </div>
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
.content
{
    margin-top: 50px
}
#btn_register
{
    font-size: 30px;
    text-align: center;
    margin-top: 35px;
    background-color: #F97B22;
    color: #F6F1F1;
    padding: 20px;
    border: none;
}
#img_sell
{
    width: 500px;
    height: 500px;
}
</style>
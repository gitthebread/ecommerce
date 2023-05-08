<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>

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
    <div id="container">
        <header>
            <?php include_once "../../components/header_sell.php" ?>
        </header>
        <div>
        <div id='content'>
        <?php 
            include_once "../../controllers/productController.php";
            $controller = new productController();
            $controller->getProductById_sell($_GET['id']);
        ?>
        </div>
        </div>
    </div>
</body>
</body>

</html>
<style>
    #content
    {
        margin-top: 20px;
    }
    #title {
        border: 1px solid #393646;
        display: inline-block;
        margin-left: 35%;
        margin-top: 20px;
        padding: 20px;
        border-radius: 30px;
        background-color: #FFA559;
    }
    #content_ctsp
    {
        line-height: 60px;
    }
    #img_ctsp
    {
        height: 500px;
        max-width: 100%;
    }
    #name_ctsp
    {
        font-size: 40px;
    }
    #price_ctsp
    {
        font-size: 25px;
    }
    #category_ctsp
    {
        font-size: 25px;
    }
    #type_ctsp
    {
        font-size: 25px;
    }
    #size_ctsp
    {
        font-size: 25px;
    }
    #quantity_ctsp
    {
        font-size: 25px;
    }
    #mota_ctsp
    {
        font-size: 25px;
    }
    #btn_ctsp
    {
        background-color: orange;
        color: white;
        font-size: 25px;
        width: 200px;
    }
</style>
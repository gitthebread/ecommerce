<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>

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
    <?php 
        session_start();
        include_once "../../controllers/categoryProductController.php";
        include_once "../../controllers/typeController.php";
        $categoryController = new CategoryProductController();
        $typeController = new TypeController();
        $categoryMaxID = $categoryController->getMaxID();
        $typeMaxID = $typeController->getMaxID();
    ?>
    <div id="container">
        <header>
            <?php include_once "../../components/header_sell.php" ?>
        </header>
        <div id='content'>
            <form id="themsp" action="add-product-handle.php" method="post">
                <h1 style='text-align: center; font-size: 35px'>Thêm sản phẩm vào cửa hàng</h1>
                <div id='error_them'>
                <?php 
                    if(isset($error))
                    {
                        echo $error;
                    }
                ?>
                </div>
                <div class='form-group'>
                    <label for='name'>Tên sản phẩm:</label>
                    <input type='text' id='name' name='name'>
                </div>
                <div class='form-group'>
                    <label for='price'>Giá sản phẩm:</label>
                    <input type='text' id='price' name='price' >
                </div>
                <div class='form-group'>
                    <label for='quantity'>Số lượng sản phẩm:</label>
                    <input type='text' id='quantity' name='quantity'>
                </div>
                <div class='form-group'>
                    <label for='img'>Hình ảnh: </label>
                    <input type='text' id='img' name='img' maxlength='1000'>
                </div>
                <div class='form-group'>
                    <label for='id_category'>Id thể loại: </label>
                    <input type='number' min='1' max='<?php echo $categoryMaxID; ?>' id='id_category' name='id_category'>
                </div>
                <div class='form-group'>
                    <label for='id_type'>Id type: </label>
                    <input type='number' min='0' max = '<?php echo $typeMaxID ?>' id='id_type' name='id_type' >
                </div>
                <div class='form-group'>
                    <label for='size'>Size: </label>
                    <select id='size' name='size' class='form-control form-control-lg select' style='height: 50px; width: 90%; font-size: 20px;'>
                        <option value='1' >Thường</option>
                        <option value='2' >Đặc biệt</option>
                        <option value='3' >Thường, đặc biệt</option>
                    </select>
                </div>
                <div class='form-group'>
                    <label for='desc'>Mô tả:</label><br>
                    <textarea id='desc' name='desc' rows='4' cols='55'>
                    </textarea>
                </div>
                <div class="form-group">
                    <input id="submit-them" type="submit" Value="Thêm sản phẩm" name="action">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
<style>
    #error_them
    {
        color: red;
        background-color: yellow;
        width: 100%;
        margin-top: 10px;
        padding-left: 10px;
    }
    #themsp
    {
        margin: 50px auto;
        margin-left: 20%;
        margin-right: 30%;
        font-size: 20px;
        border-radius: 20px;
    }
    .form-group input
    {
        border: none;
        background-color: lightgrey;
        width: 90%;
        padding: 12px 20px;
    }
    .form-group
    {
        margin-left: 20px;
        margin-top: 30px;
    }
    .form-group input:focus
    {
        background-color: #E8B972;
    }
    #submit-them
    {
        background-color: #D5A01C ;
        width: 50% ;
        margin-left: 20%;
        margin-bottom: 30px;
    }
</style>
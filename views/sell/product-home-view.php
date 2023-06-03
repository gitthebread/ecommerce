<?php
    if(count($data) != 0)
    {
    echo
    "
        <table style='font-size: 20px; margin-top: 10px;'>
            <tr>
                <th style='text-align: center; '>Id</th>
                <th style='text-align: center; '>Hình</th> 
                <th style='text-align: center; '>Tên sản phẩm</th>
                <th style='text-align: center; '>Số lượng</th>
                <th style='text-align: center; '></th> 
            </tr>
    ";
    foreach($data as $Product)
    {
        echo
        "
            <tr>
            <td style='text-align: center; width: 50px;'>".$Product->getId()."</td>
            <td style='text-align:center; width: 200px;'><img src='".$Product->getImage01()."' style='width: 200px;height: 150px'></td>
            <td style='text-align: center; width: 400px;'>".$Product->getName()."</td>
            <td style='text-align: center; width: 200px;'>".$Product->getQuantity()."</td>
            <td style='text-align: center; width: 200px;'>
                <a style = 'color: black' href='./product-detail.php?id=".$Product->getId()."'><button>Xem chi tiết</button></a><br>
                <a style = 'color: black' href='./update-product.php?id=".$Product->getId()."'><button>Sửa</button></a><br>
                <a style='color:red'data-toggle='modal' data-target='#mymodal".$Product->getId()."'><button>Xóa</button></a>
            </td>
            </tr>
        ";
    }
    foreach($data as $product)
    {
        echo 
        "
        <div id='mymodal".$product->getId()."' class='modal' style='margin-top: 10%'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h3>Bạn có chắc là muốn xóa sản phẩm ".$product->getName()." không ?</h3>
                        <button type='button' class='close' data-dismiss='modal'>&times;</button>
                    </div>  
                                
                    <div style='padding-bottom: 20px; padding-top: 20px;'>
                        <a href='./delete-product.php?id=".$product->getId()."' type='button' id='thanhtoan' class='btn-primary' style='margin-left: 10%; font-size: 20px; width: 30%; text-align: center;'>Có</a>
                        <button type='button' class='btn-primary' data-dismiss='modal' style='margin-left: 20%; font-size: 20px; width: 30%'>Không</button>
                    </div>
                </div>
            </div>
        </div>
        ";
    }
    echo "</table>";
    }
    else 
    {
        echo "<p style = 'font-size: 25px'>Chưa có sản phẩm nào</p>";
    }
?>
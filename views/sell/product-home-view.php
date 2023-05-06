<?php
    echo
    "
        <table style='font-size: 20px; margin-top: 10px;'>
            <tr>
                <th style='text-align: center; '>Id</th>
                <th style='text-align: center; '>Hình</th> 
                <th style='text-align: center; '>Tên sản phẩm</th>
                <th style='text-align: center; '>Giá</th>
                <th style='text-align: center; '></th> 
            </tr>
    ";
    foreach($data as $Product)
    {
        echo
        "
            <tr>
            <td style='text-align: center; width: 50px;'>".$Product->getId()."</td>
            <td><img src='".$Product->getImage01()."' style='width: 200px;'></td>
            <td style='text-align: center; width: 400px;'>".$Product->getName()."</td>
            <td style='text-align: center; width: 200px;'>".number_format($Product->getPrice())."</td>
            </tr>
        ";
    }
    echo "</table>";
?>
<?php
    if($data != null)
    {
    echo
    "
        <table style='font-size: 20px; margin-top: 10px;'>
            <tr>
                <th style='text-align: center; '>Tên sách</th>
                <th style='text-align: center; '>Hình ảnh</th>
                <th style='text-align: center; '>Số lượng</th> 
                <th style='text-align: center; '>Loại sách</th>
                <th style='text-align: center; '>Khách hàng</th>
            </tr>
    ";
    foreach($data as $item)
    {
        echo
        "
            <tr>
            <td style='text-align: center; width: 400px;'>".$item->name_product."</td>
            <td style='text-align:center;'><img src='".$item->image."' style='width: 200px; height: 150px'></td>
            <td style='text-align: center; width: 50px;'>".$item->quantity."</td>
            <td style='text-align: center; width: 200px;'>".$item->size."</td>
            <td style='text-align: center; width: 200px;'><a href='./cusInfo.php?id_bill=".$item->id_bill."'>".$item->cus_lastName."</a></td>
            </tr>
        ";
    }
    echo "</table>";
    }   
    else
    {
        echo "<p style = 'font-size: 25px'>Chưa có đơn hàng nào</p>";
    }
?>
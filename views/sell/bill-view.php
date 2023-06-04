<?php
    ob_start();
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

    echo "
    <div style='display: inline-flex; background-color: #A3A2A0; font-size: 20px; margin-left: 45%; margin-top: 10px;'>
    Page: ";
    for($i = 1; $i <= $total; $i++)
    {
        echo
        "
            <a style='color: black; margin-left: 5px;' href='./bill.php?page=".$i."'>$i</a>|
        ";
    }
    echo "</div>";
    }
    else
    {
        echo "<p style = 'font-size: 25px; padding-left: 2rem;'>Chưa có đơn hàng nào</p>";
    }
?>
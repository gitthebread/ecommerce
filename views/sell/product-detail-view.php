<!DOCTYPE html>
<html lang="en">

<body>
    <?php
    echo
    "
        <div class='row'>
            <div class='col-md-6 col-12'>
                <img id='img_ctsp' src='".$data->getImage01()."' alt=''>
            </div>
            <div class='col-md-6 col-12'>
                <h1><strong>Chi tiết sản phẩm</strong></h1>
                <p id='name_ctsp'>".$data->getName()."</p>
                <p id='price_ctsp'>Giá: ".number_format($data->getPrice())." VNĐ</p>
                <p id='category_ctsp'>Thể loại: ".$this->category_model->getNameById($data->getCategoryId())."</p>
                <p id='type_ctsp'>Độ tuổi: ".$this->type_model->getNameById($data->getType())."</p>
                <p id='size_ctsp'>Size: ".$data->getSize()."</p>
                <p id='quantity_ctsp'>Số lượng: ".$data->getQuantity()."</p>
                <a href='./update-product.php?id=".$data->getId()."'><button id='btn_ctsp'>Sửa</button></a> <br><br>
                <a type='button' data-toggle='modal' data-target='#mymodal".$data->getId()."'><button id='btn_ctsp'>Xóa</button></a>
            </div>
            <div class='col-md-12 col-12'>
                <h1><strong>Mô tả sản phẩm</strong></h1>
                <p id='mota_ctsp'>".$data->getDescription()."</p>
            </div>
        </div>
    ";
    echo 
        "
        <div id='mymodal".$data->getId()."' class='modal' style='margin-top: 10%'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h3>Bạn có chắc là muốn xóa sản phẩm ".$data->getName()." không ?</h3>
                        <button type='button' class='close' data-dismiss='modal'>&times;</button>
                    </div>  
                                
                    <div style='padding-bottom: 20px; padding-top: 20px;'>
                        <a href='./delete-product.php?id=".$data->getId()."' type='button' id='thanhtoan' class='btn-primary' style='margin-left: 10%; font-size: 20px; width: 30%; text-align: center;'>Có</a>
                        <button type='button' class='btn-primary' data-dismiss='modal' style='margin-left: 20%; font-size: 20px; width: 30%'>Không</button>
                    </div>
                </div>
            </div>
        </div>
        ";
    ?>
</body>
</html>
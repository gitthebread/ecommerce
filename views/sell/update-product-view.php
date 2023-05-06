<!DOCTYPE html>
<html lang="en">
<body>
    <?php
    echo
    "
        <form id='suasp' action='update-product-handle.php' method='post'>
            <div class='form-group'>
                <label for='id'>Id sản phẩm:</label>
                <input type='text'  value='".$data->getId()."' disabled>
                <input type='text' name='id' value='".$data->getId()."' style='display: none'>
            </div>
            <div class='form-group'>
                <label for='name'>Tên sản phẩm:</label>
                <input type='text' id='name' name='name' value='".$data->getName()."'>
            </div>
            <div class='form-group'>
                <label for='price'>Giá sản phẩm:</label>
                <input type='text' id='price' name='price' value='".$data->getPrice()."'>
            </div>
            <div class='form-group'>
                <label for='quantity'>Số lượng sản phẩm:</label>
                <input type='text' id='quantity' name='quantity' value='".$data->getQuantity()."'>
            </div>
            <div class='form-group'>
                <label for='img'>Hình ảnh: </label>
                <input type='text' id='img' name='img' maxlength='1000' value='".$data->getImage01()."'>
            </div>
            <div class='form-group'>
                <label for='id_category'>Id thể loại: </label>
                <input type='number' min='1' max = '".$this->category_model->getMaxID()."' id='id_category' name='id_category' value='".$data->getCategoryId()."'>
            </div>
            <div class='form-group'>
                <label for='id_type'>Id type: </label>
                <input type='number' min='0' max = '".$this->type_model->getMaxID()."' id='id_type' name='id_type' value='".$data->getType()."'>
            </div>
            <div class='form-group'>
                <label for='size'>Thời gian: </label>
                <select id='size' name='size' class='form-control form-control-lg select' style='height: 50px; width: 90%; font-size: 20px;'>
                    <option value='1' $select1 >Thường</option>
                    <option value='2' $select2 >Đặc biệt</option>
                    <option value='3' $select3 >Thường, đặc biệt</option>
                </select>
            </div>
            <div class='form-group'>
                <label for='desc'>Mô tả:</label><br>
                <textarea id='desc' name='desc' rows='4' cols='55'>
                ".$data->getDescription()."
                </textarea>
            </div>
            <div class='form-group'>
                <input id='submit-sua' type='submit' Value='Sửa sản phẩm' name='action'>
            </div>
        </form>
    ";
    ?>
</body>
</html>
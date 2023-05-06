<?php 
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath. '/../modules/db_module.php');
    include_once ($filepath. '/./product.php');
    include_once ($filepath. '/../validate_module.php');
    
    class ProductModel {
        public function getAllProduct() {
            $result = NULL;
            $link = NULL;
            taoKetNoi($link);
            $data = array();
            $query = "SELECT * from products WHERE `status` = 1";
            $result = chayTruyVanTraVeDL($link, $query);
            if(mysqli_num_rows($result) > 0) {
                while($rows = mysqli_fetch_assoc($result)) {
                    $product = new Product($rows["id"], $rows["name"], 
                    $rows["color"], $rows["size"], $rows["price"], $rows["quantity"], 
                    $rows["type"], $rows["description"], $rows["category_id"], $rows["image01"], 
                    $rows["image02"], $rows["status"]);
                    array_push($data, $product);
                }
                giaiPhongBoNho($link, $result);
            }else{
                $data = NULL;
            }
            return $data;
        }

        public function getAllProductByLimit($limit, $offset) {
            $result = NULL;
            $link = NULL;
            taoKetNoi($link);
            $data = array();
            $query = "SELECT * from products ORDER BY `id` ASC limit $limit OFFSET $offset";
            $result = chayTruyVanTraVeDL($link, $query);
            if(mysqli_num_rows($result) > 0) {
                while($rows = mysqli_fetch_assoc($result)) {
                    $product = new Product($rows["id"], $rows["name"], $rows["color"], $rows["size"], $rows["price"], $rows["quantity"], $rows["type"], $rows["description"], $rows["category_id"], $rows["image01"], $rows["image02"], $rows["status"]);
                    array_push($data, $product);
                }
                giaiPhongBoNho($link, $result);
            }else{
                $data = NULL;
            }
            return $data;
        }
        public function setProduct($name, $color, $size, $price, $quantity, $type, $description, $categoryId, $image01, $image02) {
            $result = NULL;
            $link = NULL;
            taoKetNoi($link);
            if(existsNameProduct($link, $name)) {
                giaiPhongBoNho($link, true);
                $result = false;
            }else {
                $query = "INSERT INTO `products` (`name`, `color`, `size`, `price`, `quantity`, `type`, `description`, `category_id`, `image01`, `image02`, `status`) VALUES ('$name', '$color', '$size', '$price', '$quantity', '$type', '$description', '$categoryId', '$image01', '$image02', 1)";
                $setuser = chayTruyVanKhongTraVeDL($link, $query);
                if($setuser) {
                    $result = true;
                }
            }
            return $result;
        }  

        public function getProductByType($type) {
            $result = NULL;
            $link = NULL;
            taoKetNoi($link);
            $data = array();
            $query = "SELECT * from products WHERE `type` = $type";
            $result = chayTruyVanTraVeDL($link, $query);
            if(mysqli_num_rows($result) > 0) {
                while($rows = mysqli_fetch_assoc($result)) {
                    $product = new Product($rows["id"], $rows["name"], $rows["color"], $rows["size"], $rows["price"], $rows["quantity"], $rows["type"], $rows["description"], $rows["category_id"], $rows["image01"], $rows["image02"], $rows["status"]);
                    array_push($data, $product);
                }
                giaiPhongBoNho($link, $result);
            }else{
                $data = NULL;
            }
            return $data;
        } 

        public function getProductByTypeLimit($type, $limit, $offset) {
            $result = NULL;
            $link = NULL;
            taoKetNoi($link);
            $data = array();
            $query = "SELECT * from products WHERE `type` = '$type' ORDER BY `id` ASC limit $limit OFFSET $offset";
            $result = chayTruyVanTraVeDL($link, $query);
            if(mysqli_num_rows($result) > 0) {
                while($rows = mysqli_fetch_assoc($result)) {
                    $product = new Product($rows["id"], $rows["name"], $rows["color"], $rows["size"], $rows["price"], $rows["quantity"], $rows["type"], $rows["description"], $rows["category_id"], $rows["image01"], $rows["image02"], $rows["status"]);
                    array_push($data, $product);
                }
                giaiPhongBoNho($link, $result);
            }else{
                $data = NULL;
            }
            return $data;
        } 

        public function getProductByName($searchstr){
            $result = null;
            $link = null;
            taoKetNoi($link);
            $data = array();
            $query = "SELECT * FROM products WHERE `name` LIKE '%$searchstr%'";
            $result = chayTruyVanTraVeDL($link, $query);
            if (mysqli_num_rows($result) > 0){
                while ($rows = mysqli_fetch_assoc($result)){
                    $product = new Product($rows["id"], $rows["name"], $rows["color"], 
                    $rows["size"], $rows["price"], $rows["quantity"], $rows["type"], 
                    $rows["description"], $rows["category_id"], $rows["image01"], 
                    $rows["image02"], $rows["status"]);
                    array_push($data, $product);
                }
                giaiPhongBoNho($link, $result);
            }
            else {
                $data = null;
            }
            return $data;
        }

        public function getProductByNameProduct($name){
            $result = null;
            $link = null;
            taoKetNoi($link);
            $data = array();
            $query = "SELECT * FROM products WHERE `name` = '$name'";
            $result = chayTruyVanTraVeDL($link, $query);
            if (mysqli_num_rows($result) > 0){
                while ($rows = mysqli_fetch_assoc($result)){
                    $product = new Product($rows["id"], $rows["name"], $rows["color"], 
                    $rows["size"], $rows["price"], $rows["quantity"], $rows["type"], 
                    $rows["description"], $rows["category_id"], $rows["image01"], 
                    $rows["image02"], $rows["status"]);
                    array_push($data, $product);
                }
                giaiPhongBoNho($link, $result);
            }
            else {
                $data = null;
            }
            return $data;
        }

        public function updateQuantity($quantity, $name) {
            $result = NULL;
            $link = NULL;
            taoKetNoi($link);
            $query = "UPDATE products SET `quantity` = $quantity WHERE `name` = '$name'";
            $updateResult = chayTruyVanKhongTraVeDL($link, $query);
            if($updateResult) {
                $result = true;
            }
            return $result;
        }


        public function getProductByNameLimit($name, $limit, $offset) {
            $result = NULL;
            $link = NULL;
            taoKetNoi($link);
            $data = array();
            $query = "SELECT * from products WHERE `name` LIKE '%$name%' ORDER BY `id` ASC limit $limit OFFSET $offset";
            $result = chayTruyVanTraVeDL($link, $query);
            if(mysqli_num_rows($result) > 0) {
                while($rows = mysqli_fetch_assoc($result)) {
                    $product = new Product($rows["id"], $rows["name"], $rows["color"], $rows["size"], $rows["price"], $rows["quantity"], $rows["type"], $rows["description"], $rows["category_id"], $rows["image01"], $rows["image02"], $rows["status"]);
                    array_push($data, $product);
                }
                giaiPhongBoNho($link, $result);
            }else{
                $data = NULL;
            }
            return $data;
        } 

        public function getProductById($id) {
            $result = NULL;
            $link = NULL;
            taoKetNoi($link);
            $data = array();
            $query = "SELECT * from products WHERE `id` = $id";
            $result = chayTruyVanTraVeDL($link, $query);
            if(mysqli_num_rows($result) > 0) {
                while($rows = mysqli_fetch_assoc($result)) {
                    $product = new Product($rows["id"], $rows["name"], $rows["color"], $rows["size"], $rows["price"], $rows["quantity"], $rows["type"], $rows["description"], $rows["category_id"], $rows["image01"], $rows["image02"], $rows["status"]);
                    array_push($data, $product);
                }
                giaiPhongBoNho($link, $result);
            }else{
                $data = NULL;
            }
            return $data;
        }

        public function deleteProduct($id) {
            $result = NULL;
            $link = NULL;
            taoKetNoi($link);
            $query = "UPDATE products SET `status`= 0 WHERE `id` = $id";
            $deleteuser = chayTruyVanKhongTraVeDL($link, $query);
            if($deleteuser) {
                $result = true;
            }else {
                $result = false;
            }
            include "../../views/admin/resultDelete.php";
        }

        public function updateProduct($id, $name, $color, $size, $price, $quantity, $type, $description, 
            $categoryId, $image01, $image02) {
            $result = NULL;
            $link = NULL;
            taoKetNoi($link);
            $query = "UPDATE products SET `name`= '$name', `color` = '$color', `size` = '$size', 
            `price` = '$price', `quantity` = $quantity, `type` = $type, 
            `description` = '$description', category_id = $categoryId, 
            image01 = '$image01', image02 = '$image02' WHERE `id` = $id";
            $updateProduct = chayTruyVanKhongTraVeDL($link, $query);
            if($updateProduct) {
                $result = true;
            }else {
                $result = false;
            }
            return $result;
        }

        public function filterProduct() {
            $result = NULL;
            $link = NULL;
            taoKetNoi($link);
            $data = array();
            $query = "SELECT * from products WHERE `status` = 1 ";
            if(isset($_GET['input-min']) && isset($_GET['input-max'])) {
                $minimumPrice = $_GET['input-min'];
                $maximumPrice = $_GET['input-max'];
                $query .= "AND price BETWEEN $minimumPrice AND $maximumPrice ";
            }
            if(isset($_POST['size'])) {
                $size = $_POST['size'];
                $size_filter = implode(", ", $size);
                $query .= "AND size LIKE '%$size_filter%' ";
            }

            if(isset($_POST['color'])) {
                $color = $_POST['color'];
                $color_filter = implode(", ", $color);
                $query .= "AND color LIKE '%$color_filter%' ";
            }

            if(isset($_GET['category'])) {
                $categoryId = $_GET['category'];
                $category_filter = implode(",", $categoryId);
                $query .= "AND category_id IN ($category_filter)";
            }

            $result = chayTruyVanTraVeDL($link, $query);
            if(mysqli_num_rows($result) > 0) {
                while($rows = mysqli_fetch_assoc($result)) {
                    $product = new Product($rows["id"], $rows["name"], $rows["color"], $rows["size"], $rows["price"], $rows["quantity"], $rows["type"], $rows["description"], $rows["category_id"], $rows["image01"], $rows["image02"], $rows["status"]);
                    array_push($data, $product);
                }
                giaiPhongBoNho($link, $result);
            }else{
                $data = NULL;
            }
            return $data;
        }

        public function filterProductByType($type) {
            $result = NULL;
            $link = NULL;
            taoKetNoi($link);
            $data = array();
            $query = "SELECT * from products WHERE `type` = $type ";
            if(isset($_GET['input-min']) && isset($_GET['input-max'])) {
                $minimumPrice = $_GET['input-min'];
                $maximumPrice = $_GET['input-max'];
                $query .= "AND price BETWEEN $minimumPrice AND $maximumPrice ";
            }
            if(isset($_POST['size'])) {
                $size = $_POST['size'];
                $size_filter = implode(", ", $size);
                $query .= "AND size LIKE '%$size_filter%' ";
            }

            if(isset($_POST['color'])) {
                $color = $_POST['color'];
                $color_filter = implode(", ", $color);
                $query .= "AND color LIKE '%$color_filter%' ";
            }

            if(isset($_GET['category'])) {
                $categoryId = $_GET['category'];
                $category_filter = implode(",", $categoryId);
                $query .= "AND category_id IN ($category_filter)";
            }

            $result = chayTruyVanTraVeDL($link, $query);
            if(mysqli_num_rows($result) > 0) {
                while($rows = mysqli_fetch_assoc($result)) {
                    $product = new Product($rows["id"], $rows["name"], $rows["color"], $rows["size"], $rows["price"], $rows["quantity"], $rows["type"], $rows["description"], $rows["category_id"], $rows["image01"], $rows["image02"], $rows["status"]);
                    array_push($data, $product);
                }
                giaiPhongBoNho($link, $result);
            }else{
                $data = NULL;
            }
            return $data;
        }

        public function filterProductByLimit($limit, $offset) {
            $result = NULL;
            $link = NULL;
            taoKetNoi($link);
            $data = array();
            $query = "SELECT * from products  WHERE `status` = 1 ";
            if(isset($_GET['input-min']) && isset($_GET['input-max'])) {
                $minimumPrice = $_GET['input-min'];
                $maximumPrice = $_GET['input-max'];
                $query .= "AND price BETWEEN $minimumPrice AND $maximumPrice ";
            }
            if(isset($_POST['size'])) {
                $size = $_POST['size'];
                $size_filter = implode(", ", $size);
                $query .= "AND size LIKE '%$size_filter%' ";
            }

            if(isset($_POST['color'])) {
                $color = $_POST['color'];
                $color_filter = implode(", ", $color);
                $query .= "AND color LIKE '%$color_filter%' ";
            }

            if(isset($_GET['category'])) {
                $categoryId = $_GET['category'];
                $category_filter = implode(",", $categoryId);
                $query .= "AND category_id IN ($category_filter)";
            }

            $query .= "ORDER BY `id` ASC limit $limit OFFSET $offset";
            $result = chayTruyVanTraVeDL($link, $query);
            if(mysqli_num_rows($result) > 0) {
                while($rows = mysqli_fetch_assoc($result)) {
                    $product = new Product($rows["id"], $rows["name"], $rows["color"], $rows["size"], $rows["price"], $rows["quantity"], $rows["type"], $rows["description"], $rows["category_id"], $rows["image01"], $rows["image02"], $rows["status"]);
                    array_push($data, $product);
                }
                giaiPhongBoNho($link, $result);
            }else{
                $data = NULL;
            }
            return $data;
        }

        public function filterProductByTypeLimit($type, $limit, $offset) {
            $result = NULL;
            $link = NULL;
            taoKetNoi($link);
            $data = array();
            $query = "SELECT * from products WHERE `type` = $type ";
            if(isset($_GET['input-min']) && isset($_GET['input-max'])) {
                $minimumPrice = $_GET['input-min'];
                $maximumPrice = $_GET['input-max'];
                $query .= "AND price BETWEEN $minimumPrice AND $maximumPrice ";
            }
            if(isset($_POST['size'])) {
                $size = $_POST['size'];
                $size_filter = implode(", ", $size);
                $query .= "AND size LIKE '%$size_filter%' ";
            }

            if(isset($_POST['color'])) {
                $color = $_POST['color'];
                $color_filter = implode(", ", $color);
                $query .= "AND color LIKE '%$color_filter%' ";
            }

            if(isset($_GET['category'])) {
                $categoryId = $_GET['category'];
                $category_filter = implode(",", $categoryId);
                $query .= "AND category_id IN ($category_filter)";
            }

            $query .= "ORDER BY `id` ASC limit $limit OFFSET $offset";

            $result = chayTruyVanTraVeDL($link, $query);
            if(mysqli_num_rows($result) > 0) {
                while($rows = mysqli_fetch_assoc($result)) {
                    $product = new Product($rows["id"], $rows["name"], $rows["color"], $rows["size"], $rows["price"], $rows["quantity"], $rows["type"], $rows["description"], $rows["category_id"], $rows["image01"], $rows["image02"], $rows["status"]);
                    array_push($data, $product);
                }
                giaiPhongBoNho($link, $result);
            }else{
                $data = NULL;
            }
            return $data;
        }
        public function getAllProductByLimit_Sell($owner, $limit, $offset)
        {
            $result = NULL;
            $link = NULL;
            taoKetNoi($link);
            $data = array();
            $query = "SELECT * from products where owner = '$owner' ORDER BY `id` ASC limit $limit OFFSET $offset";
            $result = chayTruyVanTraVeDL($link, $query);
            if(mysqli_num_rows($result) > 0) {
                while($rows = mysqli_fetch_assoc($result)) {
                    $product = new Product($rows["id"], $rows["name"], $rows["color"], $rows["size"], $rows["price"], $rows["quantity"], $rows["type"], $rows["description"], $rows["category_id"], $rows["image01"], $rows["image02"], $rows["status"]);
                    array_push($data, $product);
                }
                giaiPhongBoNho($link, $result);
            }else{
                $data = NULL;
            }
            return $data;
        }
        public function getAllProductWithPagination($owner, $from, $size)
        {
            $result = NULL;
            $link = NULL;
            taoKetNoi($link);
            $query = "select * from products where owner = '$owner' and status = 1 limit $from, $size";
            $data = array();
            $result = chayTruyVanTraVeDL($link, $query);
            while($rows = mysqli_fetch_assoc($result))
            {
                $product = new Product($rows["id"], $rows["name"], $rows["color"], $rows["size"], $rows["price"], $rows["quantity"], $rows["type"], $rows["description"], $rows["category_id"], $rows["image01"], $rows["image02"], $rows["status"]);
                array_push($data, $product);
            }
            
            return $data;
        }
        public function getProductById_sell($id) {
            $allproduct = $this->getAllProduct();
            foreach($allproduct as $product)
            {
                if($product->getId() == $id)
                {
                    return $product;
                }
            }
            return null;
        }
        public function CountAll_sell($owner)
        {
            $link = null;
            taoKetNoi($link);
            $result_count = chayTruyVanTraVeDL($link, "select count(*) from products where owner = '$owner' and status = 1 ");
            $row = mysqli_fetch_row($result_count);
            return $row[0];
        }
        public function updateProduct_sell($id, $name, $price, $quantity, $img, $id_category, $id_type, $size, $desc)
        {
            if($size == 1)
            {
                $size = "Thường";
            }
            if($size == 2)
            {
                $size = "Đặc biệt";
            }
            if($size == 3)
            {
                $size = "Thường, Đặc biệt";
            }
            $link = null;
            taoKetNoi($link);
            chayTruyVanTraVeDL($link, 
            "update `products` set `name`='".$name."',`price`=$price,`description`='".$desc."',`image01`='".$img."',`image02`='".$img."', `category_id`=".$id_category.", `type`=".$id_type.", `size`='".$size."' WHERE id = $id");
            header("Location: ../../views/sell/product.php");
            
        }
        public function deleteProduct_sell($id)
        {
            $link = null;
            taoKetNoi($link);
            $query = "update products set `status`= 0 where id = $id";
            chayTruyVanTraVeDL($link, $query);
            
        }
        public function addProduct_sell($owner, $name, $price, $quantity, $img, $id_category, $id_type, $size, $desc)
        {
            if($size == 1)
            {
                $size = "Thường";
            }
            if($size == 2)
            {
                $size = "Đặc biệt";
            }
            if($size == 3)
            {
                $size = "Thường, Đặc biệt";
            }
            $link = null;
            taoKetNoi($link);
            chayTruyVanTraVeDL($link, 
            "insert into products (owner, `name`, color, size, `price`, quantity, type, `description`,category_id, `image01`, image02, `status`) 
            values ('$owner', '$name', '', '$size', $price, $quantity, $id_type, '$desc', $id_category, '$img', '$img', 1)");
        }
    }    
?>


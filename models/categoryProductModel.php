<?php
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath. '/../modules/db_module.php');
    include_once ($filepath. '../../models/categoryProduct.php');
    include_once ($filepath. '/../validate_module.php');

    class CategoryProductModel {
        //Lấy ra danh sách danh mục sản phẩm
        public function getCategoryList() {
            $result = NULL;
            $link = NULL;
            taoKetNoi($link);
            $data = array();
            $query = "SELECT * from categories";
            $result = chayTruyVanTraVeDL($link, $query);
            if(mysqli_num_rows($result) > 0) {
                while($rows = mysqli_fetch_assoc($result)) {
                    $ncategory = new CategoryProduct($rows["id"], $rows["name"], $rows["status"]);
                    array_push($data, $ncategory);
                }
                giaiPhongBoNho($link, $result);
            }else{
                $data = NULL;
            }
            return $data;
        }
        //Thêm một danh mục mới
        public function setCategory($categoryname)
        {
            $result = NULL;
            $link = NULL;
            taoKetNoi($link);
            if(existsCategoryProduct($link, $categoryname)) {
                giaiPhongBoNho($link, true);
                $result = false;
            }else {
                $query = "INSERT INTO `categories` (`name`, `status`) VALUES ('$categoryname', 1)";
                $setcate = chayTruyVanKhongTraVeDL($link, $query);
                if($setcate) {
                    $result = true;
                }
            }
            return $result;
        }
        //Lấy danh mục theo tên danh mục
        public function getCategoryByName($categoryname) {
            $result = NULL;
            $link = NULL;
            taoKetNoi($link);
            $data = array();
            $query = "SELECT * from categories WHERE `name` LIKE '%$categoryname%'";
            $result = chayTruyVanTraVeDL($link, $query);
            if(mysqli_num_rows($result) > 0) {
                while($rows = mysqli_fetch_assoc($result)) {
                    $scategory = new CategoryProduct($rows["id"], $rows["name"], $rows["status"]);
                    array_push($data, $scategory);
                }
                giaiPhongBoNho($link, $result);
            }else{
                $data = NULL;
            }
            return $data;
        }
        //Lấy danh mục theo id
        public function getCategoryById($id) {
            $result = NULL;
            $link = NULL;
            taoKetNoi($link);
            $data = array();
            $query = "SELECT * from categories WHERE `id` = '$id'";
            $result = chayTruyVanTraVeDL($link, $query);
            if(mysqli_num_rows($result) > 0) {
                while($rows = mysqli_fetch_assoc($result)) {
                    $category = new CategoryProduct($rows["id"], $rows["name"], $rows["status"]);
                    array_push($data, $category);
                }
                giaiPhongBoNho($link, $result);
            }else{
                $data = NULL;
            }
            return $data;
        }
        //Xóa danh mục
        public function deleteCategory($id) {
            $result = NULL;
            $link = NULL;
            taoKetNoi($link);
            $query = "UPDATE categories SET `status`= 0 WHERE `id` = $id";
            $deletecat = chayTruyVanKhongTraVeDL($link, $query);
            if($deletecat) {
                $result = true;
            }else {
                $result = false;
            }
            return $result;
        }

        //Cập nhật danh mục
        public function editCategory($id, $name) {
            $result = NULL;
            $link = NULL;
            taoKetNoi($link);
            $query = "UPDATE categories SET `name`= '$name' WHERE `id` = $id";
            $editcat = chayTruyVanKhongTraVeDL($link, $query);
            if($editcat) {
                $result = true;
            }else {
                $result = false;
            }
            return $result;
        }

        public function getAllCategoryByLimit($limit, $offset) {
            $result = NULL;
            $link = NULL;
            taoKetNoi($link);
            $data = array();
            $query = "SELECT * from categories ORDER BY `id` ASC limit $limit OFFSET $offset";
            $result = chayTruyVanTraVeDL($link, $query);
            if(mysqli_num_rows($result) > 0) {
                while($rows = mysqli_fetch_assoc($result)) {
                    $category = new CategoryProduct($rows["id"], $rows["name"], $rows["status"]);
                    array_push($data, $category);
                }
                giaiPhongBoNho($link, $result);
            }else{
                $data = NULL;
            }
            return $data;
        }
        public function getCategoryByNameLimit($name, $limit, $offset) {
            $result = NULL;
            $link = NULL;
            taoKetNoi($link);
            $data = array();
            $query = "SELECT * from categories WHERE `name` LIKE '%$name%' ORDER BY `id` ASC limit $limit OFFSET $offset";
            $result = chayTruyVanTraVeDL($link, $query);
            if(mysqli_num_rows($result) > 0) {
                while($rows = mysqli_fetch_assoc($result)) {
                    $category = new CategoryProduct($rows["id"], $rows["name"], $rows["status"]);
                    array_push($data, $category);
                }
                giaiPhongBoNho($link, $result);
            }else{
                $data = NULL;
            }
            return $data;
        }
        public function getNameById($id)
        {
            $link = null;
            taoKetNoi($link);
            $result = chayTruyVanTraVeDL($link, "select name from categories where id = $id and status = 1");
            $row = mysqli_fetch_row($result);
            giaiPhongBoNho($link, $result);
            return $row[0];
        }
        public function getMaxID()
        {
            $link = null;
            taoKetNoi($link);
            $result = chayTruyVanTraVeDL($link, "select MAX(id) from categories where status = 1");
            $row = mysqli_fetch_row($result);
            giaiPhongBoNho($link, $result);
            return $row[0];
        }
        public function checkId($id)
        {
            $link = null;
            taoKetNoi($link);
            $result = chayTruyVanTraVeDL($link, "select count(*) from categories where id = $id and status = 1");
            $row = mysqli_fetch_row($result);
            return ($row[0] > 0)? true : false;
        }
    }    
?>
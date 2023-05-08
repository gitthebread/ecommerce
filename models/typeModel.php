<?php 
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath. "../../modules/db_module.php");
    include_once ($filepath. "../../models/type.php");
    include_once ($filepath. "../../validate_module.php");

    class TypeModel {
        //Lấy ra danh sách loại sản phẩm
        public function getTypeList() {
            $result = NULL;
            $link = NULL;
            taoKetNoi($link);
            $data = array();
            $query = "SELECT * from `type`";
            $result = chayTruyVanTraVeDL($link, $query);
            if(mysqli_num_rows($result) > 0) {
                while($rows = mysqli_fetch_assoc($result)) {
                    $ntype = new Type($rows["id"], $rows["name"], $rows["status"]);
                    array_push($data, $ntype);
                }
                giaiPhongBoNho($link, $result);
            }else{
                $data = NULL;
            }
            return $data;
        }
        //Thêm 1 loại sản phẩm mới
        public function setType($typename)
        {
            $result = NULL;
            $link = NULL;
            taoKetNoi($link);
            if(existsCategoryProduct($link, $typename)) {
                giaiPhongBoNho($link, true);
                $result = false;
            }else {
                $query = "INSERT INTO `type` (`name`, `status`) VALUES ('$typename', 1)";
                $setcate = chayTruyVanKhongTraVeDL($link, $query);
                if($setcate) {
                    $result = true;
                }
            }
            return $result;
        }
        public function getNameById($id)
        {
            $link = null;
            taoKetNoi($link);
            $result = chayTruyVanTraVeDL($link, "select name from type where id = $id and status = 1");
            $row = mysqli_fetch_row($result);
            giaiPhongBoNho($link, $result);
            return $row[0];
        }
        public function getMaxID()
        {
            $link = null;
            taoKetNoi($link);
            $result = chayTruyVanTraVeDL($link, "select MAX(id) from type where status = 1");
            $row = mysqli_fetch_row($result);
            giaiPhongBoNho($link, $result);
            return $row[0];
        }
        public function checkId($id)
        {
            $link = null;
            taoKetNoi($link);
            $result = chayTruyVanTraVeDL($link, "select count(*) from type where id = $id and status = 1");
            $row = mysqli_fetch_row($result);
            return ($row[0] > 0)? true : false;
        }
    }    
?>
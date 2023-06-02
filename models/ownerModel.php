<?php
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath. '/./owner.php');
    include_once ($filepath. '/../modules/db_module.php');
    class ownerModel{
        //Thêm mới
        public function getOwner(){
            $link = NULL;
            taoKetNoi($link);
            $query = "SELECT DISTINCT users.id, products.owner FROM products INNER JOIN users ON products.owner = users.username";
            $data = array();
            $result = chayTruyVanKhongTraVeDL($link, $query);
            while($rows = mysqli_fetch_assoc($result))
            {
                $owner = new Owner($rows["id"], $rows["owner"], $this->countProductByOwner($rows["owner"]));
                array_push($data, $owner);
            }
            return $data;
        }
        public function countProductByOwner($owner)
        {
            $link = NULL;
            taoKetNoi($link);
            $result_count = chayTruyVanTraVeDL($link, "select count(*) from products where owner = '$owner' and status = 1 ");
            $row = mysqli_fetch_row($result_count);
            return $row[0];
        }
    }
?>
<?php
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath. '/./bill_billDetail.php');
    include_once ($filepath. '/../modules/db_module.php');
    class bill_billDetailModel
    {
        public function getAllByLimit($owner, $from, $size)
        {
            $result = NULL;
            $link = NULL;
            taoKetNoi($link);
            $data = array();
            $query = "SELECT bill.id, detail_bill.product_name, products.image01, detail_bill.product_quantity, detail_bill.product_size, bill.cus_firstName, bill.cus_lastName FROM bill INNER JOIN detail_bill ON bill.id = detail_bill.bill_id INNER JOIN products ON detail_bill.product_name = products.name where owner = '$owner' limit $from, $size";
            $result = chayTruyVanTraVeDL($link, $query);
            if(mysqli_num_rows($result) > 0) {
                while($rows = mysqli_fetch_assoc($result)) {
                    $bill_billDetail = new bill_billDetail($rows["id"], $rows["product_name"], $rows["image01"], $rows["product_quantity"], $rows["product_size"], $rows["cus_firstName"], $rows["cus_lastName"]);
                    array_push($data, $bill_billDetail);
                }
                giaiPhongBoNho($link, $result);
            }else{
                $data = NULL;
            }
            return $data;
        }
        public function getAllWithPagination($owner, $from, $size)
        {
            $result = NULL;
            $link = NULL;
            taoKetNoi($link);
            $data = array();
            
            $query = "SELECT bill.id, detail_bill.product_name, products.image01, detail_bill.product_quantity, detail_bill.product_size, bill.cus_firstName, bill.cus_lastName FROM bill INNER JOIN detail_bill ON bill.id = detail_bill.bill_id INNER JOIN products ON detail_bill.product_name = products.name where owner = '$owner' limit $from, $size";
            $query_count = "SELECT count(*) FROM bill INNER JOIN detail_bill ON bill.id = detail_bill.bill_id INNER JOIN products ON detail_bill.product_name = products.name where owner = '$owner'";
            $result = chayTruyVanTraVeDL($link, $query);
            if(mysqli_num_rows($result) > 0) {
                while($rows = mysqli_fetch_assoc($result)) {
                    $bill_billDetail = new bill_billDetail($rows["id"], $rows["product_name"], $rows["image01"], $rows["product_quantity"], $rows["product_size"], $rows["cus_firstName"], $rows["cus_lastName"]);
                    array_push($data, $bill_billDetail);
                }
                giaiPhongBoNho($link, $result);
            }else{
                $data = NULL;
            }
            return $data;
        }
        public function getCount($owner)
        {$result = NULL;
            $link = NULL;
            taoKetNoi($link);
            $query = "SELECT count(*) FROM bill INNER JOIN detail_bill ON bill.id = detail_bill.bill_id INNER JOIN products ON detail_bill.product_name = products.name where owner = '$owner'";
            $result = chayTruyVanTraVeDL($link, $query);
            $rows = mysqli_fetch_row($result);
            return $rows[0];
        }
    }
?>
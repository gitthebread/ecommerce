<?php
    $filepath = realpath(dirname(__FILE__));
    include_once "../../models/shop.php";
    include_once ($filepath. '/../modules/db_module.php');
    class shopModel
    {
        public function register($owner, $name, $phone, $address, $email)
        {
            $link = NULL;
            taoKetNoi($link);
            $query = "insert into shop (owner, name, phone, address, email, status) values ('$owner', '$name', $phone, '$address', '$email', 1)";
        
            return chayTruyVanKhongTraVeDL($link, $query);;
        }
        public function checkExisted($owner)
        {
            $link = NULL;
            taoKetNoi($link);
            $result_count = chayTruyVanKhongTraVeDL($link, "select count(*) from shop where owner = '$owner' and status = 1 ");
            $row = mysqli_fetch_row($result_count);
            if($row[0] > 0) 
            {
                return true;
            }
            else {
                return false;
            }
        }
        public function checkValidation_name($name)
        {
            $link = NULL;
            taoKetNoi($link);
            $result_count = chayTruyVanKhongTraVeDL($link, "select count(*) from shop where name = '$name' and status = 1 ");
            $row = mysqli_fetch_row($result_count);
            if($row > 0) 
            {
                return true;
            }
            else {
                return false;
            }
        }
        public function checkValidation_email($email)
        {
            $link = NULL;
            taoKetNoi($link);
            $result_count = chayTruyVanKhongTraVeDL($link, "select count(*) from shop where email = '$email' and status = 1 ");
            $row = mysqli_fetch_row($result_count);
            if($row > 0) 
            {
                return true;
            }
            else {
                return false;
            }
        }

    }
?>
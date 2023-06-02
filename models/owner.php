<?php
    class Owner{
        public $id_user;
        public $username;
        public $total_product;

        public function __construct($id_user, $username, $total_product)
        {
            $this->id_user = $id_user;
            $this->username = $username;
            $this->total_product = $total_product;
        }
    }
?>
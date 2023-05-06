<?php
    class bill_billDetail
    {
        public $id_bill;
        public $name_product;
        public $image;
        public $quantity;
        public $size;
        public $cus_firstName;
        public $cus_lastName;
        
        function __construct($id_bill, $name_product, $image, $quantity, $size, $cus_firstName, $cus_lastName)
        {
            $this->id_bill = $id_bill;
            $this->name_product = $name_product;
            $this->image = $image;
            $this->quantity = $quantity;
            $this->size = $size;
            $this->cus_firstName = $cus_firstName;
            $this->cus_lastName = $cus_lastName;
        }
    }
?>
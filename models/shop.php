<?php
    class shop
    {
        public $owner;
        public $name;
        public $phone;
        public $address;
        public $email;
        public function __construct($owner, $name, $phone, $address, $email)
        {
            $this->owner = $owner;
            $this->name = $name;
            $this->phone = $phone;
            $this->address = $address;
            $this->email = $email;
        }
    }
?>
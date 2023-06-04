<?php
    ob_start();
    $filepath = realpath(dirname(__FILE__));
    // include_once ($filepath. '/../models/shopModel.php');
    include_once "../../models/shopModel.php";

    class shopController
    {
        public $model;
        function __construct() {
            $this->model = new shopModel();
        }
        public function checkExisted($onwer)
        {
            if($this->model->checkExisted($onwer))
            {
                header('Location: ../../views/sell/home.php');
            }
            else
            {
                header('Location: ../../views/sell/index.php');
            }
        }
        public function register($owner, $name, $phone, $address, $email)
        {
            if($this->model->register($owner, $name, $phone, $address, $email))
            {
                header('Location: ../../views/sell/home.php');
            }
        }
    }
?>
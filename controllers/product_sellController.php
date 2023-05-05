<?php

$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../models/productModel.php');
?>
<?php
class ProductController
{
    public $model;
    public function __construct()
    {
        $this->model = new ProductModel();
    }
    public function getAllProductByLimit_Sell($id_user, $limit, $offset)
    {
        $data = $this->model->getAllProductByLimit_Sell($id_user, $limit, $offset);
        include_once "../../views/sell/product-home-view.php";
    }
}
?>
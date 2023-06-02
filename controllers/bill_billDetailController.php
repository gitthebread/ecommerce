<?php
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath. '/../models/bill_billDetailModel.php');
?>

<?php
    class bill_billDetailController{
        public $model;
        public function __construct() {
            $this->model = new bill_billDetailModel();
        }
        public function getAllByLimit($owner, $from, $size)
        {
            $data = $this->model->getAllByLimit($owner, $from, $size);
            include_once "../../views/sell/bill-home-view.php";
        }
        public function getAllWithPagination($owner)
        {
            $page = isset($_GET["page"])? $_GET["page"]:1;
            $page = is_numeric($page)?$page : 1;
            $pagesize = 6;
            $from = ($page-1)*$pagesize;
            $total = ceil($this->model->getCount($owner)/$pagesize);

            $data = $this->model->getAllWithPagination($owner, $from, $pagesize);
            include_once "../../views/sell/bill-view.php";
        }
        public function getCount($owner)
        {
            return $this->model->getCount($owner);
        }
    }
?>

<?php 

    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath. '/../models/productModel.php');
    include_once ($filepath. '/../models/categoryProductModel.php');
    include_once ($filepath. '/../models/typeModel.php');
    include_once ($filepath. '/../models/ownerModel.php');
?>

<?php 
    class ProductController {
        public $model;
        public $category_model;
        public $type_model;
        public $owner_model;
        public function __construct() {
            $this->model = new ProductModel();
            $this->category_model = new CategoryProductModel();
            $this->type_model = new TypeModel();
            $this->owner_model = new ownerModel();
        }
        public function getAllProduct() {
            $data = $this->model->getAllProduct();
            include_once "../../views/admin/manage-product-view.php";
        }

        public function getAllProductHome() {
            $data = $this->model->getAllProduct();
            include_once "../../index.php";
        }

        public function getAllProductPage() {
            $data = $this->model->getAllProduct();
            include_once "../../views/admin/page-list-view.php";
        }

        public function getAllProductFilterPage($queryStr) {
            $queryString = $queryStr;
            $products = $this->model->getAllProduct();
            include_once "../../views/product/filter-product-page-view.php";
        }

        public function getAllProductDetail() {
            $data = $this->model->getAllProduct();
            include_once "../../views/detailProduct/all-product-like.php";
        }

        public function getAllProductByLimit($limit, $offset) {
            $data = $this->model->getAllProductByLimit($limit, $offset);
            include_once "../../views/admin/manage-product-view.php";
        }

        public function getAllProductPageByLimit($limit, $offset) {
            $data = $this->model->getAllProductByLimit($limit, $offset);
            include_once "../../views/admin/page-list-view.php";
        }

        public function setProduct($name, $color, $size, $price, $quantity, $type, $description, $categoryId, $image01, $image02) {
            $count = 0;
            $result = NULL;
            $productInfo = ['pro-name', 'pro-color', 'pro-size', 'pro-price', 'pro-quantity', 'pro-type', 'pro-description', 'pro-category', 'pro-img-01', 'pro-img-02'];
            for($i = 0; $i < count($productInfo); $i++) {
                if($_POST[$productInfo[$i]] == '') {
                    $result = -1;
                    break;
                }else {
                    $count++;
                }
            }
            if($count == count($productInfo)) {
                $resultInsert = $this->model->setProduct($name, $color, $size, $price, $quantity, $type, $description, $categoryId, $image01, $image02);
                if($resultInsert == true) {
                    $result = 0;
                }else if($resultInsert == false) {
                    $result = 1;
                }
            }
            include_once "../../views/admin/resultAdd.php";
        }

        public function deleteProduct($id) {
            $result = $this->model->deleteProduct($id);
            include_once "../../views/admin/resultDelete.php";
        }
         //Lấy thông tin sản phẩm theo tên gần đúng
        public function getProductByName($name) {
            $data = $this->model->getProductByName($name);
            include_once "../../views/admin/manage-product-view.php";
        }

        public function getProductByNameSearchPage($name) {
            $data = $this->model->getProductByName($name);
            include_once "../../views/search/search-view.php";
        }

        public function getProductPageByName($name) {
            $data = $this->model->getProductByName($name);
            include_once "../../views/admin/page-list-view.php";
        }
        //Lấy thông tin sản phẩm theo tên
        public function getProductByNameProduct($quantity, $name) {
            $quantityBuy = $quantity;
            $nameProduct = $name;
            $data = $this->model->getProductByNameProduct($nameProduct);
            include "../../views/checkout/update-quantity-view.php";
        }

        public function updateQuantity($quantity, $name) {
            $result =  $this->model->updateQuantity($quantity, $name);
            include_once "../../views/checkout/result-update-quantity.php";
        }

        public function getProductByNameLimit($name, $limit, $offset) {
            $data = $this->model->getProductByNameLimit($name, $limit, $offset);
            include_once "../../views/admin/manage-product-view.php";
        }

        public function getProductPageByNameLimit($name, $limit, $offset) {
            $data = $this->model->getProductByNameLimit($name, $limit, $offset);
            include_once "../../views/admin/page-list-view.php";
        }

        public function getProductByType($type) {
            $data = $this->model->getProductByType($type);
            return $data;
        }

        public function getProductByTypePage($queryStr, $typeProduct) {
            $type = $typeProduct;
            $queryString = $queryStr;
            $products = $this->model->getProductByType($type);
            include_once "../../views/product/filter-product-page-type-view.php";
        }

        public function getProductByTypeLimit($type, $limit, $offset) {
            $data = $this->model->getProductByTypeLimit($type, $limit, $offset);
            return $data;
        }

        public function getProductByTypeLimitHome($type, $limit, $offset) {
            $data = $this->model->getProductByTypeLimit($type, $limit, $offset);
            include_once "./product-type-view.php";
        }

        public function getProductById($id) {
            $data = $this->model->getProductById($id);
            include_once "../../views/detailProduct/product-detail-view.php";
        }

        public function getProductByIdBreadCrumb($id) {
            $data = $this->model->getProductById($id);
            include_once "../../views/detailProduct/breadcrumb.php";
        }

        public function getProductByIdImage($id) {
            $data = $this->model->getProductById($id);
            include_once "../../views/detailProduct/productImage.php";
        }

        public function getProductByIdUpdate($id) {
            $data = $this->model->getProductById($id);
            include_once "../../views/admin/update-product-view.php";
        }

        // public function searchforProduct($searchstr){
        //     $data = $this->model->searchforProduct($searchstr);
        //     return $data;
        // }

        public function updateProduct($id, $name, $color, $size, $price, $quantity, $type, $description, $categoryId, $image01, $image02) {
            $count = 0;
            $result = NULL;
            $productInfo = ['pro-name', 'pro-color', 'pro-size', 'pro-price', 'pro-quantity', 'pro-type', 'pro-description', 'pro-category', 'pro-img-01', 'pro-img-02'];
            for($i = 0; $i < count($productInfo); $i++) {
                if($_POST[$productInfo[$i]] == '') {
                    $result = -1;
                    break;
                }else {
                    $count++;
                }
            }
            if($count == count($productInfo)) {
                $resultEdit = $this->model->updateProduct($id, $name, $color, $size, $price, $quantity, $type, $description, $categoryId, $image01, $image02);
                if($resultEdit == true) {
                    $result = 0;
                }else if($resultEdit == false) {
                    $result = 1;
                }
            }
            include_once "../../views/admin/resultEdit.php";
        }

        public function filterProduct($queryStr) {
            $queryString = $queryStr;
            $products = $this->model->filterProduct();
            include_once "../../views/product/filter-product-page-view.php";
        }

        public function filterProductByTypePage($queryStr, $typeProduct) {
            $type = $typeProduct;
            $queryString = $queryStr;
            $products = $this->model->filterProductByType($type);
            include_once "../../views/product/filter-product-page-type-view.php";
        }

        public function filterProductByLimit($limit, $offset) {
            $data = $this->model->filterProductByLimit($limit, $offset);
            include_once "../../views/product/filter-product-view.php";
        }

        public function filterProductByTypeLimit($type, $limit, $offset) {
            $data = $this->model->filterProductByTypeLimit($type, $limit, $offset);
            include_once "../../views/product/filter-product-view.php";
        }

        public function Display()
        {
            $currentPage = isset($_GET['current-page'])?$_GET['current-page']:1;
            $limit = 4;
            $offset = ($currentPage - 1) * $limit;
            $totalPages = 0;
            $type = isset($_GET['type'])?$_GET['type']:null;

            include_once "../../views/product/filterProduct.php";
        }
        public function getAllProductByLimit_Sell($owner, $from, $pagesize)
        {
            $data = $this->model->getAllProductWithPagination($owner, $from, $pagesize);
            include_once "../../views/sell/product-home-view.php";
        }
        public function getAllProductWithPagination_sell($owner)
        {
            $page = isset($_GET["page"])? $_GET["page"]:1;
            $page = is_numeric($page)?$page : 1;
            $pagesize = 6;
            $from = ($page-1)*$pagesize;
            $ListProduct = $this->model->getAllProductWithPagination($owner, $from, $pagesize);
            $total = ceil($this->model->CountAll_sell($owner)/$pagesize); 
            include_once "../../views/sell/product-view.php";
        }
        public function getProductById_sell($id) {
            $data = $this->model->getProductById_sell($id);
            include_once "../../views/sell/product-detail-view.php";
        }
        public function showDataToUpdate($id)
        {
            if(isset($_GET["id"]))
            {
                $data = $this->model->getProductById_sell($id);
                if($data->getSize() == 'Thường')
                {
                    $select1 = 'selected';
                    $select2 = '';
                    $select3 ='';
                }
                else
                {
                    if($data->getSize() == 'Đặc biệt')
                    {
                        $select2 = 'selected';
                        $select1 = '';
                        $select3 = '';
                    }
                    else
                    {
                        $select3 = 'selected';
                        $select2 = '';
                        $select1 = '';
                    }
                }
            }
            include_once "../../views/sell/update-product-view.php";
        }
        public function updateProduct_sell($id, $name, $price, $quantity, $img, $id_category, $id_type, $size, $desc)
        {
            if(isset($_POST['action']))
            {
                if($this->category_model->checkId($id_category) && $this->type_model->checkId($id_type))
                {
                    $this->model->updateProduct_sell($id, $name, $price, $quantity, $img, $id_category, $id_type, $size, $desc);
                }
                else
                {
                    header("Location: ../../views/sell/update-product.php?id=$id");
                }
                
            }
        }
        public function deleteProduct_sell($id)
        {
            $this->model->deleteProduct_sell($id);
            header("Location: ../../views/sell/product.php");
        }
        public function addProduct_sell($owner, $name, $price, $quantity, $img, $id_category, $id_type, $size, $desc)
        {
            $this->model->addProduct_sell($owner, $name, $price, $quantity, $img, $id_category, $id_type, $size, $desc);
            header("Location: ../../views/sell/product.php");
        }
        public function showAllOwner()
        {
            $data = $this->owner_model->getOwner();
            include_once "../../views/admin/product-detail-view.php";
        }
        public function CountAll_Sell($owner)
        {
            return $this->model->CountAll_Sell($owner);
        }
    }
?>
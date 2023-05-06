<?php 
    foreach ($data as $product) {
        $arraycolor = explode(", ",$product->getColor());
        echo"
            <div class='col-lg-3 col-md-6 col-6 product'>
                <div class='card'>
                    <div class='product-img'>
                        <a href='./views/detailProduct/index.php?id=".$product->getId()."'>
                            <img src='".$product->getImage02()."' class='product-img-content product-img-2'/>
                            <img src='".$product->getImage01()."' class='product-img-content product-img-1'/>
                        </a>
                        <div class='pro-btn d-flex'>
                            <a href='./views/detailProduct/index.php?id=".$product->getId()."' class='hidden-btn'>
                                <i class='fa-solid fa-eye'></i>
                            </a>
                        </div>
                    </div>
                    <div class='card-body'>
                        <h5 class='card-title product-info'>
                            <div class='product-name'>
                                ".$product->getName()."
                            </div>
                        </h5>
                        <p class='card-text'>
                            <div class='product-price d-flex'>
                                <div class='product-price__new'>".currency_format($product->getPrice())."</div>
                            </div>
                        </p>
                        <a href='./views/detailProduct/index.php?id=".$product->getId()."' class='btn btn-primary' style='background-color: transparent; border: none;'>
                            <div class='product-cart'>
                                <span class='material-symbols-outlined product-cart-icon'>
                                    local_mall
                                </span>
                                <p class='product-cart-buy'>Mua ngay</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
        ";
    }
?>
<?php 
    foreach ($data as $product) {
        echo "
            <img id='ProductImg' width='100%' src='".$product->getImage01()."' alt=''>
        ";
    }
?>
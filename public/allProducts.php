<?php
    require_once('controllers/ProductsController.php');


    $productController = new ProductsController();

    $allProducts = $productController->getProducts();

?>
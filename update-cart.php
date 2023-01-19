<?php 
    require "./src/inc/products.php";
    require "./src/inc/cart.php";
    session_start();
    $cart;
    if (!isset($_SESSION["cart"])){
        $_SESSION["cart"] = new Cart();
    }
    $cart = $_SESSION["cart"];

    if (isset($_GET["id"])){
        foreach($products as $product){
            if($product["id"] == (int) $_GET["id"])
            {
                $cart->addProduct($product);
            }
        }
    }

    header("Location: http://localhost/php-intro/az-store/index.php#products-section");
    exit;
?>
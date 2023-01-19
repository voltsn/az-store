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

    $end = count(explode('/', $_SERVER['REQUEST_URI'])) - 2;
    $redirect = array_slice(explode('/',$_SERVER['REQUEST_URI']),0, $end);

    $link = "http://".$_SERVER["HTTP_HOST"].join("/", $redirect);
    header("Location: $link/index.php#products-section");
    exit;
?>
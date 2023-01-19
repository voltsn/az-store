<?php 
require "./src/inc/cart.php";
    // Todo: Start a session 
    session_start();
    $cart;
    if(isset( $_SESSION['cart'])){
        $cart = $_SESSION['cart'];
    }
    //       Docs: https://www.php.net/manual/fr/book.session.php
    // Todo: If there are products in the cart display them
    //       Otherwise display: "The cart is empty" msg and disable the Go to checkout button.
    // Todo: When the user clicks the button send them to the checkout page
    // Note: php tags can be inserted inbetween HTML tags like so: <h1> <?php $name ? > </h1>
    // Note: HTML can be generated in php simply using echo:
    //        <?php echo "<div class='some-class'> $SomeVariable </div>"? >
?>
<?php  require "./src/inc/header.php"; ?>
<?php  require "./src/inc/panier.php"; ?>
<section class="card-main">
    <h2 class="card-title">Your <span>cart</span> (<?php echo $cart->get_total_items()?> Articles)</h2>
    <?php
        if($cart){
            $products = $cart->get_products();

            foreach($products as $product){
                echo "    
                <div class='basket-main'>
                <img src='$product[img]' alt='Chaussure AirMax' class='card-img'>
                <div class='info-card'>
                    <p class='card-name'>$product[name]</p>
                    <p>Nbr: $product[qty]</p>
                    <div class='total-card'>
                        <p class='card-price'>$product[price]€</p>
                        <img src='./public/images/icons/delete 1.svg' alt='' class='card-delete'>
                    </div>
                </div>
            </div>
            ";
            }
        }else{
            echo "<p>Votre panier est vide</p>";
        }
    ?>

    <p class="total-price">Total: <?php echo $cart->get_total_price().'€'; ?></p>
    <a class="card-btn" href="checkout.php">Go to checkout</a>
</section>
<?php require "./src/inc/footer.php"; ?>
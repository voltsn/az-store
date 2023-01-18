<?php 
    // Todo: Start a session 
    session_start();
    var_dump($_SESSION['cart']);

    //       Docs: https://www.php.net/manual/fr/book.session.php
    // Todo: If there are products in the cart display them
    //       Otherwise display: "The cart is empty" msg and disable the Go to checkout button.
    // Todo: When the user clicks the button send them to the checkout page
    // Note: php tags can be inserted inbetween HTML tags like so: <h1> <?php $name ? > </h1>
    // Note: HTML can be generated in php simply using echo:
    //        <?php echo "<div class='some-class'> $SomeVariable </div>"? >
?>
<?php  require "./src/inc/header.php"; ?>
<section class="card-main">
    <h2 class="card-title">Your <span>cart</span> (X Articles)</h2>
    <?php // Generate the html for the products here ?>
    <div class="basket-main">
        <img src="./public/images/products/shoe_two.png" alt="Chaussure AirMax" class="card-img">
        <div class="info-card">
            <p class="card-name">NIKE AIR</p>
            <select name="" id=""></select>
            <select name="" id=""></select>
            <div class="total-card">
                <p class="card-price">234€</p>
                <img src="./public/images/icons/delete 1.svg" alt="" class="card-delete">
            </div>
        </div>
    </div>
    <div class="basket-main">
        <img src="./public/images/products/shoe_two.png" alt="Chaussure AirMax" class="card-img">
        <div class="info-card">
            <p class="card-name">NIKE AIR</p>
            <select name="" id=""></select>
            <select name="" id=""></select>
            <div class="total-card">
                <p class="card-price">234€</p>
                <img src="./public/images/icons/delete 1.svg" alt="" class="card-delete">
            </div>
        </div>
    </div>
    <p class="total-price">Total: 468€</p>
    <button class="card-btn">Go to checkout</button>
</section>
<?php require "./src/inc/footer.php"; ?>
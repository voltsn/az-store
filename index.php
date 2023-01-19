<?php 
    require "./src/inc/products.php";
    require "./src/inc/cart.php";
    session_start();
?>
<?php require "./src/inc/header.php"; ?>
    <section class="hero">
        <div class="hero-text">
            <h1 class="hero__heading">Shoe the right <span class="accent">one</span>.</h1>
            <button class="btn hero__btn">See our store</button>
        </div>
        <div class="hero__graphic">
            <img src="public/images/icons/Nike.svg" class="hero__graphic__nike" alt="Nike logo">
            <img src="public/images/products/shoe_one.png" class="hero__graphic__shoe" alt="shoe Nike">
        </div>
    </section>
    <section class="products-section" id="products-section">
        <h2> <span class="accent">Our</span> last products</h2>
        <div class="latest-products">
            <?php 
                require "./src/inc/products.php";
                foreach($products as $product){
                    echo "
                        <article class='product-card' data-product-id=$product[id]>
                            <img class='product-image' src='$product[img]' alt='$product[alt]'>
                            <div>
                                <p class='product-name'>$product[name]</p>
                                <p class='product-price'>$product[price]€</p>
                            </div>
                            <a href='./update-cart.php/?id=$product[id]' class='add-to-cart-btn'>Add to card</a>
                        </article>
                    ";
                }
            ?>
        </div>
</section>
<section class="marketing">
    <img class="shoe" src="src\img\shoe_two.png" alt="shoe Nike">
    <h2>We provide you the <span>best</span>quality</h2>
    <p class="baseline_marketing">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio, aspernatur? Voluptas quae ipsam beatae.</p>
</section>
<div class="main-opinions">
    <article class="article-opinions">
        <img src="src\img\image-emily.jpg" alt="Picture of Emily" class="img-opinions">
        <p class="name-opinions">Emily from xyz</p>
        <p class="desc-opinions">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus corporis hic esse et, odio quos eum officia velit, illum ipsam, sed maxime. Eveniet, eius recusandae dolor non quidem animi qui.</p>
    </article>
    <article class="article-opinions">
        <img src="src\img\image-thomas.jpg" alt="Picture of Thomas" class="img-opinions">
        <p class="name-opinions">Thomas from corporate</p>
        <p class="desc-opinions">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus corporis hic esse et, odio quos eum officia velit, illum ipsam, sed maxime. Eveniet, eius recusandae dolor non quidem animi qui.</p>
    </article>
    <article class="article-opinions">
        <img src="src\img\image-jennie.jpg" alt="Picture of Jennie" class="img-opinions">
        <p class="name-opinions">Jennie from Nike</p>
        <p class="desc-opinions">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus corporis hic esse et, odio quos eum officia velit, illum ipsam, sed maxime. Eveniet, eius recusandae dolor non quidem animi qui.</p>
    </article>
</div>
<?php require "./src/inc/footer.php";
?>
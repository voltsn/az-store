<?php 
    // Todo: Start a session
    // Todo: Include the products array 
    // Todo: Add the products in the UI
    // Todo: Update the cart when the user clicks on either the add or the remove button
    //       Idea: perhaps create a javscript file containing one or more asyncronus functions
    //             that make a post request using the fetch api, to another php page 
    //             containing a script that updates the cart that is stored in $_SESSION.
    //             In this particual scenario a new php file should be created
    // Note: HTML can be generated in php simply using echo:
    //        <?php echo "<div class='some-class'> $SomeVariable </div>"? >
?>
<?php require "./src/inc/header.php"; ?>
    <section class="hero">
        <div class="hero-text">
            <h1 class="hero__heading">Shoe the right <span class="accent">one</span>.</h1>
            <button class="btn hero__btn">See our store</button>
        </div>
        <div class="hero__graphic">
            <img src="src\img\shoe_one.png" class="hero__graphic__img" alt="shoe Nike">
        </div>
    </section>
    <section>
        <h3<span>Our</span> last products</h2>
        <?php require "./src/inc/carrousel.php"; ?>

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
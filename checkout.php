<?php 
    // Todo: Include the country array and display them in the form
    // Todo: Using $_SESSION retrieve the products from the cart and
    //       display the contents of the cart in checkout-cart div
    // Todo: If the form has been submitted (through POST) validate and sanitaze input
    // Todo: If the data from the form is valid empty the cart and display a succes msg
    //       instead of the form, if one of the inputs was invalid add a red outline to the input
    // Note: php tags can be inserted inbetween HTML tags like so: <h1> <?php $name ? > </h1>
    // Note: HTML can be generated in php simply using echo:
    //        <?php echo "<div class='some-class'> $SomeVariable </div>"? >
?>
<?php  require "./src/inc/header.php"; ?>
<article class="form-container">
    <div class="form-header">
        <h1 class="form-header-heading">
            Checkout
        </h1>

        <div class="checkout-cart">
            <?php // The content of the cart goes here ?>
        </div>
    </div>

    <div class="form-body">
        <form method="POST" action="checkout.php">
            <div class="form-control">
                <input class="form-input" id="firstname" type="text" name="full_name" required>
                <label for="firstname"> Fisrt Name </label>
            </div>

            <div class="form-control">
                <input class="form-input" id="lastname" type="text" name="full_name" required>
                <label for="lastname"> Last Name </label>
            </div>

            <div class="form-control">
                <input class="form-input" id="email" type="email" name="email" placeholder="Email" required>
                <label for="email"> Email </label>
            </div>

            <div class="form-control">
                <input class="form-input" id="address" type="text"  name="address" required>
                <label for="address"> Address </label>
            </div>

            <div class="form-control">
                <input type="text" class="form-input" id="city" name="city" required>
                <label for="city">City</label>
            </div>

            <div class="form-control">
                <input type="number" class="form-input" id="zipcode" name="zipcode" min="0" required>
                <label for="zipcode">Zip code</label>
            </div>

            <div class="form-control">
                <label for="country">Country : </label>
                <select class="form-input" name="country" id="country" required>
                    <?php 
                        // Generate the options here
                    ?>
                </select>
            </div>

            <button class="checkout-submit-btn" type="submit">Send</button>
        </form>
    </div>
</article>
<?php require "./src/inc/footer.php"; ?>
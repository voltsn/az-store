<?php 
    // Todo: Using $_SESSION retrieve the products from the cart and
    //       display the contents of the cart in checkout-cart div
    // Todo: If the form has been submitted (through POST) validate and sanitaze input
    // Todo: If the data from the form is valid empty the cart and display a succes msg
    //       instead of the form, if one of the inputs was invalid add a red outline to the input
    // Note: php tags can be inserted inbetween HTML tags like so: <h1> <?php $name ? > </h1>
    // Note: HTML can be generated in php simply using echo:
    //        <?php echo "<div class='some-class'> $SomeVariable </div>"? >
?>
<?php
            // If the form has been submitted (through POST) validate and sanitaze input
            
    if(isset($_POST["submit"])) {
        $inputs = array(
            "email" => FILTER_VALIDATE_EMAIL,
            "firstname" => FILTER_SANITIZE_STRING,
            "lastname" => FILTER_SANITIZE_STRING,
            "address" => FILTER_SANITIZE_STRING,
            "city" => FILTER_SANITIZE_STRING
);
            
// Appliquer les fonctions de sanitisation aux entrées
    foreach($inputs as $input => $sanitize) {
        if(isset($_POST[$input])) {
        $_POST[$input] = filter_var(trim($_POST[$input]), $sanitize);
        }
    }
 }?>
 
<?php require "./src/inc/header.php"; ?>
<article class="form-container">
    <div class="form-header">
        <h1 class="form-header-heading">
            Checkout
        </h1>

        <?php
        // Using $_SESSION retrieve the products from the cart and display the contents of the cart in checkout-cart div
        // Storing the product when added to the cart in a session variable (array).
        session_start(); // Starting the session before accessing the session variable
        $produits = NULL;
        if (!isset($_SESSION['cart'])) {
        } else {
            $produits = $_SESSION["cart"];
        }
        ?>
        <div class="checkout-cart">
            <?php
            // Display the content of the cart here, by using a loop to browse the session array and generate the contents of the div.
        //     if ($produits) {
        //         foreach ($produits as $item) {
        //             echo "<p> $item[name] </p>
        //         <p> $item[size] </p>
        //         <p> $item[quantity] </p>
        //         <p> $item[price] </p>";
        //     }
        // } else {
        //     echo '<p>Your cart is empty.</p>';
        // }
        ?>
        </div>
    </div>

    <div class="form-body">
        <form method="POST" action="checkout.php">
            <div class="form-control">
                <input class="form-input" id="firstname" type="text" name="full_name" required>
                <label for="firstname"> First Name </label>
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
                <input class="form-input" id="address" type="text" name="address" required>
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
                    // Display the countries in the form                        
                    include "./src/inc/country.php";
                    foreach ($countries as $country) {
                        echo '<option value="' . $country . '">' . $country . '</option>';
                    }
                    ?>
                </select>
                </select>
            </div>

            <button class="checkout-submit-btn" type="submit">Send</button>

        </form>
    </div>
</article>
<?php require "./src/inc/footer.php"; ?>
<?php  require "./src/inc/header.php"; ?>
<article class="form-container">
    <div class="form-header">
        <h1 class="form-header-heading">
            Checkout
        </h1>
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
                <select class="form-input" name="country" required>
                    <option value="belgium" selected>Belgium</option>
                    <option value="Germany">Germany</option>

                </select>
                <label for="city">Country</label>
            </div>

            <button class="btn" type="submit">Send</button>
        </form>
    </div>
</article>
<?php require "./src/inc/footer.php"; ?>
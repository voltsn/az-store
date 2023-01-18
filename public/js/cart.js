const products = document.querySelectorAll("add-to-cart-btn");
products.forEach((product) => {
    product.addEventListener("click", updateCart);
});

async function updateCart(){
    const url = "/update-cart.php";

    
}


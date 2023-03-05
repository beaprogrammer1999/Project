//get the add to cart button element

var addToCartButton = document.querySelector('.add-to-cart-button');

//add event listener to the button

addToCartButton.addEventListener('click', function() {

    //get the product details

    var productDetails = document.querySelector('.product-details');

    //get the product name

    var productName = productDetails.querySelector('.product-name').innerText;

    //get the product price

    var productPrice = productDetails.querySelector('.product-price').innerText;

    //get the product image

    var productImage = productDetails.querySelector('.product-image').src;

    //get the product quantity

    var productQuantity = document.querySelector('.product-quantity').value;

    //create an object to store the product details

    var product = {
            
            name: productName,
    
            price: productPrice,
    
            image: productImage,
    
            quantity: productQuantity
    
        }

        //add the product to the cart

        addToCart(product);

        //function to add the product to the cart

        function addToCart(product) {

            let cartItems = localStorage.getItem('cartItems');
            if (cartItems == null) {
                cartItems = [];
            } else {
                cartItems = JSON.parse(cartItems);

            }

            cartItems.push(product);
            //check if the product is already in the cart

            //if not, add the product to the cart

            //if yes, update the quantity of the product in the cart

            //save the cart in the local storage

            localStorage.setItem('cartItems', JSON.stringify(cartItems));

            //update the cart count

            updateCartCount();

            //displat the confirmation message

            displayConfirmationMessage();

        }





});
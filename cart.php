<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Products - Trendy Mall</title>
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div class="container">
	<div class="navbar">
		<div class="logo">
		   <a href="index.php"><img src="New folder/logo.png" width="125px"></a>
		</div>
		<nav>
			<ul id="MenuItems">
				<li><a href="index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="login.php">Login</a></li>
			</ul>
		</nav>
		<a href="cart.php"><img src="New folder/cart.png" width="30px" height="30px"></a>
        <img src="New folder/menu.png" class="menu-icon" oneclick="menutoggle()">
	</div>
  </div>
<!---------------cart item details------------->
<div class="small-container cart-page">
    <table>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="new folder/buy-1.jpg">
                    <div>
                        <p>Red Printed T-shirt</p>
                        <small>Price: $50.00</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
                
            </td>
            <td><input type="number" value="1"></td>
            <td>$50.00</td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="new folder/buy-2.jpg">
                    <div>
                        <p>HRX Sports Shoes</p>
                        <small>Price: $75.00</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
                
            </td>
            <td><input type="number" value="1"></td>
            <td>$75.00</td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="new folder/buy-3.jpg">
                    <div>
                        <p>HRX Gray Tracpants</p>
                        <small>Price: $75.00</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
                
            </td>
            <td><input type="number" value="1"></td>
            <td>$75.00</td>
        </tr>
    </table>
    <div class="total-price">
        <table>
            <tr>
                <td>Subtotal</td>
                <td>$200.00</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>$35.00</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>$235.00</td>
            </tr>
        </table>
    </div>
</div>

<!-------------------Footer------------------->
    <div class="footer">
    	<div class="container">
    		<div class="row">
    			<div class="footer-col-1">
    				<h3>Download Our App</h3>
    				<p>Download App for Android amd ios mobile phone.</p>
    				<div class="app-logo">
    					<img src="New folder/play-store.png">
    					<img src="New folder/app-store.png">
    				</div>
    			</div>
    			<div class="footer-col-2">
    				<img src="New folder/logo-white.png">
    				<p>Our Purpose Is To Sustainably Make The Pleasure And Benefits Of Sports Accessible to the Many.</p>
    			</div>
    			<div class="footer-col-3">
    				<h3>Useful Links</h3>
    				<ul>
    					<li>Coupons</li>
    					<li>Blog Post</li>
    					<li>Return Policy</li>
    					<li>Join Affiliate</li>
    				</ul>
    			</div>
    			<div class="footer-col-4">
    				<h3>Follow Us</h3>
    				<ul>
    					<li>Facebook</li>
    					<li>Twitter</li>
    					<li>Instagram</li>
    					<li>You Tube</li>
    				</ul>
    			</div>
    		</div>
    		<hr>
    		<p class="copyright">Copyright 2020 - Easy Tutorials</p>
    	</div>
    </div>

<!----------------js for toogle menu----------------->

    <script>
    	var MenuItems = document.getElementById("MenuItems");

    	MenuItems.style.maxHeight = "0px"

    	function menutoogle(){
    		if(MenuItems.style.maxHeight == "0px")
    		{
    			MenuItems.style.maxHeight = "200px";
    		}
    		else
    		{
    			MenuItems.style.maxHeight = "0px";
    		}
    	}
    </script>

</body>
</html> 
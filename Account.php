<?php 
include 'Connection.php';
echo "string";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>All Products - BB Store | Ecommerce Website Design</title>
	<link rel="stylesheet" type="text/css" href="css/Style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<div class="container">
		<div class="navbar">
		<div class="logo">
			<a href="index.html"><img src="img/logo.jpg" alt="logo" width="80px"></a>
		</div>
		<nav>
			<ul id="MenuItems">
				<li><a href="index.html">Home</a></li>
				<li><a href="products.html">Products</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="Account.html">Account</a></li>
			</ul>
		</nav>
		<a href="cart.html"><img src="img/cart.png" width="30px" height="30px"></a>
		<img src="img/menu.png" class="menu-icon" onclick="menutoggle()">
	</div>
 </div>
<!-----------------account-page------------------>
	<div class="account-page">
		<div class="container">
			<div class="row">
			<div class="col-2">
				<img src="img/shoes1.png">
			</div>
			<div class="col-2">
				<div class="form-container">
					<div class="form-btn">
						<span onclick="login()">Login</span>
						<span onclick="register()">Register</span>
						<hr id="Indicator">
					</div>

					<form id="LoginForm" method="Post" action="index.html">
						<input name="username" type="text" placeholder="Username">
						<input name="password" type="password" placeholder="Password">
						<button type="submit" class="btn"><a href="">Login</a></button>
						<a href="#">Forgot password</a>
					</form>

					<form id="RegForm" method="Post" action="Account.php">
						<input type="text" placeholder="Username">
						<input type="email" placeholder="Email">
						<input type="password" placeholder="Password">
						<button name="submit" type="submit" class="btn">Register</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
  	
	<!---------------------footer--------------------------->
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="footer-col-1">
					<h3>Download Our App</h3>
					<p>Download App for Android and ios mobile phone.</p>
					<div class="app-logo">
						<img src="img/gplaystore.png">
						<img src="img/iappstore.png">
					</div>
				</div>
				<div class="footer-col-2">
					<img src="img/logo.png">
					<p>Our Purpose Is To Sustainably Make the pleasure and Benefits of Sports Accessible to the Many.</p>
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
						<li>Instagram</li>
						<li>Youtube</li>
						<li>Twitter</li>
					</ul>
				</div>
			</div>
			<hr>
			<p class="copyright">Copyright 2022 &copy; BB Store</p>
		</div>
	</div>
	<!------------js for toggle menu----------->
	<script >
		var MenuItems = document.getElementById('MenuItems');
		MenuItems.style.maxHeight = "0px";

		function menutoggle() {
			if(MenuItems.style.maxHeight == "0px"){
				MenuItems.style.maxHeight = "200px";
			}else{
				MenuItems.style.maxHeight = "0px";
			}
		}
	</script>
	<!------------js for toggle form----------->
	<script>
		var LoginForm = document.getElementById("LoginForm");
		var RegForm = document.getElementById("RegForm");
		var Indicator = document.getElementById("Indicator");

		function register(){
			RegForm.style.transform = "translateX(0px)";
			LoginForm.style.transform = "translateX(0px)";
			Indicator.style.transform = "translateX(100px)"; 
		}

		function login(){
			RegForm.style.transform = "translateX(300px)";
			LoginForm.style.transform = "translateX(300px)";
			Indicator.style.transform = "translateX(0px)";
		}

	</script>
</body>
</html>
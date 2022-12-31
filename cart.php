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

	<!-- header -->
	<?php
	include("header.php");
	?>
 <!------------------Cart items details------------>
 <div class="small-container cart-page">
 	<table>
 		<tr>
 			<th>Product</th>
 			<th>Quentity</th>
 			<th>Subtotal</th>
 		</tr>
 		<tr>
 			<td>
 				<div class="cart-info">
 					<img src="img/shoes1.png">
 					<div>
 						<p>White Shoes</p>
 						<small>Price:1050₹</small><br>
 						<a href="">Remove</a>
 					</div>
 				</div>
 			</td>
 			<td><input type="number" value="1"></td>
 			<td>1050₹</td>
 		</tr>
 		<tr>
 			<td>
 				<div class="cart-info">
 					<img src="img/Watch1.png">
 					<div>
 						<p>Watch for man</p>
 						<small>Price:1999₹</small><br>
 						<a href="">Remove</a>
 					</div>
 				</div>
 			</td>
 			<td><input type="number" value="1"></td>
 			<td>1999₹</td>
 		</tr>
 		<tr>
 			<td>
 				<div class="cart-info">
 					<img src="img/watch1.jpg">
 					<div>
 						<p>Watch for man</p>
 						<small>Price:1999₹</small><br>
 						<a href="#">Remove</a>
 					</div>
 				</div>
 			</td>
 			<td><input type="number" value="1"></td>
 			<td>1999₹</td>
 		</tr>
 	</table>


 	<div class="total-price">
 		<table>
 			<tr>
 				<td>Subtotal</td>
 				<td>5550₹</td>
			</tr>
			<tr>
 				<td>Tax</td>
 				<td>20₹</td>
			</tr>
			<tr>
 				<td>total</td>
 				<td>5570₹</td>
			</tr>
 		</table>
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
	
</body>
</html>
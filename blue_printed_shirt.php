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
 <!--------------------------Single Product Details------------------->

<div class="small-container single-product">
	<div class="row">
		<div class="col-2">
			<img src="img/Shirt8.jpg" width="100%" id="ProductImg">
			<div class="small-img-row">
				<div class="small-img-col">
					<img src="img/Shirt8.jpg" width="80%" class="small-img">
				</div>
				<div class="small-img-col">
					<img src="img/blue1.webp" width="85%" class="small-img">
				</div>
				<div class="small-img-col">
					<img src="img/blue2.webp" width="102%" class="small-img">
				</div>
				<div class="small-img-col">
					<img src="img/blue3.webp" width="100%" class="small-img">
				</div>
			</div>
		</div>
		<div class="col-2">
			<p>Home / Shirt</p>
			<h1>Dark-Blue Printed Shirt</h1>
			<h4>950₹</h4>
			<select>
				<option>Select Size</option>
				<option>XXL</option>
				<option>XL</option>
				<option>Large</option>
				<option>Medium</option>
				<option>Small</option>
			</select>
			<input type="number" value="1">
			<a href=""class="btn">Add to Cart</a>
			<h3>Product Details <i class="fa fa-indent"></i></h3>
			<br>
			<p>Super Weston in Regular fit using soft and breathable 100% cotton fabric. This cool shirt will keep you relaxed throughout the day. With its great fit and premium quality fabric, this piece is a must-have. Made from rich quality cotton, this shirt is light in weight and easy to maintain too. Further, it comes in a solid pattern with a fine finish that will entice the stylish you in just a mere glance. Comfortable to wear all day long, this shirt is stylishly designed for the fashion forward men out there. Team it up with a pair of jeans and loafers to show off your quirky fashion sense.</p>
		</div>
	</div>
</div>
   <!-------title------------>
   <div class="small-container">
   	<div class="row row-2">
   		<h2>Related Products</h2>
   		<a href="#"><p>View More</p></a>
   	</div>
   </div>

	<!----------products---------->
	<div class="small-container">
		<div class="row">
		<div class="col-4">
		<a href="blue_shirt.php">	<img src="img/blue_shirt2.webp" class="da">
			<h4>Blue Shirt</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
			</div>
			<p>950₹</p>
		</div>
		<div class="col-4">
			<a href="white_shoes.php"><img src="img/shoes4.jpg"></a>
			<h4>White Shoes</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p>1050₹</p>
		</div>
		<div class="col-4">
			<a href="green_shirt.php"><img src="img/green3.jpg" class="db">
			<h4>Green Printed Shirt</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
			</div>
			<p>950₹</p>
		</div>
		<div class="col-4">
			<a href="red_shirt.php"><img src="img/Shirt.jpg" class="db"></a>
			<h4>Red Shirt</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p>750₹</p>
		</div>
	</div>
</div>
	<!---------------------footer--------------------------->
	<?php
		include("footer.php");
	?>
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
	<!-------------js for Product Gallery------------------->
	<script>
		var ProductImg = document.getElementById("ProductImg");
		var SmallImg = document.getElementsByClassName("small-img");

		SmallImg[0].onclick = function(){
			ProductImg.src = SmallImg[0].src;
		}
		SmallImg[1].onclick = function(){
			ProductImg.src = SmallImg[1].src;
		}
		SmallImg[2].onclick = function(){
			ProductImg.src = SmallImg[2].src;
		}
		SmallImg[3].onclick = function(){
			ProductImg.src = SmallImg[3].src;
		}
	</script>
</body>
</html>
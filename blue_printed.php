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
			<img src="img/t-shirt2.jpg" width="100%" id="ProductImg">
			<div class="small-img-row">
				<div class="small-img-col">
					<img src="img/t-shirt2.jpg" width="100%" class="small-img">
				</div>
				<div class="small-img-col">
					<img src="img/t-shirt3.jpg" width="100%" class="small-img">
				</div>
				<div class="small-img-col">
					<img src="img/t-shirt4.jpg" width="100%" class="small-img">
				</div>
				<div class="small-img-col">
					<img src="img/t-shirt5.jpg" width="100%" class="small-img">
				</div>
			</div>
		</div>
		<div class="col-2">
			<p>Home / t-Shirt</p>
			<h1>Dark-Blue Printed Shirt</h1>
			<h4>550₹</h4>
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
			<p>Give your summer wardrobe a style upgrade with the Men's Active Shirt. Team it with a pair of shorts for your office work or denims for an evening out with the guys.</p>
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
					<img src="img/Watch1.png">
					<h4>Watch for man</h4>
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-o"></i>
					</div>
					<p>1999₹</p>
				</div>
				<div class="col-4">
					<img src="img/shoes4.jpg">
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
					<img src="img/Watch.png">
					<h4>Watch for man</h4>
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
					<img src="img/Shirt.jpg">
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
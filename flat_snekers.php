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
				<li><a href="Info.html">About</a></li>
				<li><a href="contactus.html">Contact</a></li>
				<li><a href="Account.html">Account</a></li>
			</ul>
		</nav>
		<a href="cart.html"><img src="img/cart.png" width="30px" height="30px"></a>
		<img src="img/menu.png" class="menu-icon" onclick="menutoggle()">
	</div>
 </div>
 <!--------------------------Single Product Details------------------->

<div class="small-container single-product">
	<div class="row">
		<div class="col-2">
			<img src="img/sne1.webp" width="98%" id="ProductImg">
			<div class="small-img-row">
				<div class="small-img-col">
					<img src="img/sne1.webp" width="90%" class="small-img">
				</div>
				<div class="small-img-col">
					<img src="img/sne2.webp" width="90%" class="small-img">
				</div>
				<div class="small-img-col">
					<img src="img/sne3.webp" width="90%" class="small-img">
				</div>
				<div class="small-img-col">
					<img src="img/sne4.webp" width="90%" class="small-img">
				</div>
			</div>
		</div>
		<div class="col-2">
			<p>Home / Shoes</p>
			<h1>Flat Sneaker</h1>
			<h4>2050₹</h4>
			<select>
				<option>Select Size</option>
				<option>8</option>
				<option>9</option>
				<option>10</option>
				<option>12</option>ss
			</select>
			<input type="number" value="1">
			<a href=""class="btn">Add to Cart</a>
			<h3>Product Details <i class="fa fa-indent"></i></h3>
			<br>
			<p>We brings to you this pair of Shoes which look attractive and stylish. They have been designed for men who need a pair of comfortable footwear for their day trips. The shoes are made from good material and is available in a shade of Multicolor. It features a Lace-up closure for a proper and snug fit. Shoes for boys designs its footwear keeping in mind the connection between comfort and style which can be observed in its products.</p>
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
        <a href="blue_shirt.html">	<img src="img/blue_shirt2.webp" class="da">
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
            <a href="white_shoes.html"><img src="img/shoes4.jpg"></a>
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
            <a href="green_shirt.html"><img src="img/green3.jpg" class="db">
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
            <a href="red_shirt.html"><img src="img/Shirt.jpg" class="db"></a>
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
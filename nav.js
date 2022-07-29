const createNav = () => {
	let nav = document.querySelector('.navbar');

	nav.innerHTML = `
		<div class="nav">
			<img src="img/dark-logo.png" class="brand-logo">
			<div class="nav-items">
				<div class="search">
					<input type="text" class="search-box" placeholder="search brand, product">
					<button class="search-btn">Search</button>
				</div>
				<a href="#"><img src="img/user.png"></a>
				<a href="#"><img src="img/cart.png"></a>
			</div>
		</div>
		<ul class="links-container">
			<li class="link-items"><a href="index.html" class="link">home</a></li>
			<li class="link-items"><a href="product.html" class="link">products</a></li>
			<li class="link-items"><a href="product.html" class="link">women</a></li>
			<li class="link-items"><a href="product.html" class="link">men</a></li>
			<li class="link-items"><a href="product.html" class="link">kids</a></li>
			<li class="link-items"><a href="#" class="link">accessories</a></li>
		</ul>
		`;
}

createNav();
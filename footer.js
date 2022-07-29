const createFooter = () =>{
	let footer = document.querySelector('footer');

	footer.innerHTML = `     
		<div class="footer-content">
			<img src="img/light-logo.png" class="logo">
			<div class="footer-ul-container">
				<ul class="category">
					<li class="category-title">men</li>
					<li><a href="#" class="footer-link">t-shirts</a></li>
					<li><a href="#" class="footer-link">sweatshirts</a></li>
					<li><a href="#" class="footer-link">shirts</a></li>
					<li><a href="#" class="footer-link">jeans</a></li>
					<li><a href="#" class="footer-link">trousers</a></li>
					<li><a href="#" class="footer-link">Shoes</a></li>
					<li><a href="#" class="footer-link">casuals</a></li>
					<li><a href="#" class="footer-link">sports</a></li>
					<li><a href="#" class="footer-link">watch</a></li>
				</ul>
				<ul class="category">
					<li class="category-title">women</li>
					<li><a href="#" class="footer-link">t-shirts</a></li>
					<li><a href="#" class="footer-link">sweatshirts</a></li>
					<li><a href="#" class="footer-link">shirts</a></li>
					<li><a href="#" class="footer-link">jeans</a></li>
					<li><a href="#" class="footer-link">trousers</a></li>
					<li><a href="#" class="footer-link">Shoes</a></li>
					<li><a href="#" class="footer-link">casuals</a></li>
					<li><a href="#" class="footer-link">sports</a></li>
					<li><a href="#" class="footer-link">watch</a></li>
				</ul>
			</div>
		</div>
			<p class="footer-title">about company</p>
			<p class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p class="info">support emails - help@clothing.com, customersupport@clothing.com</p>
			<p class="info">contact no - 1234567890, 1800258974</p>
			<div class="footer-social-container">
				<div>
					<a href="#" class="social-link">terms & conditions</a>
					<a href="#" class="social-link">privacy & policy</a>
				</div>

				<div>
					<a href="#" class="social-link">instagram</a>
					<a href="#" class="social-link">facebook</a>
					<a href="#" class="social-link">twitter</a>
				</div>
			</div>
			<p class="footer-credit">Clothing, Best apparels online store</p>

	`;
}
createFooter();
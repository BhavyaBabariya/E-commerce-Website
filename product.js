const productImages = document.querySelectorAll(".product-images img");
const productImageSlider = document.querySelector(".image-slider");

let activaImageSlide = 0;

productImages.forEach((item, i) =>{
	item.addEventListener('click',()=> {
		productImages[activaImageSlide].classList.remove('active');
		item.classList.add('active');
		productImageSlider.style.backgroundImage = `url('${item.src}')`;
		activaImageSlide = i;
	})
})

// toggle size btn

const sizeBtns = document.querySelectorAll('.size-radio-btn');
let checkedBtn = 0;

sizeBtns.forEach((item, i)=> {
	item.addEventListener('click',()=>{
		sizeBtns[checkedBtn].classList.remove('check');
		item.classList.add('check');
		checkedBtn = i;
	})
})
const header = document.querySelector('.header');
window.addEventListener('scroll', () =>{

	if (window.pageYOffset >= 170) {
		document.querySelector('.header-hide').classList.add('active');
		document.querySelector('.header-dropdown').classList.add('menutop');
	} else {
		document.querySelector('.header-hide').classList.remove('active');
		document.querySelector('.header-dropdown').classList.remove('menutop');
	}
});
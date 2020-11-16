const header = document.querySelector('.header');
var headerHeight = $('.header-topwrap').height()
window.addEventListener('scroll', () =>{

	if (window.pageYOffset >= headerHeight) {
		document.querySelector('.header-hide').classList.add('active');
		document.querySelector('.header-dropdown').classList.add('menutop');
		document.querySelector('.header-dropdown-vis').classList.add('menutop');
	} else {
		document.querySelector('.header-hide').classList.remove('active');
		document.querySelector('.header-dropdown').classList.remove('menutop');
		document.querySelector('.header-dropdown-vis').classList.remove('menutop');
	}
});

$(function(){
	$('.header__menu-res, .header-dropdown__inner').on('mouseover', function(){
		$('.header-dropdown-vis').removeClass('hide');
		$('.header-dropdown-vis').addClass('active');
		$('.header-dropdown').removeClass('hide');
		$('.header-dropdown').addClass('active');
	});
	$('.header__menu-other').on('mouseover', function(){
		$('.header-dropdown-vis').removeClass('active');
		$('.header-dropdown').removeClass('active');
	});
	$('.header-dropdown').on('mouseleave', function(){
		$('.header-dropdown-vis').removeClass('active');
		$('.header-dropdown').removeClass('active');
	});
	$('.burger-btn').on('click', function(){
		$('.header-dropdown-vis').toggleClass('active');
		$('.header-dropdown-vis').removeClass('hide');
		$('.header-dropdown').removeClass('hide');
		$('.header-dropdown').toggleClass('active');
	});

	$('.header__callback').magnificPopup({
		type:'inline',
		midClick: true,
		showCloseBtn: true,
		mainClass: 'mfp-with-zoom',
		zoom: {
			enabled: true,
			duration: 300,
			easing: 'ease-in-out',
			opener: function(openerElement) {
				return openerElement.is('img') ? openerElement : openerElement.find('img');
			}
		}
	});
	$('.scroll').click(function(){
		$('html, body').animate({scrollTop:0}, 'slow');
		return false;
	});
});
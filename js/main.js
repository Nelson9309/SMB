const header = document.querySelector('.header');
var headerHeight = $('.header-topwrap').height()
window.addEventListener('scroll', () =>{

	if (window.pageYOffset >= headerHeight) {
		document.querySelector('.header-hide').classList.add('active');
		document.querySelector('.header-dropdown').classList.add('menutop');
		document.querySelector('.vis').classList.add('menutop');
	} else {
		document.querySelector('.header-hide').classList.remove('active');
		document.querySelector('.header-dropdown').classList.remove('menutop');
		document.querySelector('.vis').classList.remove('menutop');
	}
});
$(function(){
	$(".solutions__inner").on("click","a", function (event) {
		event.preventDefault();
		var id  = $(this).attr('href'),
		top = $(id).offset().top;
		$('body,html').animate({scrollTop: top - 50}, 1500);
	});
	$('.header__menu-res, .header-dropdown__inner').on('mouseenter', function(){
		$('.vis').removeClass('hide');
		$('.vis').addClass('active');
		$('.header-drop').addClass('active');
		$('.logo__smb').addClass('active2');
	});
	$('.header__menu-other').on('mouseleave', function(){
		$('.vis').removeClass('active');
		$('.header-drop').removeClass('active');
	});
	$('.header-drop').on('mouseleave', function(){
		$('.vis').removeClass('active');
		$('.header-drop').removeClass('active');
		$('.logo__smb').removeClass('active2');
	});
	if (window.matchMedia("(max-width: 980px)").matches) {
		$('.header-drop').addClass('header-dropdown-mob').removeClass('header-drop');
		$('.header__menu-res').addClass('header__menu-click');
		$('.vis').addClass('vis-mob').removeClass('vis');
		$('.logo__smb').removeClass('active2');
		$('.header__menu-click').on('click', function(){
			$('.header-dropdown__inner').slideToggle();
			$(this).toggleClass('active');
		});
		$('.header-dropdown__item-categorytitle').on('click', function(){
			$(this).toggleClass('active');
			$(this).parent().siblings().slideToggle();
		});
	} else {}
	$('.burger-btn').on('click', function(){
		$(this).toggleClass('active');
		$('.vis-mob').toggleClass('active');
		$('.vis-mob').removeClass('hide');
		$('.header-dropdown-mob').toggleClass('active');
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

$('.header-dropdown__item-category a:empty').parent().addClass('active2');
$('.header-dropdown__item-categorytitle a:empty').parent('.header-dropdown__item-list').addClass('active2');







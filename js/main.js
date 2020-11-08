 var swiper = new Swiper('.swiper-container', {
 	slidesPerView: 4,
 	spaceBetween: 30,
 	slidesPerGroup: 4,
 	pagination: {
 		el: '.swiper-pagination',
 		clickable: true,
 	},
 });

function offset(el) {
	var rect = el.getBoundingClientRect(),
	scrollTop = window.pageYOffset || document.documentElement.scrollTop;
	return { top: rect.top + scrollTop }
}
//menu


var btnres = document.querySelectorAll('.header__menu-res');
var dropres = document.querySelector('.menu-dropdownres');

function closeBigImgAndContainerA(e)
{
    dropres.classList.remove('hide');
	dropres.classList.add('active');
};

for (var i = 0; i < btnres.length; i++) {
   btnres[i].addEventListener('mouseenter', closeBigImgAndContainerA); 
}

document.querySelector('.menu-dropdownres').addEventListener('mouseover', function(){
	dropres.classList.add('active');
});
document.querySelector('.menu-dropdownres').addEventListener('mouseout', function(){
	dropres.classList.remove('active');
});



// //header fixed anim
const header = document.querySelector('.header');

window.addEventListener('scroll', function() {

	if (window.pageYOffset >= 170) {
		document.querySelector('.header-hide').classList.add('active');
	} else {
		document.querySelector('.header-hide').classList.remove('active');

	}
});


//ПАРАЛАКС 1

let didScroll = false;
let paralaxTitles = document.querySelectorAll('.header-paralax');

const scrollInProgress = () => {
	didScroll = true
}

const raf = () => {
	if(didScroll) {
		paralaxTitles.forEach((element, index) => {
			element.style.transform = "translateY(-"+ window.scrollY / 30 + "%)"
		})
		didScroll = false;
	}
	requestAnimationFrame(raf);
}


requestAnimationFrame(raf);
window.addEventListener('scroll', scrollInProgress)


//ПАРАЛАКС 2


let didScrollA = false;
let paralaxTitlesA = document.querySelectorAll('.decision-paralax');



var div = document.querySelector('.decision');
var divOffset = offset(div).top;


const scrollInProgressA = () => {
	didScrollA = true
}

const rafA = () => {
	if(didScrollA) {
		paralaxTitlesA.forEach((element, index) => {
			element.style.transform = "translateY(-"+ (window.pageYOffset - divOffset + 700) / 15 + "%)"
		})
		didScrollA = false;
	}
	requestAnimationFrame(rafA);
}


requestAnimationFrame(rafA);
window.addEventListener('scroll', scrollInProgressA)



//ПАРАЛАКС 3



let didScrollB = false;
let paralaxTitlesB = document.querySelectorAll('.question-paralax');

var divB = document.querySelector('.question');
var divOffsetB = offset(divB).top;


const scrollInProgressB = () => {
	didScrollB = true
}

const rafB = () => {
	if(didScrollB) {
		paralaxTitlesB.forEach((element, index) => {
			element.style.transform = "translateY(-"+ (window.pageYOffset - divOffsetB + 700) / 40 + "%)"
		})
		didScrollB = false;
	}
	requestAnimationFrame(rafB);
}
requestAnimationFrame(rafB);
window.addEventListener('scroll', scrollInProgressB)

//menu
// var btnres = document.querySelectorAll('.header__menu-res');
// var dropres = document.querySelector('.menu-dropdownres');
// var dropressub = document.querySelector('.header-dropdown-black');


// function closeBigImgAndContainerA(e)
// {
// 	dropres.classList.remove('hide');
// 	dropres.classList.add('active');
// 	dropressub.classList.add('active');
// };

// for (var i = 0; i < btnres.length; i++) {
// 	btnres[i].addEventListener('mouseenter', closeBigImgAndContainerA); 
// }

// dropres.addEventListener('mouseover', () =>{
// 	dropres.classList.add('active');
// 	dropressub.classList.add('active');
// });
// dropres.addEventListener('mouseleave', () =>{
// 	dropres.classList.remove('active');
// 	dropressub.classList.remove('active');
// });


// //header fixed anim
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


//ПАРАЛАКС 1


// let didScroll = false;
// let paralaxTitles = document.querySelectorAll('.header-paralax');

// const scrollInProgress = () => {
// 	didScroll = true
// }

// const raf = () => {
// 	if(didScroll) {
// 		paralaxTitles.forEach((element, index) => {
// 			element.style.transform = "translateY(-"+ window.scrollY / 30 + "%)"
// 		})
// 		didScroll = false;
// 	}
// 	requestAnimationFrame(raf);
// }


// requestAnimationFrame(raf);
// window.addEventListener('scroll', scrollInProgress);


// //ПАРАЛАКС 2
// function offset(el) {
//     var rect = el.getBoundingClientRect(),
//     scrollTop = window.pageYOffset || document.documentElement.scrollTop;
//     return { top: rect.top + scrollTop }
// }

// let didScrollA = false;
// let paralaxTitlesA = document.querySelectorAll('.decision-paralax');



// var div = document.querySelector('.decision');
// var divOffset = offset(div).top;


// const scrollInProgressA = () => {
// 	didScrollA = true
// }

// const rafA = () => {
// 	if(didScrollA) {
// 		paralaxTitlesA.forEach((element, index) => {
// 			element.style.transform = "translateY(-"+ (window.pageYOffset - divOffset + 700) / 15 + "%)"
// 		})
// 		didScrollA = false;
// 	}
// 	requestAnimationFrame(rafA);
// }


// requestAnimationFrame(rafA);
// window.addEventListener('scroll', scrollInProgressA);



// //ПАРАЛАКС 3



// let didScrollB = false;
// let paralaxTitlesB = document.querySelectorAll('.question-paralax');

// var divB = document.querySelector('.question');
// var divOffsetB = offset(divB).top;


// const scrollInProgressB = () => {
// 	didScrollB = true
// }

// const rafB = () => {
// 	if(didScrollB) {
// 		paralaxTitlesB.forEach((element, index) => {
// 			element.style.transform = "translateY(-"+ (window.pageYOffset - divOffsetB + 700) / 40 + "%)"
// 		})
// 		didScrollB = false;
// 	}
// 	requestAnimationFrame(rafB);
// }
// requestAnimationFrame(rafB);
// window.addEventListener('scroll', scrollInProgressB);


//Solution Paralax

// let didScrollO = false;
// let paralaxTitlesO = document.querySelectorAll('.solutions-paralax');



// var divO = document.querySelector('.solutions');
// var divOffsetO = offset(divO).top;


// const scrollInProgressO = () => {
// 	didScrollO = true
// }

// const rafO = () => {
// 	if(didScrollO) {
// 		paralaxTitlesO.forEach((element, index) => {
// 			element.style.transform = "translateY(-"+ (window.pageYOffset - divOffsetO + 700) / 60 + "%)"
// 		})
// 		didScrollO = false;
// 	}
// 	requestAnimationFrame(rafO);
// }


// requestAnimationFrame(rafO);
// window.addEventListener('scroll', scrollInProgressO);

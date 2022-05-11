/* -------------------------------------------

Name: 		vCard
Version:  	1.0
Author:		Angelika Specter (Spectra)
Portfolio:  https://www.linkedin.com/in/angelikaspecter/

p.s. I am available for Freelance hire (UI design, web development).

------------------------------------------- */
$(function () {

	// scrollbar
	Scrollbar.use(OverscrollPlugin);
	Scrollbar.init(document.querySelector('#scrollbar'), {
		damping: 0.05,
		renderByPixel: true,
		continuousScrolling: true,
	});
	Scrollbar.init(document.querySelector('#scrollbar2'), {
		damping: 0.05,
		renderByPixel: true,
		continuousScrolling: true,
	});

	// page loading
	$(document).ready(function () {
		anime({
			targets: '.preloader .preloader-content',
			opacity: [0, 1],
			delay: 200,
			duration: 600,
			easing: 'linear',
			complete: function (anim) {

			}
		});
		anime({
			targets: '.preloader',
			opacity: [1, 0],
			delay: 2200,
			duration: 400,
			easing: 'linear',
			complete: function (anim) {
				$('.preloader').css('display', 'none');
			}
		});
	});

	var bar = new ProgressBar.Line(preloader, {
		strokeWidth: 1,
		easing: 'easeInOut',
		duration: 1400,
		delay: 750,
		trailWidth: 1,
		svgStyle: {
			width: '100%',
			height: '100%'
		},
		step: (state, bar) => {
			bar.setText(Math.round(bar.value() * 100) + '%');
		}
	});

	bar.animate(1);

	// Menu
	$('.current-menu-item a').clone().appendTo('.current-page');

	$('.map-overlay').on('click', function () {
		$(this).addClass('active');
	});

	$('.info-bar-btn').on('click', function () {
		$('.info-bar').toggleClass('active');
		$('.menu-bar-btn').toggleClass('disabled');
	});

	$('.menu-bar-btn').on('click', function () {
		$('.menu-bar-btn , .menu-bar').toggleClass("active");
		$('.info-bar-btn').toggleClass('disabled');
	});

	$('.info-bar-btn , .menu-bar-btn').on('click', function () {
		$('.content').toggleClass('active');
	});

	$('.curtain , .mobile-top-bar').on('click', function () {
		$('.menu-bar-btn , .menu-bar , .info-bar , .content , .menu-bar-btn , .info-bar-btn').removeClass('active , disabled');
	});

	$('.menu-item').on('click', function () {
		$('.menu-bar-btn , .menu-bar , .info-bar , .content , .menu-bar-btn , .info-bar-btn').removeClass('active , disabled');
	});

	// counters
	anime({
		targets: '.counter-frame',
		opacity: [0, 1],
		duration: 800,
		delay: 2300,
		easing: 'linear',
	});

	anime({
		targets: '.counter',
		delay: 1300,
		opacity: [1, 1],
		complete: function (anim) {
			$('.counter').each(function () {
				$(this).prop('Counter', 0).animate({
					Counter: $(this).text()
				}, {
					duration: 2000,
					easing: 'linear',
					step: function (now) {
						$(this).text(Math.ceil(now));
					}
				});
			});
		}
	});

	// progressbars
	var bar = new ProgressBar.Circle(circleprog1, {
		strokeWidth: 4,
		easing: 'easeInOut',
		duration: 1000,
		delay: 2500,
		trailWidth: 4,
		step: function (state, circle) {
			var value = Math.round(circle.value() * 100);
			if (value === 0) {
				circle.setText('');
			} else {
				circle.setText(value);
			}
		}
	});

	bar.animate(1);

	var bar = new ProgressBar.Circle(circleprog2, {
		strokeWidth: 4,
		easing: 'easeInOut',
		duration: 1000,
		delay: 2600,
		trailWidth: 4,
		step: function (state, circle) {
			var value = Math.round(circle.value() * 100);
			if (value === 0) {
				circle.setText('');
			} else {
				circle.setText(value);
			}
		}
	});

	bar.animate(1);

	var bar = new ProgressBar.Circle(circleprog3, {
		strokeWidth: 4,
		easing: 'easeInOut',
		duration: 1000,
		delay: 2700,
		trailWidth: 4,
		step: function (state, circle) {
			var value = Math.round(circle.value() * 100);
			if (value === 0) {
				circle.setText('');
			} else {
				circle.setText(value);
			}
		}
	});

	bar.animate(0.17);

	var bar = new ProgressBar.Line(lineprog1, {
		strokeWidth: 1,
		easing: 'easeInOut',
		duration: 1400,
		delay: 2800,
		trailWidth: 1,
		svgStyle: {
			width: '100%',
			height: '100%'
		},
		step: (state, bar) => {
			bar.setText(Math.round(bar.value() * 100) + '%');
		}
	});

	bar.animate(.9);

	var bar = new ProgressBar.Line(lineprog2, {
		strokeWidth: 1,
		easing: 'easeInOut',
		duration: 1400,
		delay: 2900,
		trailWidth: 1,
		svgStyle: {
			width: '100%',
			height: '100%'
		},
		step: (state, bar) => {
			bar.setText(Math.round(bar.value() * 100) + '%');
		}
	});

	bar.animate(.35);

	var bar = new ProgressBar.Line(lineprog3, {
		strokeWidth: 1,
		easing: 'easeInOut',
		duration: 1400,
		delay: 3000,
		trailWidth: 1,
		svgStyle: {
			width: '100%',
			height: '100%'
		},
		step: (state, bar) => {
			bar.setText(Math.round(bar.value() * 100) + '%');
		}
	});

	bar.animate(.0);

	var bar = new ProgressBar.Line(lineprog4, {
		strokeWidth: 1,
		easing: 'easeInOut',
		duration: 1400,
		delay: 3100,
		trailWidth: 1,
		svgStyle: {
			width: '100%',
			height: '100%'
		},
		step: (state, bar) => {
			bar.setText(Math.round(bar.value() * 100) + '%');
		}
	});

	bar.animate(.15);

	var bar = new ProgressBar.Line(lineprog5, {
		strokeWidth: 1,
		easing: 'easeInOut',
		duration: 1400,
		delay: 3200,
		trailWidth: 1,
		svgStyle: {
			width: '100%',
			height: '100%'
		},
		step: (state, bar) => {
			bar.setText(Math.round(bar.value() * 100) + '%');
		}
	});

	bar.animate(.27);

	var bar = new ProgressBar.Line(softskill1, {
		strokeWidth: 0.5,
		easing: 'easeInOut',
		duration: 1400,
		delay: 3200,
		trailWidth: 0.5,
		svgStyle: {
			width: '100%',
			height: '100%'
		},
		step: (state, bar) => {
			bar.setText(Math.round(bar.value() * 100) + '%');
		}
	});

	bar.animate(.85);

	var bar = new ProgressBar.Line(softskill2, {
		strokeWidth: 0.5,
		easing: 'easeInOut',
		duration: 1400,
		delay: 3200,
		trailWidth: 0.5,
		svgStyle: {
			width: '100%',
			height: '100%'
		},
		step: (state, bar) => {
			bar.setText(Math.round(bar.value() * 100) + '%');
		}
	});

	bar.animate(.75);

	var bar = new ProgressBar.Line(softskill3, {
		strokeWidth: 0.5,
		easing: 'easeInOut',
		duration: 1400,
		delay: 3200,
		trailWidth: 0.5,
		svgStyle: {
			width: '100%',
			height: '100%'
		},
		step: (state, bar) => {
			bar.setText(Math.round(bar.value() * 100) + '%');
		}
	});

	bar.animate(.95);

	var bar = new ProgressBar.Line(softskill4, {
		strokeWidth: 0.5,
		easing: 'easeInOut',
		duration: 1400,
		delay: 3200,
		trailWidth: 0.5,
		svgStyle: {
			width: '100%',
			height: '100%'
		},
		step: (state, bar) => {
			bar.setText(Math.round(bar.value() * 100) + '%');
		}
	});

	bar.animate(.67);

	var bar = new ProgressBar.Line(softskill5, {
		strokeWidth: 0.5,
		easing: 'easeInOut',
		duration: 1400,
		delay: 3200,
		trailWidth: 0.5,
		svgStyle: {
			width: '100%',
			height: '100%'
		},
		step: (state, bar) => {
			bar.setText(Math.round(bar.value() * 100) + '%');
		}
	});

	bar.animate(.70);

	var bar = new ProgressBar.Line(hardskill1, {
		strokeWidth: 0.5,
		easing: 'easeInOut',
		duration: 1400,
		delay: 3200,
		trailWidth: 0.5,
		svgStyle: {
			width: '100%',
			height: '100%'
		},
		step: (state, bar) => {
			bar.setText(Math.round(bar.value() * 100) + '%');
		}
	});

	bar.animate(.9);

	var bar = new ProgressBar.Line(hardskill2, {
		strokeWidth: 0.5,
		easing: 'easeInOut',
		duration: 1400,
		delay: 3200,
		trailWidth: 0.5,
		svgStyle: {
			width: '100%',
			height: '100%'
		},
		step: (state, bar) => {
			bar.setText(Math.round(bar.value() * 100) + '%');
		}
	});

	bar.animate(.35);

	var bar = new ProgressBar.Line(hardskill3, {
		strokeWidth: 0.5,
		easing: 'easeInOut',
		duration: 1400,
		delay: 3200,
		trailWidth: 0.5,
		svgStyle: {
			width: '100%',
			height: '100%'
		},
		step: (state, bar) => {
			bar.setText(Math.round(bar.value() * 100) + '%');
		}
	});

	bar.animate(0);

	var bar = new ProgressBar.Line(hardskill4, {
		strokeWidth: 0.5,
		easing: 'easeInOut',
		duration: 1400,
		delay: 3200,
		trailWidth: 0.5,
		svgStyle: {
			width: '100%',
			height: '100%'
		},
		step: (state, bar) => {
			bar.setText(Math.round(bar.value() * 100) + '%');
		}
	});

	bar.animate(.15);

	var bar = new ProgressBar.Line(hardskill5, {
		strokeWidth: 0.5,
		easing: 'easeInOut',
		duration: 1400,
		delay: 3200,
		trailWidth: 0.5,
		svgStyle: {
			width: '100%',
			height: '100%'
		},
		step: (state, bar) => {
			bar.setText(Math.round(bar.value() * 100) + '%');
		}
	});

	bar.animate(.27);
});

// age
var now = new Date(); //Текущя дата
var today = new Date(now.getFullYear(), now.getMonth(), now.getDate()); //Текущя дата без времени
var dob = new Date(1990, 5, 05); //Дата рождения
var dobnow = new Date(today.getFullYear(), dob.getMonth(), dob.getDate()); //ДР в текущем году
var age; //Возраст

//Возраст = текущий год - год рождения
age = today.getFullYear() - dob.getFullYear();
//Если ДР в этом году ещё предстоит, то вычитаем из age один год
if (today < dobnow) {
	age = age - 1;
}

$("#age").text(age);

// Year Experience
let startExp = new Date(2021, 1, 15); //Дата начала
let yearExp = today.getFullYear() - startExp.getFullYear();
let monthExp = today.getMonth() - startExp.getMonth();

if (today < dobnow) {
	yearExp = yearExp - 1;
}

for (let i = 0; i < monthExp; i++) {
	if (monthExp === 12) {
		monthExp = 0;
		yearExp = today.getFullYear() - startExp.getFullYear();
	} else if ((today.getMonth() && today.getDate()) === (startExp.getMonth() && startExp.getDate())) {
		monthExp;
		yearExp = today.getFullYear() - startExp.getFullYear();
	} else {
		monthExp = (today.getMonth() - startExp.getMonth()) - 1;
		yearExp = today.getFullYear() - startExp.getFullYear();
	}
}

$("#year").text(yearExp);
$("#month").text(monthExp);

// Banner text
var typed = new Typed('#cv-code-text', {
	strings: [" HTML/CSS/JS/PHP", " WordPress/Elementor"],
	typeSpeed: 110, // скорость набора
	backSpeed: 50, // скорость удаления текста
	startDelay: 0, // изначальная задержка перед набором
	backDelay: 500, // пауза перед удалением текста
	loop: true, // повтор (true или false)
	loopCount: false, // число повтором, false = бесконечно
	showCursor: true,
	attr: null, // атрибут
});

// portfolio filter
filterSelection("all")
function filterSelection(c) {
	var x, i;
	x = document.getElementsByClassName("filter");
	if (c == "all") c = "";
	for (i = 0; i < x.length; i++) {
		AddClass(x[i], "hide");
		if (x[i].className.indexOf(c) > -1) RemoveClass(x[i], "hide");
	}
	$("#filter button.btn-link").click(function (e) {
		e.preventDefault();
		$("button.btn-link").removeClass("active");
		$(this).toggleClass('active');
	})
}

// Show filtered elements
function AddClass(element, name) {
	var i, arr1, arr2;
	arr1 = element.className.split(" ");
	arr2 = name.split(" ");
	for (i = 0; i < arr2.length; i++) {
		if (arr1.indexOf(arr2[i]) == -1) {
			element.className += " " + arr2[i];
		}
	}
}

// Hide elements that are not selected
function RemoveClass(element, name) {
	var i, arr1, arr2;
	arr1 = element.className.split(" ");
	arr2 = name.split(" ");
	for (i = 0; i < arr2.length; i++) {
		while (arr1.indexOf(arr2[i]) > -1) {
			arr1.splice(arr1.indexOf(arr2[i]), 1);
		}
	}
	element.className = arr1.join(" ");
}

//Translate
function Translate() {
	//initialization
	this.init = function (attribute, lng) {
		this.attribute = attribute;
		this.lng = lng;
	};
	//translate
	this.process = function () {
		var _self = this;
		var xrhFile = new XMLHttpRequest();
		//load content data 
		xrhFile.open("GET", "./translation/" + this.lng + ".json", false);
		xrhFile.onreadystatechange = function () {
			if (xrhFile.readyState === 4) {
				if (xrhFile.status === 200 || xrhFile.status == 0) {
					var LngObject = JSON.parse(xrhFile.responseText);
					console.log(LngObject["name1"]);
					var allDom = document.getElementsByTagName("*");
					for (var i = 0; i < allDom.length; i++) {
						var elem = allDom[i];
						var key = elem.getAttribute(_self.attribute);
						if (key != null) {
							console.log(key);
							elem.innerHTML = LngObject[key];
						}
					}
				}
			}
		};
		xrhFile.send();
	};
}

// Change language
function loadNewLang(new_lang) {
	var translate = new Translate();
	var currentLng = new_lang;
	var attributeName = 'data-lang';
	translate.init(attributeName, currentLng);
	translate.process();
}
loadNewLang('ua');
$(".language-switcher").on("click", function (e) {
	e.preventDefault();
	if ($(this).hasClass('ua')) {
		$(this).toggleClass('en ua').text('EN');
		loadNewLang('ua');
		ln_preloader();
	} else if ($(this).hasClass('en')) {
		$(this).toggleClass('ua en').text('UA');
		loadNewLang('en');
		ln_preloader();
	}
});

$(".cv-btns .btn").on("click", function () {
	$('.main-menu .nav-link').removeClass('active');
	$('.main-menu #portfolio-tab').toggleClass('active');
	$('.tab-content .tab-pane').removeClass('active show');
	$('.tab-content .tab-pane#portfolio').toggleClass('active show');
});
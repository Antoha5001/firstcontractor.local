$(document).ready(function () {

    Modernizr.on('webp', function(result) {
        if (result) {

        } else {
            var topSlyder = document.querySelector(".top-slider");
            topSlyder.classList.remove("webp");
            topSlyder.classList.add("no-webp");
        }
    });

	//alert($(".news__small-image").height());
	setTimeout(function () {
		document.getElementsByClassName("header__logo")[0].classList.add('is-visibile');
	}, 600);

    //
	// $('.carousel').flickity({
	// 	// options
	// 	cellAlign: 'center',
	// 	contain: true,
	// 	wrapAround: true,
	// 	autoPlay: 5000,
	// 	initialIndex: 1,
	// });


	// $("#bottom_form").submit(function () {
	// 	var $this = $(this),
	// 		form_data = $this.serialize();
	// 	$.ajax({
	// 		type: "POST",
	// 		url: "/assets/templates/script/form.php",
	// 		data: form_data,
	// 		success: function () {
	// 			//console.log("123");
	// 			alert("Ваше сообщение отправленно!");
	// 		}
	// 	});
	// });


	//Верхнее меню
	var menu = {
			items: $('.top-menu__items'),
			image: $('.top-menu__image'),
			button: $('.top-menu__button'),
		},

		planshet = 960;

	$(window).resize(function () {
		var $this = $(this),
			width = window.innerWidth;

		if (width > planshet) {
			menu.items.attr('style', 'display:block');
		} else if (width < planshet && menu.image.hasClass('clicked')) {
			menu.items.attr('style', 'display:block');
		} else if (width < planshet || width == planshet) {
			menu.items.attr('style', 'display:none');
		}
	});

	menu.button.on('click', function (e) {
		e.preventDefault();
		var btn = $(this),
			btn_wrap = btn.find('.top-menu__image'),
			items = btn.siblings('.top-menu__items'),
			item = items.children('li'),
			duration = 200;
		if (!btn_wrap.hasClass('clicked')) {
			btn_wrap.addClass('clicked');
			items.stop(true, true).slideDown(duration);
		} else {
			btn_wrap.stop(true, true).removeClass('clicked');
			items.stop(true, true).slideUp(duration, function () {
			});

		}
	});
	/*Shtamps*/

	function showHidden(elements) {
		if (elements) {
			Array.prototype.forEach.call(elements, function (e) {
				var elTop = e.offsetTop,
					doc = document.documentElement,
					docTop = doc.scrollTop,
					screenHeight = doc.clientHeight;


				if (e.offsetTop < docTop + screenHeight - (e.offsetHeight + e.parentElement.offsetTop - 100)) {
					e.classList.add('is-visible');
				} else if(e.offsetTop > docTop + screenHeight - (e.offsetHeight + e.parentElement.offsetTop - 100)){
					e.classList.remove('is-visible');
				}


			});
		}
	}



	var shtamps = document.getElementsByClassName('shtamp-box');

	showHidden(shtamps);
	window.addEventListener("scroll", function () {
		showHidden(shtamps);

	});

	/*ScrollToTop*/
	(function () {

			var docEl = document.documentElement,
				timer,
				docScroll;

			function windowScroll(func) {
				window.addEventListener('scroll', func);
			}

			function scrollToTop() {
				timer = setTimeout(function () {
					scrollToTop();
				}, 20);

				if (docScroll > 0) {
					docEl.scrollTo(0, docScroll);
					docScroll = docScroll - 100;

				} else {
					clearTimeout(timer);
					docEl.scrollTo(0, 0);
				}
			}

			//Конструктор
			function Visible(settings) {
				var elem = document.getElementById(settings.id);
				//Показать элемент при скроле
				windowScroll(function () {

					if (docEl.clientHeight < docEl.scrollTop) {
						elem.classList.add('is-visible');
					} else {
						elem.classList.remove('is-visible');
					}
				});
				elem.addEventListener('click', function (e) {
					docScroll = docEl.scrollTop;
					scrollToTop();
				});
			}

			var scroller = new Visible({
				id: "scroller",
			});

	})();
	/*END ScrollToTop*/


	/*
	* Modernizr
	*/
	// if (!Modernizr.svg) {
	// 	$(".header__logo > img").attr("src", "images/logo.png");
	// 	$(".footer__logo > img").attr("src", "images/logo_white.png");
	// }

});
/*
* Карта Gooqle
*/


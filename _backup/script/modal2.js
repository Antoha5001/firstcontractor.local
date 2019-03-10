(function () {

	window.addEventListener('DOMContentLoaded', function () {

		//Конструктор формы
		// function Validator(settings) {
		// 	this.form = document.getElementById(settings.id);
		// 	this.elements = this.form.elements;
		// 	this.submit = this.form.getElementsByClassName(settings.submit)[0];
		// 	this.mailer = settings.phpScript;
		//
		// 	//Отправляет почту
		// 	this.mailPost = function(){
		// 		var recuest = new XMLHttpRequest();
		//
		// 	};
		//
		// 	//Проверяет value текущего элемента на пустую строку
		// 	function isEmpty(input) {
		// 		if (input.value === "" || input.value === undefined){
		// 			input.parentNode.classList.add('error');
		// 			return false;
		// 		} else {
		// 			input.parentNode.classList.remove('error');
		// 			return true;
		// 		}
		// 	}
		//
		// 	//Перебор элементов формы
		// 	for(var i = 0; i < this.elements.length; i++){
		//
		// 		if(this.elements[i].type === "submit") continue;
		// 		if(this.elements[i].type === "file") {
		// 			var parent = this.elements[i].parentNode,
		// 				label = parent.getElementsByTagName('label')[0];
		//
		//
		// 			this.elements[i].addEventListener('change', function () {
		//
		// 				var span = this.parentNode.getElementsByTagName('span')[0];
		// 				span.innerHTML= this.files[0].name;
		//
		// 				// console.log(this.files);
		//
		// 			});
		// 		}
		// 		if(this.elements[i].type === 'text'){
		// 			this.elements[i].addEventListener('change', function () {
		//
		// 				isEmpty(this);
		//
		// 			});
		// 		}
		//
		// 	}
		//
		// 	//Действие при нажатии на кнопку
		// 	this.onSubmit = function() {
		// 		var self = this;
		// 		this.submit.addEventListener('click', function (e) {
		// 			e.preventDefault();
		// 			e.stopPropagation();
		// 			var request = new XMLHttpRequest(),
		// 				value;
		//
		// 			for(var i = 0; i < self.elements.length; i++){
		//
		// 				if(self.elements[i].type === "submit") continue;
		// 				if(self.elements[i].type === 'text'){
		// 					if(isEmpty(self.elements[i])){
		// 						continue;
		// 					} else {
		// 						isEmpty(self.elements[i]);
		// 						return false;
		// 					}
		// 				}
		//
		//
		// 			}
		// 			value = new FormData(self.form);
		// 			request.open('POST',self.mailer);
		// 			request.onreadystatechange = function () {
		// 				if (request.readyState === 4 && request.status === 200){
		// 					// console.log(request);
		//
		// 				}
		// 			};
		// 			// console.log(self.form.elements);
		//
		// 			request.send(value);
		// 			modalBox.close();
		//
		// 		});
		// 	};
		// 	this.onSubmit();
		// }

		//Модальное окно

		var modalBox = new tingle.modal({
			cssClass : ["form-wrapper"]
		});

		//Конструктор модального окна
		function Modal(settings) {
			this.button = $(settings.button);
            console.log(this.button);
			var abc = $.get("/local/templates/.default/includes/top_form2.php",function (data) {

            });

            this.button.click(function (e) {
                modalBox.open();
                modalBox.setContent(abc.responseText);
            });

		}


		var modal = new Modal({
			button : "#header__button",
			included : "/local/templates/.default/includes/top_form.php"
		});


	});

})();
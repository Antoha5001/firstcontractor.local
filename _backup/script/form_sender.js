(function () {

    document.addEventListener("DOMContentLoaded", function () {

        $(".form-box-bottom__form").validate({
            rules : {
                name : {
                    required : true
                },
                phone : {
                    required : true
                },
                mess : {
                    required : true
                },
                assent : {
                    required : true
                }
            },
            messages: {
                name : "введите имя",
                email : "введите email",
                phone : "введите номер телефона",
                mess : "введите сообщение",
                assent : "не приняли согласие",
            }
        });

    })

})();
<?php
include('includes/head.php');
?>
<?php
include('includes/banner_1920.php');
?>
<script>
    "use strict";
    (function () {
        window.addEventListener('DOMContentLoaded', init);
        function init() {
            const sliderMy = $('.top-slider');
            if(sliderMy.length > 0){
                // console.log(bigImg);
            }
            sliderMy.slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                dots: true,
                fade: true,
                autoplay: true,
                prevArrow: '<button type="button" class="slick-prev"></button>',
                nextArrow: '<button type="button" class="slick-next"></button>',
                // appendDots: $(".top-slider_controls")
            });
        }
    })();
</script>
<?php
?>
<section class="container-fluid production-box">
    <div class="container">
        <div class="row justify-content-center">
            <!--Title-->
            <div class="col-12 ">
                <div class="box-zagolovok">
                    <a class="box-zagolovok__link" href="">Наша продукция</a>
                </div>
            </div>

                <div class="production__item">
                    <img src="images/katalog.jpg" alt="">
                    <div class="production__title-box">
                        <a href="" class="production__title">Каталоги</a>
                    </div>
                </div>

                <div class="production__item">
                    <img src="images/katalog.jpg" alt="">
                    <div class="production__title-box">
                        <a href="" class="production__title">Каталоги</a>
                    </div>
                </div>


                <div class="production__item">
                    <img src="images/katalog.jpg" alt="">
                    <div class="production__title-box">
                        <a href="" class="production__title">Каталоги</a>
                    </div>
                </div>


                <div class="production__item">
                    <img src="images/katalog.jpg" alt="">
                    <div class="production__title-box">
                        <a href="" class="production__title">Каталоги</a>
                    </div>
                </div>

                <div class="production__item">
                    <img src="images/katalog.jpg" alt="">
                    <div class="production__title-box">
                        <a href="" class="production__title">Каталоги</a>
                    </div>
                </div>

                <div class="production__item">
                    <img src="images/katalog.jpg" alt="">
                    <div class="production__title-box">
                        <a href="" class="production__title">Каталоги</a>
                    </div>
                </div>

                <div class="production__item">
                    <img src="images/katalog.jpg" alt="">
                    <div class="production__title-box">
                        <a href="" class="production__title">Каталоги</a>
                    </div>
                </div>

                <div class="production__item">
                    <img src="images/katalog.jpg" alt="">
                    <div class="production__title-box">
                        <a href="" class="production__title">Каталоги</a>
                    </div>
                </div>




        </div>
    </div>

</section>
<section class="container-fluid content">
    <div class="container content_between">
        <div class="row d-flex">
            <div class="col-12 col-lg-8">
                <div class="base-block base-block__height100">
                    <h1 class="zagolovok scroll-effects_left">Офсетная печать в&nbsp;Барнауле</h1>
                    <p>
                        <strong>ООО «Типография Графика»</strong> оснащена оборудованием, отвечающим современным требованиям, предъявляемым к качеству печати. Офсетные листовые машины, позволяют производить оперативную печать.
                    </p>
                    <p>
                        Мы изготавливаем широкий ассортимент полиграфической продукции для бизнеса – это различные буклеты, листовки, брошюры, журналы и другая печатная продукция рекламного и иного характера.
                    </p>
                    <p>
                        Печать любой продукции предполагает несколько технологических этапов:
                    </p>
                    <ul>
                        <li><span style="line-height: 1.5em;">допечатная подготовка;</span></li>
                        <li><span style="line-height: 1.5em;">непосредственно печать;</span></li>
                        <li><span style="line-height: 1.5em;">послепечатная обработка;</span></li>
                    </ul>
                    <p>
                        Каждый из этих этапов имеет свои вариации в зависимости от потребностей и вашего бюджета. В нашей типографии выполняется офсетная печать до формата А3+.
                    </p>
                </div>

            </div>

            <div class="col-12 col-lg-4">
<!--                <div class="full-stack__wrapper">-->
<!--                    <a href="#" class="full-stack__icon">-->
<!--                        <img src="images/photo-icons.svg" alt="">-->
<!--                    </a>-->
<!--                    <span class="full-stack__title">Предметная <br>фотосъёмка</span>-->
<!--                    <a href="#" class="full-stack__button">Подробнее</a>-->
<!--                </div>-->
                <div class="base-block base-block_news">
                    <div class="box-zagolovok">
                        <a class="box-zagolovok__link" href="">Новости</a>

                    </div>
                </div>
            </div>


        </div>


    </div>
</section>
<section class="service-section container_my">

    <h2 class="service-title">Наши услуги</h2>
    <div class="service-wrap wrap_my wrap_my__content ">
        <div class="service-element">
            <img class="service-element_image" src="images/services/foldmaster.jpg" alt="">
            <div class="service-element_title-wrapper">
                <h3 class="service-element_title">Фальцовка
                </h3>
            </div>
            <div class="service-element_paragraph-wrapper">
                <p class="service-element_options">30000 листов/час</p>
                <p class="service-element_options">формат А3+</p>
                <p class="service-element_paragraph">высококлассный <br>
                    фальцевальный автомат <br>
                    Multigraf FoldMaster 200 SM</p>
            </div>
        </div>
        <div class="service-element">
            <img class="service-element_image" src="images/services/predmetnaya.jpg" alt="">
            <div class="service-element_title-wrapper">
                <h3>
                    <a href=""  class="service-element_title">Предметная <br>
                        фотосъЁмка</a>
                </h3>
            </div>
            <div class="service-element_paragraph-wrapper">
                <p class="service-element_options">широкий <br>диапазон резкости</p>
                <p class="service-element_paragraph">профессиональная <br>
                    фотосъёмка для бизнеса</p>
            </div>

        </div>
    </div>

</section>
<section class="gallery">
    <h1>Пример наших работы:</h1>
    <div class="gellery-box">
        <div class="gellery-item">
            <a href="images/gallery/01.jpg"  data-fancybox="gallery" >
                <img src="images/gallery/01_thumb.jpg" alt="">
            </a>
        </div>
        <div class="gellery-item">
            <a href="images/gallery/02.jpg" data-fancybox="gallery" >
                <img src="images/gallery/02_thumb.jpg" alt="">
            </a>
        </div>
        <div class="gellery-item">
            <a href="images/gallery/03.jpg"  data-fancybox="gallery" >
                <img src="images/gallery/03_thumb.jpg" alt="">
            </a>
        </div>
        <div class="gellery-item">
            <a href="images/gallery/04.jpg"  data-fancybox="gallery" >
                <img src="images/gallery/04_thumb.jpg" alt="">
            </a>
        </div>

    </div>
</section>
<section class="container-fluid development-box">
    <div class="container development-container" style="">
        <div class="development-image-wrapper">
            <img class="development-image" src="images/bitrix.png" alt="">
            <img class="development-image-bitrix" src="images/bitrix-logo.svg" alt="">
        </div>
        <div class="development-content-wrapper">
            <h1 class="development-title">Разработка сайтов <br>
                на «1С-Битрикс»</h1>
            <p class="development-content">Профессиональная система управления<br>
                интернет-ресурсами, CMS №1 в России.<br>
                С помощью простой современной системы<br>
                вы можете создавать и поддерживать<br>
                любые проекты.</p>
            <a href="#" class="development-button"><span>ПОДРОБНЕЕ</span></a>
        </div>
    </div>
</section>
<section class="section-map_container">
    <div class="wrapper section-map_wrapper">
        <div class="section-map_contacts">
            <h2 class="section-map_title">КОНТАКТЫ:</h2>
            <span class="section-map_label">АДРЕС</span>
            <p class="section-map_paragraph">г. Барнаул,<br>
                пр-кт Строителей, 43</p>
            <span class="section-map_label">ТЕЛЕФОН</span>
            <p class="section-map_paragraph section-map_paragraph__red"><span>+7 (3852)</span> 62-33-99
            </p>
            <span class="section-map_label">E-MAIL</span>
            <p class="section-map_paragraph">3852@623399.ru</p>
        </div>
    </div>
    <div id="map" class="section-map"></div>
</section>
<script type="text/javascript">
    // Функция ymaps.ready() будет вызвана, когда
    // загрузятся все компоненты API, а также когда будет готово DOM-дерево.
    (function () {
        document.addEventListener("DOMContentLoaded", function () {
            ymaps.ready(init);
            function init(){
                // Создание карты.

                var myMap = new ymaps.Map("map", {
                    // Координаты центра карты.
                    // Порядок по умолчанию: «широта, долгота».
                    // Чтобы не определять координаты центра карты вручную,
                    // воспользуйтесь инструментом Определение координат.
                    center: [53.34476803, 83.75616299],
                    // Уровень масштабирования. Допустимые значения:
                    // от 0 (весь мир) до 19.
                    zoom: 17,
                    controls: []
                });

                var myPlacemark = new ymaps.Placemark(
                    [53.34476803, 83.75616299], {
                        // iconContent: "123"
                    }, {
                        preset: 'islands#redIcon'
                    });
                myMap.geoObjects.add(myPlacemark);
            }
        })
    })();

</script>

</div>
</div>

<?php
include('includes/bottom_forms.php');
?>

<?php
include('includes/footer.php');
?>

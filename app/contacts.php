<?php
include('includes/head.php');
?>

<?php include_once('includes/breadcrumb.php')?>
<section class="content-box container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 base-block">
                <h1 class="zagolovok">Наши контакты</h1>

                <span class="contacts_page_label">ТЕЛЕФОН</span>
                <p class="contacts_page_phone">+7 (3852) 62-30-30</p>

                <span class="contacts_page_label">e-mail</span>
                <p class="contacts_page_email">623344@mail.ru</p>

                <p>
                    <span>Алтайский край, г. Барнаул, <br />ул. Южные Мастерские, 14 Б</span>
                </p>
                <div class="map-contacts" id="map"></div>
            </div>
        </div>
    </div>
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
<!--    <script async defer-->
<!--            src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCe3SOacWSnAy63LQAheWP2s7B9I6-EU48&callback=initMap">-->
<!--    </script>-->
<!--    <script src="script/google_map.js"></script>-->
</section>

</script>
</div>
</div>

<?
include('includes/bottom_forms.php');
?>

<?
include('includes/footer.php');
?>

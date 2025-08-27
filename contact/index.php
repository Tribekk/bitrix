<?php
global $APPLICATION;
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Контакты - ФИЗИКА СЕТИ Системный интегратор IT-решений");
$APPLICATION->SetTitle("Связаться с нами");
?>
    <link rel="stylesheet" href="/contact/style.css">
	<div class="page">
        <section class="head">
            <div class="head_container">
                <h1>Контакты</h1>
            </div>
        </section>

        <section class="contacts-info-map">
            <div class="contacts-grid">
                <!-- 1 -->
                <div class="contact-card">
                    <div class="card-label">Телефон:</div>
                    <div class="card-value bold">+7 987 654 32 10</div>
                </div>

                <!-- 2 -->
                <div class="contact-card">
                    <div class="card-label">E-mail:</div>
                    <div class="card-value bold">info@sitename.ru</div>
                </div>

                <!-- 3 -->
                <div class="contact-card">
                    <div class="card-label">Адрес:</div>
                    <div class="card-value">
                        г. Москва, ул. Горбунова, д. 2, строение 3, БЦ «Гранд Сетунь Плаза»
                    </div>
                </div>

                <!-- MAP (справа, на высоту трёх карточек) -->
                <div class="contact-map">
                    <div id="ymap" class="map"></div>
                </div>
            </div>
        </section>

        <section class="padding">
            <div class="form-section">
                <div class="form-left">
                    <h3>Обсудим, как можно сократить бюджет?</h3>
                    <div class="form-desc">
                        Задайте вопрос, проверьте готовое КП или пригласите в тендер
                    </div>
                </div>

                <form class="form">
                    <input type="text" class="field-fio" placeholder="ФИО">
                    <input type="text" class="field-company" placeholder="Название компании">
                    <input type="text" class="field-position" placeholder="Должность">
                    <input type="tel" class="field-phone" placeholder="+ 7 987 654 32 10">
                    <textarea placeholder="Кратко расскажите о своей задаче"></textarea>
                    <div class="form-policy">
                        <input type="checkbox" id="policy" required>
                        <label for="policy" class="policy">Я даю свое согласие на обработку персональных данных в соответствии с
                            <a href="#">Политикой оператора</a> в отношении обработки персональных данных
                        </label>
                    </div>
                    <button type="submit" class="form-btn">Отправить</button>
                </form>
            </div>
        </section>
    </div>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script>
        ymaps.ready(function () {
            // координаты офиса (пример: Москва Сетунь)
            const center = [55.726320, 37.399399];

            const map = new ymaps.Map('ymap', {
                center, zoom: 17, controls: ['zoomControl', 'geolocationControl']
            }, {
                suppressMapOpenBlock: true
            });

            // метка
            const placemark = new ymaps.Placemark(center, {
                balloonContent: 'БЦ «Гранд Сетунь Плаза», ул. Горбунова, 2 строение 3'
            }, {
                preset: 'islands#blackDotIcon' // ч/б иконка
            });

            map.geoObjects.add(placemark);
            map.behaviors.enable('drag');     // интерактив
            map.behaviors.enable('scrollZoom');
        });
    </script>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
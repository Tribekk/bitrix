<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<div class="footer">
    <div class="container-block">
        <div class="footer-block">
            <div class="footer-left">
                <img src="images/logo-white.svg">
                <div class="footer-address">© ООО «Физика Сети Сервис»<br>г. Москва, ул. Горбунова, д. 2, строение 3,<br>БЦ «Гранд Сетунь Плаза»</div>
            </div>
            <div class="footer-center">
                <div class="footer-text-block">
                    <div class="footer-title">Телефон:</div>
                    <div class="footer-text"><a href="tel:+79999088499">+7 999 908-84-99</a></div>
                </div>
                <div class="footer-text-block">
                    <div class="footer-title">E-mail:</div>
                    <div class="footer-text"><a href="mailtp:info@fnserv.ru">info@fnserv.ru</a></div>
                </div>
            </div>
            <div class="footer-right">
                <div class="footer-menu">
                    <ul>
                        <li><a href="#">О компании</a></li>
                        <li><a href="#">Услуги</a></li>
                        <li><a href="#">Кейсы</a></li>
                        <li><a href="#">Партнеры</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </div>
                <div class="footer-politika"><a href="#">Политика конфиденциальности</a></div>
            </div>
        </div>
    </div>
</div>




<script>
$(document).on('click', '.hamburger', function () {
    menu($(this));
});

function menu() {
    if ($('.menu ul').hasClass('activeMenu')) {
        $('.menu').animate({
            opacity: '0'
        }, 500, "linear");
        setTimeout(function () {
            $('.menu').removeClass('full')
        }, 500);
        setTimeout(function () {
            $('.menu ul').removeClass('activeMenu')
        }, 500);
    } else {
        $('.menu ul').addClass('activeMenu');
        $('.menu').addClass('full');
        $('.menu').animate({
            opacity: '1'
        }, 500, "linear")
    }
}
$('.hamburger ').click(function () {
    $('.hamburger span:nth-child(1)').toggleClass('burgerLine');
    $('.hamburger span:nth-child(2)').toggleClass('burgerLine');
    $('.hamburger span:nth-child(3)').toggleClass('burgerLine');
});
</script>

<?endif?>

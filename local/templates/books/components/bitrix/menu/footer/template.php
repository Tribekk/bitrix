<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<div class="footer">
    <div class="container-block">
        <div class="footer-block">
            <div class="footer-left">
                <img src="/local/templates/books/images/new_img/logo-white.svg">
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
                        <li><a href="/about/">О компании</a></li>
                        <li class="f-has-sub">
                            <button type="button" class="f-toggle" aria-expanded="false">
                                Услуги
                                <span class="f-caret"></span>
                            </button>
                            <ul class="f-sub">
                                <li><a href="/uslugi-i-avtomatizacia/">Автоматизация</a></li>
                                <li><a href="/uslugi-proektirovanie/">Проектирование</a></li>
                                <li><a href="/uslugi-montazh/">Монтаж</a></li>
                                <li><a href="/uslugi-ekspertiza/">Экспертиза</a></li>
                                <li><a href="/uslugi-service-support/">Сервисная поддержка</a></li>
                                <li><a href="/uslugi-avto-product/">Автоматизация продукта</a></li>
                            </ul>
                        </li>
                        <li><a href="/keises/">Кейсы</a></li>
                        <li><a href="#">Партнеры</a></li>
                        <li><a href="/contact">Контакты</a></li>
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

    <script>
        (function () {
            // выпадашка "Услуги" в футере
            const fItem = document.querySelector('.footer .f-has-sub');
            if (!fItem) return;

            const fBtn = fItem.querySelector('.f-toggle');
            const fSub = fItem.querySelector('.f-sub');

            // выставляем максимально возможную высоту при открытии/ресайзе
            function fitFooterDropdown() {
                if (!fSub) return;
                const gap = 12; // отступ между кнопкой и списком
                const btnRect = fBtn.getBoundingClientRect();
                const available = window.innerHeight - (btnRect.bottom + gap);

                // не даём совсем крошечное значение
                const maxH = Math.max(180, available);
                fSub.style.maxHeight = 130 + 'px';
                // на всякий случай — включаем прокрутку
                fSub.style.overflowY = 'auto';
                fSub.style.webkitOverflowScrolling = 'touch';
            }

            // открытие/закрытие
            fBtn.addEventListener('click', function (e) {
                e.preventDefault();
                const willOpen = !fItem.classList.contains('open');
                // закрыть другие (если вдруг будут)
                document.querySelectorAll('.footer .f-has-sub.open').forEach(n => n !== fItem && n.classList.remove('open'));
                fItem.classList.toggle('open', willOpen);
                fBtn.setAttribute('aria-expanded', willOpen ? 'true' : 'false');
                if (willOpen) fitFooterDropdown();
            });

            // пересчитываем при ресайзе/ориентации
            window.addEventListener('resize', () => {
                if (fItem.classList.contains('open')) fitFooterDropdown();
            });
        })();
    </script>


<?endif?>

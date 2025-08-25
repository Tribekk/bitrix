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

    <!-- Модалка «Оставьте заявку» -->
    <div class="contact-modal" id="contactModal" aria-hidden="true">
        <div class="contact-modal__backdrop" data-close-modal></div>

        <div class="contact-modal__dialog" role="dialog" aria-modal="true" aria-labelledby="contactModalTitle">
            <button class="contact-modal__close" type="button" title="Закрыть" aria-label="Закрыть" data-close-modal>×</button>

            <h3 class="contact-modal__title" id="contactModalTitle">Оставьте заявку</h3>
            <p class="contact-modal__subtitle">
                В короткие сроки подготовим коммерческое предложение или проверим техническое задание
            </p>

            <form class="contact-form" action="#" method="post" novalidate>
                <div class="contact-form__grid">
                    <label class="field">
                        <input type="text" name="fio" placeholder="ФИО" autocomplete="name" required>
                    </label>

                    <label class="field">
                        <input type="text" name="company" placeholder="Название компании" autocomplete="organization">
                    </label>

                    <label class="field">
                        <input type="text" name="position" placeholder="Должность" autocomplete="organization-title">
                    </label>

                    <label class="field">
                        <input type="tel" name="phone" placeholder="+7 987 654 32 10" autocomplete="tel">
                    </label>

                    <label class="field field--wide">
                        <textarea name="message" placeholder="Кратко расскажите о своей задаче"></textarea>
                    </label>
                </div>

                <label class="consent">
                    <input type="checkbox" required>
                    <span>
          Я даю свое согласие на обработку персональных данных в соответствии с
          <a href="#" target="_blank" rel="noopener">Политикой оператора</a>
          в отношении обработки персональных данных
        </span>
                </label>

                <button type="submit" class="contact-form__submit">Отправить</button>
            </form>
        </div>
    </div>

    <script
            src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
            crossorigin="anonymous"></script>

    <script>
        (function(){
            const modal   = document.getElementById('contactModal');
            if (!modal) return;
            const dialog  = modal.querySelector('.contact-modal__dialog');
            const openers = document.querySelectorAll('.header-btn a, .menu_btn a'); // обе кнопки
            const closers = modal.querySelectorAll('[data-close-modal]');
            const firstInput = modal.querySelector('input[name="fio"]');
            let lastActive = null;

            function openModal(e){
                if (e) e.preventDefault();
                lastActive = document.activeElement;
                modal.classList.add('open');
                modal.setAttribute('aria-hidden','false');
                document.body.style.overflow = 'hidden';
                setTimeout(()=>firstInput && firstInput.focus(), 10);
            }

            function closeModal(){
                modal.classList.remove('open');
                modal.setAttribute('aria-hidden','true');
                document.body.style.overflow = '';
                lastActive && lastActive.focus();
            }

            openers.forEach(btn => btn.addEventListener('click', openModal));
            closers.forEach(btn => btn.addEventListener('click', closeModal));

            // клик по подложке
            modal.addEventListener('click', (e)=>{
                if (e.target.closest('.contact-modal__dialog')) return;
                closeModal();
            });

            // ESC
            document.addEventListener('keydown', (e)=>{
                if (e.key === 'Escape' && modal.classList.contains('open')) closeModal();
            });

            // простая ловушка фокуса
            modal.addEventListener('keydown', (e)=>{
                if (e.key !== 'Tab') return;
                const focusables = modal.querySelectorAll('button, [href], input, textarea, select, [tabindex]:not([tabindex="-1"])');
                const first = focusables[0];
                const last  = focusables[focusables.length - 1];
                if (e.shiftKey && document.activeElement === first){ last.focus(); e.preventDefault(); }
                else if (!e.shiftKey && document.activeElement === last){ first.focus(); e.preventDefault(); }
            });
        })();
    </script>


<script>
$(document).on('click', '.hamburger', function () {
    console.log(123);
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

<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "ИТ-решения, ФИЗИКА СЕТИ, цифровая интеграция, цифровая оптимизация, цифровая защита");
$APPLICATION->SetPageProperty("description", "ФИЗИКА СЕТИ Системный интегратор IT-решений");
$APPLICATION->SetPageProperty("title", "ФИЗИКА СЕТИ  Системный интегратор ИТ-решений");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Главная страница");


?>
<link rel="stylesheet" href="/news/style.css">

<section class="head">
    <div class="head_container">
        <h1>Почему оптически стабилен лазер?</h1>
        <h2>Течение среды восстанавливает фонон.</h2>
    </div>
</section>

<section class="news">
    <article class="news-article">
        <figure class="news-cover">
            <img src="/news/src/img.png" alt="Обложка материала">
        </figure>

        <div class="news-body">
            <p>
                Течение среды восстанавливает фонон. Кварк облучает ускоряющийся экситон. Кварк, как и везде в пределах
                наблюдаемой вселенной, изотермично индуцирует коллапсирующий кристалл.
                Расслоение, в согласии с традиционными представлениями, ненаблюдаемо отклоняет резонатор даже в случае
                сильных локальных возмущений среды. При погружении в жидкий кислород экситон излучает
                плоскополяризованный фотон. В слабопеременных полях (при флуктуациях на уровне единиц процентов) мишень
                конфокально представляет собой гравитационный гидродинамический удар. Магнит излучает лазер. В
                соответствии с принципом неопределенности, течение среды излучает коллапсирующий газ почти так же, как в
                резонаторе газового лазера. Расслоение, на первый взгляд, асферично ускоряет фотон, как и предсказывает
                общая теория поля.
            </p>

            <!-- Цитатная карточка -->
            <div class="news-quote">
                <p class="news-quote-text">Исследователями из разных лабораторий неоднократно наблюдалось, как
                    расслоение испускает погранслой, поскольку любое другое поведение нарушало бы изотропность
                    пространства. Волна экстремально отклоняет изотопный электрон. Взрыв, в рамках ограничений
                    классической механики, одномерно концентрирует экситон вне зависимости от предсказаний
                    самосогласованной теоретической модели явления. Резонатор асферично индуцирует гамма-квант.</p>

                <div class="news-quote-author">
                    <img class="news-quote-avatar" src="/news/src/photo.png" alt="">
                    <div>
                        <div class="news-quote-name">Фамилия Имя</div>
                        <div class="news-quote-role">Должность</div>
                    </div>
                </div>
            </div>

            <p>Гравитирующая сфера синхронизует поток. Плазменное образование, в рамках ограничений классической
                механики, расщепляет плазменный пульсар. Разрыв стохастично усиливает лазер. Частица, в первом
                приближении, сжимает фотон. Кристаллическая решетка, как следует из совокупности экспериментальных
                наблюдений, выталкивает гравитационный магнит. При облучении инфракрасным лазером колебание эллиптично
                переворачивает лазер.</p>
        </div>
    </article>
</section>

<section class="cases">
    <h3>Смотрите так же</h3>

    <div class="cases-viewport">
        <ul class="cases-track">
            <li class="case-card">
                <div class="case-badge">новость</div>
                <div class="case-title">Экзотермический экситон</div>
                <div class="case-desc">Исследователями из разных лабораторий неоднократно наблюдалось, как расслоение самопроизвольно</div>
            </li>
            <li class="case-card">
                <div class="case-badge">новость</div>
                <div class="case-title">Экзотермический экситон</div>
                <div class="case-desc">Исследователями из разных лабораторий неоднократно наблюдалось, как расслоение самопроизвольно</div>
            </li>
            <li class="case-card">
                <div class="case-badge">новость</div>
                <div class="case-title">Экзотермический экситон</div>
                <div class="case-desc">Исследователями из разных лабораторий неоднократно наблюдалось, как расслоение самопроизвольно</div>
            </li>
            <li class="case-card">
                <div class="case-badge">новость</div>
                <div class="case-title">Экзотермический экситон</div>
                <div class="case-desc">Исследователями из разных лабораторий неоднократно наблюдалось, как расслоение самопроизвольно</div>
            </li>
            <li class="case-card">
                <div class="case-badge">новость</div>
                <div class="case-title">Экзотермический экситон</div>
                <div class="case-desc">Исследователями из разных лабораторий неоднократно наблюдалось, как расслоение самопроизвольно</div>
            </li>
            <li class="case-card">
                <div class="case-badge">новость</div>
                <div class="case-title">Экзотермический экситон</div>
                <div class="case-desc">Исследователями из разных лабораторий неоднократно наблюдалось, как расслоение самопроизвольно</div>
            </li>
        </ul>
    </div>
</section>

<script>
    (() => {
        const vps = document.querySelectorAll('.cases-viewport');
        vps.forEach(vp => {
            // колесо мыши -> горизонтальный скролл
            vp.addEventListener('wheel', (e) => {
                // если вертикальная прокрутка больше горизонтальной — скроллим по X
                if (Math.abs(e.deltaY) > Math.abs(e.deltaX)) {
                    vp.scrollLeft += e.deltaY;
                    e.preventDefault(); // важно: иначе страница прокручивается
                }
            }, { passive: false });

            // drag-to-scroll (мышь/тач/стилус)
            let startX = null, startScrollLeft = 0;
            vp.addEventListener('pointerdown', (e) => {
                startX = e.clientX;
                startScrollLeft = vp.scrollLeft;
                vp.setPointerCapture(e.pointerId);
                vp.style.scrollSnapType = 'none'; // отключим снап во время перетаскивания
            });
            vp.addEventListener('pointermove', (e) => {
                if (startX !== null) {
                    const dx = e.clientX - startX;
                    vp.scrollLeft = startScrollLeft - dx;
                }
            });
            const endDrag = () => {
                startX = null;
                // вернём снап
                vp.style.scrollSnapType = 'x proximity';
            };
            vp.addEventListener('pointerup', endDrag);
            vp.addEventListener('pointercancel', endDrag);
            vp.addEventListener('pointerleave', () => { if (startX !== null) endDrag(); });
        });
    })();
</script>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>

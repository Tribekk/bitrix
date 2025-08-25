<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "ИТ-решения, ФИЗИКА СЕТИ, цифровая интеграция, цифровая оптимизация, цифровая защита");
$APPLICATION->SetPageProperty("description", "ФИЗИКА СЕТИ Системный интегратор IT-решений");
$APPLICATION->SetPageProperty("title", "ФИЗИКА СЕТИ  Системный интегратор ИТ-решений");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Главная страница");


?>
    <link rel="stylesheet" href="/uslugi-ekspertiza/index.css">

    <div class="container-block page">
        <!-- Заголовок страницы -->
        <div class="page-header">
            <div class="text">
                <h1>Экспертиза <br>по ИТ-инфраструктуре</h1>
                <h2>Когда задач становится все больше, а бюджеты сокращаются, особенно важно правильно распределять ресурсы. Помогаем найти узкие места и оптимизировать ИТ-расходы.</h2>
            </div>
        </div>

        <!-- Развиваем и оптимизируем -->
        <section class="one-c-optimize">
            <div class="one-c-services">
                <div>
                    <div class="service-title">Аудит ИТ-инфраструктуры </div>
                    <div class="service-desc">Выявляем слабые места, избыточные ресурсы и предлагаем варианты сокращения расходов на ИТ. </div>
                </div>
                <div>
                    <div class="service-title">Оценка ИБ-рисков </div>
                    <div class="service-desc">Помогаем выстроить систему кибербезопасности, отталкиваясь от масштаба и специфики бизнеса</div>
                </div>
                <div>
                    <div class="service-title">Строительство ЦОД</div>
                    <div class="service-desc">Экспертная поддержка при проектировании и строительстве ЦОД с акцентом на соответствие требованиям ИБ.</div>
                </div>
                <div class="last-item">
                    <div class="service-title">Миграция инфраструктуры</div>
                    <div class="service-desc">Выбираем оптимальные решения — публичные, частные облака или локальные сервера. Учитываем нагрузки, безопасность и масштабируемость.</div>
                </div>
            </div>
        </section>

        <!-- CTA: Оставить заявку -->
        <section class="section">
            <div class="cta">
                <div class="cta-title">Обсудим, как можно сократить бюджет?</div>
                <div class="cta-right">
                    <div class="cta-subtitle">Задайте вопрос, проверьте КП <br> или пригласите в тендер</div>
                    <button class="cta-btn js-open-contact" >Оставить заявку</button>
                </div>
            </div>
        </section>

        <!-- Почему мы -->
        <section class="why-us">
            <h3>Почему мы</h3>
            <ul>
                <li><span>01</span> Опираемся на опыт в проектах федерального уровня </li>
                <li><span>02</span> Имеем собственную команду  ИТ-экспертов и архитекторов </li>
                <li><span>03</span> Учитываем <br>бизнес-задачи </li>
                <li><span>04</span> Даем гарантию на результат и обеспечиваем техническую поддержку</li>
            </ul>
        </section>

        <section class="cases">
            <h3>Наши кейсы</h3>

            <div class="cases-viewport">
                <ul class="cases-track">
                    <li class="case-card">
                        <div class="case-badge">кейс</div>
                        <div class="case-title">Экзотермический экситон</div>
                        <div class="case-desc">Исследователями из разных лабораторий неоднократно наблюдалось, как расслоение самопроизвольно</div>
                    </li>
                    <li class="case-card">
                        <div class="case-badge">кейс</div>
                        <div class="case-title">Экзотермический экситон</div>
                        <div class="case-desc">Исследователями из разных лабораторий неоднократно наблюдалось, как расслоение самопроизвольно</div>
                    </li>
                    <li class="case-card">
                        <div class="case-badge">кейс</div>
                        <div class="case-title">Экзотермический экситон</div>
                        <div class="case-desc">Исследователями из разных лабораторий неоднократно наблюдалось, как расслоение самопроизвольно</div>
                    </li>
                    <li class="case-card">
                        <div class="case-badge">кейс</div>
                        <div class="case-title">Экзотермический экситон</div>
                        <div class="case-desc">Исследователями из разных лабораторий неоднократно наблюдалось, как расслоение самопроизвольно</div>
                    </li>
                    <li class="case-card">
                        <div class="case-badge">кейс</div>
                        <div class="case-title">Экзотермический экситон</div>
                        <div class="case-desc">Исследователями из разных лабораторий неоднократно наблюдалось, как расслоение самопроизвольно</div>
                    </li>
                    <li class="case-card">
                        <div class="case-badge">кейс</div>
                        <div class="case-title">Экзотермический экситон</div>
                        <div class="case-desc">Исследователями из разных лабораторий неоднократно наблюдалось, как расслоение самопроизвольно</div>
                    </li>
                </ul>
            </div>
        </section>


        <section class="form-section">
            <div class="form-left">
                <h3>Оставьте заявку</h3>
                <div class="form-desc">
                    В короткие сроки подготовим коммерческое предложение или проверим техническое задание
                </div>
            </div>

            <form class="form">
                <input type="text" class="field-fio" placeholder="ФИО">
                <input type="text" class="field-company" placeholder="Название компании">
                <input type="text" class="field-position" placeholder="Должность">
                <input type="tel"  class="field-phone" placeholder="+ 7 987 654 32 10">
                <textarea placeholder="Кратко расскажите о своей задаче"></textarea>
                <div class="form-policy">
                    <input type="checkbox" id="policy" required>
                    <label for="policy" class="policy">Я даю свое согласие на обработку персональных данных в соответствии с
                        <a href="#">Политикой оператора</a> в отношении обработки персональных данных
                    </label>
                </div>
                <button type="submit" class="form-btn">Отправить</button>
            </form>
        </section>
    </div>

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
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "ИТ-решения, ФИЗИКА СЕТИ, цифровая интеграция, цифровая оптимизация, цифровая защита");
$APPLICATION->SetPageProperty("description", "ФИЗИКА СЕТИ Системный интегратор IT-решений");
$APPLICATION->SetPageProperty("title", "ФИЗИКА СЕТИ  Системный интегратор ИТ-решений");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Главная страница");


?>
    <link rel="stylesheet" href="/uslugi-i-avtomatizacia/index.css">

    <div class="container-block page">
        <!-- Заголовок страницы -->
        <div class="page-header">
            <div class="text">
                <h1>Решения и продукты 1С</h1>
                <h2>Учитываем особенности бизнеса и ИТ-инфраструктуры. Обеспечиваем сервисную поддержку и гарантию</h2>
            </div>
        </div>

        <!-- Развиваем и оптимизируем -->
        <section class="one-c-optimize">
            <h3>Развиваем и оптимизируем вашу 1С</h3>
            <div class="one-c-services">
                <div>
                    <div class="service-title">Обновление 1С</div>
                    <div class="service-desc">Обеспечиваем плавный переход на новые версии для облачных и коробочных решений</div>
                </div>
                <div>
                    <div class="service-title">Настройка отчетности</div>
                    <div class="service-desc">Обеспечиваем корректность данных для любых форм отчётности</div>
                </div>
                <div>
                    <div class="service-title">Интеграция</div>
                    <div class="service-desc">Настраиваем надёжный обмен данными между 1С и другими системами</div>
                </div>
                <div>
                    <div class="service-title">Управление доступом</div>
                    <div class="service-desc">Разрабатываем и внедряем системы разграничения прав доступа</div>
                </div>
                <div>
                    <div class="service-title">Техническая поддержка</div>
                    <div class="service-desc">Абонентская поддержка с прозрачными SLA</div>
                </div>
                <div class="last-item">
                    <div class="service-title">Повышение производительности</div>
                    <div class="service-desc">Ускоряем отклик, снижаем нагрузку на сервер, исключаем ошибки при росте базы</div>
                </div>
            </div>
        </section>

        <!-- Этапы внедрения 1С -->
        <section class="steps">
            <h3>Внедряем 1С с нуля</h3>
            <div class="steps-list">
                <div class="step step-1">
                    <span class="step-num">ЭТАП 01</span>
                    <div>
                        <div class="step-title">Анализ бизнес-процессов</div>
                        <div class="step-desc">Проводим интервью и изучаем требования</div>
                    </div>
                </div>
                <div class="step step-2">
                    <span class="step-num">ЭТАП 02</span>
                    <div>
                        <div class="step-title">Проектирование</div>
                        <div class="step-desc">Составляем технический проект, план и сроки внедрения</div>
                    </div>
                </div>
                <div class="step step-3">
                    <span class="step-num">ЭТАП 03</span>
                    <div>
                        <div class="step-title">Разработка и доработка модулей</div>
                        <ol>
                            <li>Предварительно тестируем и проверяем</li>
                            <li>Настраиваем и запускаем систему на фокусной группе</li>
                            <li>Полностью запускаем систему</li>
                        </ol>
                    </div>
                </div>
                <div class="step step-4">
                    <span class="step-num">ЭТАП 04</span>
                    <div>
                        <div class="step-title">Обучение сотрудников</div>
                        <div class="step-desc">Составляем гайды и поддерживаем пользователей</div>
                    </div>
                </div>
                <div class="step step-5">
                    <span class="step-num">ЭТАП 05</span>
                    <div>
                        <div class="step-title">Техническая поддержка</div>
                        <div class="step-desc">Оказываем абонентскую поддержку с прозрачными SLA</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA: Оставить заявку -->
        <section class="section">
            <div class="cta">
                <div class="cta-title">Обсудим, как можно сократить бюджет?</div>
                <div class="cta-right">
                    <div class="cta-subtitle">Задайте вопрос, проверьте КП <br> или пригласите в тендер</div>
                    <button class="cta-btn js-open-contact">Оставить заявку</button>
                </div>
            </div>
        </section>

        <!-- Продукты 1С -->
        <section class="products">
            <h3>Продукты 1С</h3>
            <div class="product-categories">
                <div>
                    <div class="category-title">Стартапы</div>
                    <div class="category-desc">Простые и доступные решения. Подходят для базового учёта, торговли и онлайн-касс</div>
                    <ul>
                        <li>1С:Управление нашей фирмой</li>
                    </ul>
                </div>
                <div>
                    <div class="category-title">Малый и средний бизнес</div>
                    <div class="category-desc">Расширенные возможности. Помогают управлять продажами, складом, кадрами и финансами.</div>
                    <ul>
                        <li>1С:Документооборот КОРП</li>
                        <li>1С:Производственная безопасность. Охрана труда</li>
                        <li>1С:Зарплата и управление персоналом</li>
                        <li>1С:Комплексная автоматизация</li>
                    </ul>
                </div>
                <div>
                    <div class="category-title">Энтерпрайз</div>
                    <div class="category-desc">Интеграция всех процессов в одной системе с глубокой настройкой.</div>
                    <ul>
                        <li>1С:ERP Управление предприятием</li>
                        <li>1С:ERP Управление холдингом</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Форсайт-сессии -->
        <section class="foresight">
            <div class="foresight_container">
                <div class="left">
                    <div class="foresight-title">Форсайт-сессии с независимыми экспертами</div>
                    <div class="foresight-desc">Для каждой задачи мы подбираем профильных экспертов, которые уже прошли путь автоматизации и знают, как устроены процессы на практике.</div>
                </div>
                <div class="right">
                    <img src="/uslugi-i-avtomatizacia/src/image.png" alt="">
                </div>
            </div>
        </section>

        <!-- Почему мы -->
        <section class="why-us">
            <h3>Почему мы</h3>
            <ul>
                <li><span>01</span> Внедряем, развиваем и поддерживаем решения 1С.</li>
                <li><span>02</span> Учитываем киберриски и заботимся о персональных данных</li>
                <li><span>03</span> Предлагаем тестовый период на 1 мес. для стандартных решений</li>
                <li><span>04</span> Даем гарантию на результат, а в сложных проектах — бесплатную техподдержку до 3 мес.</li>
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
                    <label for="policy">Я даю свое согласие на обработку персональных данных в соответствии с
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
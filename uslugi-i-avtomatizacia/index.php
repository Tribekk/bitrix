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
                <div>
                    <div class="service-title">Повышение производительности</div>
                    <div class="service-desc">Ускоряем отклик, снижаем нагрузку на сервер, исключаем ошибки при росте базы</div>
                </div>
            </div>
        </section>

        <!-- Этапы внедрения 1С -->
        <section class="steps">
            <h3>Внедряем 1С с нуля</h3>
            <div class="steps-list">
                <div>
                    <span class="step-num">01</span>
                    <div class="step-title">Анализ бизнес-процессов</div>
                    <div class="step-desc">Проводим интервью и изучаем требования</div>
                </div>
                <div>
                    <span class="step-num">02</span>
                    <div class="step-title">Проектирование</div>
                    <div class="step-desc">Составляем технический проект, план и сроки внедрения</div>
                </div>
                <div>
                    <span class="step-num">03</span>
                    <div class="step-title">Разработка и доработка модулей</div>
                    <div class="step-desc">1. Предварительно тестируем и проверяем<br>2. Настраиваем и запускаем систему на фокусной группе<br>3. Полностью запускаем систему</div>
                </div>
                <div>
                    <span class="step-num">04</span>
                    <div class="step-title">Обучение сотрудников</div>
                    <div class="step-desc">Составляем гайды и поддерживаем пользователей</div>
                </div>
                <div>
                    <span class="step-num">05</span>
                    <div class="step-title">Техническая поддержка</div>
                    <div class="step-desc">Оказываем абонентскую поддержку с прозрачными SLA</div>
                </div>
            </div>
        </section>

        <!-- CTA: Оставить заявку -->
        <section class="cta">
            <div class="cta-title">Обсудим, как можно сократить бюджет?</div>
            <div class="cta-subtitle">Задайте вопрос, проверьте КП или пригласите в тендер</div>
            <button class="cta-btn">Оставить заявку</button>
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
            <div class="foresight-title">Форсайт-сессии с независимыми экспертами</div>
            <div class="foresight-desc">Для каждой задачи мы подбираем профильных экспертов, которые уже прошли путь автоматизации и знают, как устроены процессы на практике.</div>
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

        <!-- Кейсы (заглушка, повторяющиеся блоки) -->
        <section class="cases">
            <h3>Наши кейсы</h3>
            <div class="cases-list">
                <div class="case">
                    <div class="case-title">Экзотермический экситон</div>
                    <div class="case-desc">Исследователями из разных лабораторий неоднократно наблюдалось, как расслоение самопроизвольно</div>
                </div>
                <div class="case">
                    <div class="case-title">Экзотермический экситон</div>
                    <div class="case-desc">Исследователями из разных лабораторий неоднократно наблюдалось, как расслоение самопроизвольно</div>
                </div>
            </div>
        </section>

        <!-- Форма заявки -->
        <section class="form-section">
            <h3>Оставьте заявку</h3>
            <div class="form-desc">В короткие сроки подготовим коммерческое предложение или проверим техническое задание</div>
            <form class="form">
                <input type="text" placeholder="Имя">
                <input type="tel" placeholder="Телефон">
                <input type="email" placeholder="E-mail">
                <textarea placeholder="Комментарий"></textarea>
                <div class="form-policy">
                    <label>
                        <input type="checkbox" required>
                        Я даю свое согласие на обработку персональных данных в соответствии с <a href="#">Политикой оператора</a>
                    </label>
                </div>
                <button type="submit" class="form-btn">Отправить</button>
            </form>
        </section>
    </div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "ИТ-решения, ФИЗИКА СЕТИ, цифровая интеграция, цифровая оптимизация, цифровая защита");
$APPLICATION->SetPageProperty("description", "ФИЗИКА СЕТИ Системный интегратор IT-решений");
$APPLICATION->SetPageProperty("title", "ФИЗИКА СЕТИ  Системный интегратор ИТ-решений");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Главная страница");


?>
    <link rel="stylesheet" href="/uslugi-service-support/index.css">

    <div class="container-block page">
        <!-- Заголовок страницы -->
        <div class="page-header">
            <div class="text">
                <h1>Сервисная поддержка</h1>
                <h2>Чётко соблюдаем SLA. Работаем с оборудованием любых вендоров, включая западные.</h2>
            </div>
        </div>

        <!-- Развиваем и оптимизируем -->
        <section class="one-c-optimize">
            <div class="one-c-services">
                <div class="last-item">
                    <div class="service-title">Комплексная поддержка ИТ‑инфраструктуры</div>
                    <div class="service-desc">Обеспечиваем работу ключевых компонентов ИТ‑инфраструктуры: серверов, СХД и сетевой инфраструктуры. Точно диагностируем и
                        <br>эффективно решаем задачи любого уровня сложности.</div>
                </div>
                <div>
                    <div class="service-title">Проактивная поддержка предприятия</div>
                    <div class="service-desc">Используем автоматизацию и&nbsp;передовые технологии, чтобы предупредить возможные ИТ‑инциденты еще до&nbsp;их возникновения.</div>
                </div>
                <div>
                    <div class="service-title">Инцидентная техническая поддержка</div>
                    <div class="service-desc">Мгновенно реагируем на&nbsp;внештатные ситуации в&nbsp;ИТ‑инфраструктуре, обеспечивая быстрое восстановление всех систем. Проводим анализ инцидентов, помогая предотвратить повтор сценариев.</div>
                </div>
                <div>
                    <div class="service-title">Организация сервисной ИТ‑службы</div>
                    <div class="service-desc">Помогаем создать собственную службу ИТ‑поддержки. Определяем цели, планируем финансовые и&nbsp;человеческие ресурсы, настраиваем бизнес-процессы.</div>
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

            <?php
            $APPLICATION->IncludeComponent(
                'bitrix:news.list',
                'cases',
                [
                    'IBLOCK_ID' => 10,
                    'NEWS_COUNT' => 6,
                    'PARENT_SECTION_CODE' => 'service-support',
                    'PROPERTY_CODE' => ['PREVIEW'],
                    'SET_TITLE' => 'N',
                ]
            );
            ?>
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


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
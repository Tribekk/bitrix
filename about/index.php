<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "ИТ-решения, ФИЗИКА СЕТИ, цифровая интеграция, цифровая оптимизация, цифровая защита");
$APPLICATION->SetPageProperty("description", "ФИЗИКА СЕТИ Системный интегратор IT-решений");
$APPLICATION->SetPageProperty("title", "ФИЗИКА СЕТИ  Системный интегратор ИТ-решений");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Главная страница");


?>
<link rel="stylesheet" href="/about/style.css">

    <section class="head">
        <div class="head_container">
            <h1>Физика сети Сервис — <br>официальный партнер&nbsp;«1С»</h1>
            <h2>Объединяем ИТ-инфраструктуру и бизнес-автоматизацию в единую систему.</h2>
        </div>
    </section>

    <section class="about">
        <div class="about-text">
            <h2>
                Команда экспертов с реальным опытом автоматизации и управленческого консалтинга
            </h2>
            <p>
                Мы сопровождаем весь путь трансформации: от анализа бизнес-процессов до настройки методологии и нормативной базы.
            </p>
            <p>
                Наш подход — это сочетание технической экспертизы, понимания задач бизнеса и умения внедрять решения в живую инфраструктуру заказчика.
                Мы предлагаем не теорию, а практику, проверенную на проектах в госсекторе, промышленности и коммерческом сегменте
            </p>
        </div>
        <div class="about-image">
            <img src="/about/src/building.png" alt="Skyscrapers">
        </div>
    </section>

    <section class="approach">
        <h3>Наш подход</h3>

        <div class="approach-grid">
            <article class="approach-card">
                <h4 class="approach-title">Прозрачность</h4>
                <p class="approach-text">
                    Мы открыто обсуждаем все этапы проекта — от оценки рисков до расчёта стоимости.
                    Клиент всегда понимает, что происходит, зачем это нужно и что будет дальше.
                </p>
            </article>

            <article class="approach-card">
                <h4 class="approach-title">Взгляд на 360&nbsp;градусов</h4>
                <p class="approach-text">
                    Учитываем не только технические параметры, но и бизнес-цели, процессы, нормативную базу.
                    Это помогает внедрять решения, которые работают на всех уровнях.
                </p>
            </article>

            <article class="approach-card">
                <h4 class="approach-title">Фокус на результат</h4>
                <p class="approach-text">
                    Главная метрика для нас — достигнутый эффект у клиента.
                    Мы не ограничиваемся внедрением, а доводим проект до реального результата,
                    который можно измерить.
                </p>
            </article>
        </div>
    </section>

    <section class="ecosystem">
        <div class="eco-wrap">
            <h3 class="eco-title">Экосистема «Физики Сети»</h3>

            <p>
                Физика Сети Сервис входит в группу компаний «Физика Сети» — это даёт нам уникальное преимущество:
                мы объединяем глубокую экспертизу в проектировании и сопровождении ИТ-инфраструктуры с практикой
                автоматизации бизнес-процессов. Решаем задачи комплексно — от серверной до 1С.
            </p>

            <p>
                Название «Физика Сети» выбрано не случайно — в основе компании стоят руководители с фундаментальными
                знаниями в области физики. Мы убеждены, что и в инженерных системах, и в цифровой среде всё работает по
                законам физики: точно, последовательно и с вниманием к деталям. Этот научный подход заложен в нашу ДНК —
                и в каждый реализованный проект.
            </p>
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
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
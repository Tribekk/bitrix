<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
use Bitrix\Main\Page\Asset;

Asset::getInstance()->addCss('/keis/style.css');
Asset::getInstance()->addJs($templateFolder.'/script.js');
?>
<section class="news">
    <article class="news-article">
        <div class="news-body">
            <?= $arResult['PROPERTIES']['KEIS']['~VALUE']['TEXT'] ?>
        </div>
    </article>
</section>

<?php if (!empty($arResult['RELATED_ITEMS'])): ?>
    <section class="cases">
        <h3>Смотрите так же</h3>
        <div class="cases-viewport">
            <ul class="cases-track">
                <?php foreach ($arResult['RELATED_ITEMS'] as $item): ?>
                    <li class="case-card">
                        <div class="case-badge">Кейс</div>
                        <div class="case-title"><?= htmlspecialchars($item['NAME']) ?></div>
                        <div class="case-desc"><?= htmlspecialchars($item['PREVIEW']) ?></div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
<?php endif; ?>

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
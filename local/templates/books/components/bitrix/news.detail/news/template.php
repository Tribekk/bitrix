<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;

Asset::getInstance()->addCss('/news/style.css');
Asset::getInstance()->addJs($templateFolder . '/script.js');
?>

<?= $arResult['PROPERTIES']['NEWS']['~VALUE']['TEXT'] ?>

<?php if (!empty($arResult['RELATED_ITEMS'])): ?>
    <section class="cases">
        <h3>Смотрите так же</h3>
        <div class="cases-viewport">
            <ul class="cases-track">
                <?php foreach ($arResult['RELATED_ITEMS'] as $item): ?>
                    <li class="case-card">
                        <div class="case-badge">новость</div>
                        <a href="/news/?id=<?= (int)$item['ID'] ?>" class="case-title">
                            <?= htmlspecialchars($item['NAME']) ?>
                        </a>
                        <?php if (!empty($item['PREVIEW'])): ?>
                            <div class="case-desc"><?= htmlspecialchars($item['PREVIEW']) ?></div>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
<?php endif; ?>
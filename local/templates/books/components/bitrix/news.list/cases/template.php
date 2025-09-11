<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
use Bitrix\Main\Page\Asset;

Asset::getInstance()->addJs($templateFolder . '/script.js');
?>
<div class="cases-viewport">
    <ul class="cases-track">
        <?php foreach ($arResult['ITEMS'] as $item): ?>
            <li class="case-card">
                <div class="case-badge">кейс</div>
                <a href="/keis/?id=<?= (int)$item['ID'] ?>" class="case-title"><?= htmlspecialchars($item['NAME']) ?></a>
                <?php if (!empty($item['PROPERTIES']['PREVIEW']['VALUE'])): ?>
                    <div class="case-desc"><?= htmlspecialchars($item['PROPERTIES']['PREVIEW']['VALUE']) ?></div>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
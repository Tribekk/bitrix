<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>
<div class="main-news-list">
    <?php foreach ($arResult['ITEMS'] as $item): ?>
        <div class="main-news-item">
            <div class="main-news-it">
                <a href="/news/?id=<?= (int)$item['ID'] ?>">
                    <div class="main-news-item-badge">Новости</div>
                    <div class="main-news-item-block">
                        <div class="main-news-item-title"><?= htmlspecialchars($item['NAME']) ?></div>
                        <?php if (!empty($item['PROPERTIES']['PREVIEW']['VALUE'])): ?>
                            <div class="main-news-item-text"><?= htmlspecialchars($item['PROPERTIES']['PREVIEW']['VALUE']) ?></div>
                        <?php endif; ?>
                    </div>
                </a>
            </div>
        </div>
    <?php endforeach; ?>
</div>
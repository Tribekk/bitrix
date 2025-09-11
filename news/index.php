<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
?>
    <link rel="stylesheet" href="/news/style.css">
<?php
$APPLICATION->SetTitle('Новость');
$APPLICATION->IncludeComponent(
    'bitrix:news.detail',
    'news',
    [
        'IBLOCK_ID' => 11,
        'ELEMENT_ID' => (int)$_REQUEST['id'],
        'CHECK_DATES' => 'Y',
        'SET_TITLE' => 'N',
        'PROPERTY_CODE' => ['PREVIEW','TEXT'],
    ]
);
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
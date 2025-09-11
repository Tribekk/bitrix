<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Кейс');
$APPLICATION->IncludeComponent(
    'bitrix:news.detail',
    'case',
    [
        'IBLOCK_ID' => 10,
        'ELEMENT_ID' => (int)$_REQUEST['id'],
        'CHECK_DATES' => 'Y',
        'SET_TITLE' => 'N',
        'PROPERTY_CODE' => ['PREVIEW','KEIS'],
    ]
);
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
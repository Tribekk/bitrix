<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;

if (!Loader::includeModule('iblock')) {
    return;
}

global $APPLICATION;
$APPLICATION->SetTitle($arResult['NAME']);

$filter = [
    'IBLOCK_ID' => $arParams['IBLOCK_ID'],
    'ACTIVE' => 'Y',
    '!ID' => $arResult['ID'],
];
$select = ['ID', 'NAME', 'PROPERTY_PREVIEW'];
$res = CIBlockElement::GetList(['RAND' => 'ASC'], $filter, false, ['nTopCount' => 10], $select);

$arResult['RELATED_ITEMS'] = [];
while ($row = $res->GetNext()) {
    $arResult['RELATED_ITEMS'][] = [
        'ID' => $row['ID'],
        'NAME' => $row['NAME'],
        'PREVIEW' => $row['PROPERTY_PREVIEW_VALUE'],
    ];
}
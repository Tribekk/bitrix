<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

use Bitrix\Main\Loader;

if (!Loader::includeModule('iblock')) {
    return;
}

global $APPLICATION;
$APPLICATION->SetTitle($arResult['NAME']);

$filter = [
    'IBLOCK_ID' => $arParams['IBLOCK_ID'],
    'ACTIVE' => 'Y',
    'SECTION_ID' => $arResult['IBLOCK_SECTION_ID'],
    '!ID' => $arResult['ID'],
];
$select = ['ID','NAME','CODE','PROPERTY_PREVIEW'];
$res = CIBlockElement::GetList(['SORT' => 'ASC'], $filter, false, ['nTopCount' => 6], $select);

$arResult['RELATED_ITEMS'] = [];
while ($row = $res->GetNext()) {
    $arResult['RELATED_ITEMS'][] = [
        'ID' => $row['ID'],
        'NAME' => $row['NAME'],
        'PREVIEW' => $row['PROPERTY_PREVIEW_VALUE'],
    ];
}
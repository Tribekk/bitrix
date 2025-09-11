<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="main-partners-list">
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <div class="main-partners-item">
            <div class="main-partners-it">
                <img src="<?echo $arItem['DISPLAY_PROPERTIES']['PICTURE']['VALUE'];?>" alt="<?echo htmlspecialcharsbx($arItem['NAME']);?>">
            </div>
        </div>
    <?endforeach;?>
</div>
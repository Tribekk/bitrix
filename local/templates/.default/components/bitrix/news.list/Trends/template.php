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
<div class="wrapper narrowWrapper new_wrapper">
	<h3>Что нового?</h3>
<div class="news-list trends multiple-items">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="col-4">
        <?
             if($arItem['PROPERTIES']['TREND_EXTERNAL_LINK']['VALUE']!=''){
                 $newsLink=$arItem['PROPERTIES']['TREND_EXTERNAL_LINK']['VALUE'];
             }else{ 
                 $newsLink=$arItem["DETAIL_PAGE_URL"];
             }
        ?>
<!--
1: <?=$arItem['PROPERTIES']['TREND_EXTERNAL_LINK']['VALUE'];?>
2: <?=$arItem['DETAIL_PAGE_URL'];?>
3: <?=$newsLink;?>
-->
				<a href="<?=$newsLink?>">
                    <img
						class="preview_picture"
						border="0"
						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
						width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
						height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						style="float:left; width:100%;"
						/>
				</a>
    <!--<a href="<?//=$arItem["DETAIL_PAGE_URL"]?>"><div class="newsListButton">Подробнее</div></a>-->
	</div>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
</div>
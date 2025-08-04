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
<div class="wrapper">   <a href="/partners"><h3>Партнеры</h3></a>
<div class="news-list row partners partnersMain">
    <div class='col-2 partMainAnimator'></div>
    <?$countX=0;
    foreach($arResult["ITEMS"] as $arItem):?>
       <?/*if($countX>=count($arResult["ITEMS"])/2){
            break;
        }*/?>
        <div class='col-2'>
             <div <?if(!empty($arItem["PREVIEW_PICTURE"]["SRC"])) echo 'style="background-image:url(' .$arItem["PREVIEW_PICTURE"]["SRC"].')"';?>></div>
              
               <?if(isset($arItem['DISPLAY_PROPERTIES']['LINK'])):?>
               <a href="<?echo $arItem['DISPLAY_PROPERTIES']['LINK']['VALUE']?>">
               <?
    endif?>
            <?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
            <p class="news-item">
                <?if(empty($arItem["PREVIEW_PICTURE"]["SRC"]))echo $arItem["NAME"];?>
            </p>
                 <?if(isset($arItem['DISPLAY_PROPERTIES']['LINK'])):?>
            </a>
                 <?endif?>
                 
        </div>
        <?$countX++;?>
    <?endforeach;?>
</div>
<!--<div class="news-list row partners partnersMain">
    <div class='col-2 partMainAnimatorReverse'></div>
    <?$countX=0;
    foreach($arResult["ITEMS"] as $arItem):?>
        <?if($countX>=count($arResult["ITEMS"])/2):?>
        <div class='col-2'>
             <div <?if(!empty($arItem["PREVIEW_PICTURE"]["SRC"])) echo 'style="background-image:url(' .$arItem["PREVIEW_PICTURE"]["SRC"].')"';?>></div>
              
               <?if(isset($arItem['DISPLAY_PROPERTIES']['LINK'])):?>
               <a href="<?echo $arItem['DISPLAY_PROPERTIES']['LINK']['VALUE']?>">
               <?
    endif?>
            <?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
            <p class="news-item">
                <?if(empty($arItem["PREVIEW_PICTURE"]["SRC"]))echo $arItem["NAME"];?>
            </p>
                 <?if(isset($arItem['DISPLAY_PROPERTIES']['LINK'])):?>
            </a>
                 <?endif?>
                 
        </div>
        <?endif?>
                <?$countX++;?>
    <?endforeach;?>
</div>-->
</div>
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
<div class="indexSlider row">
    <?foreach($arResult["ITEMS"] as $arItem):?>
    <div class="col-12 videoSlideWrapper <?echo $arItem["CODE"]?>">
        <video width="100%" height="auto" autoplay="autoplay" loop="true" preload="auto" muted="muted" playsinline src="<?echo $arItem['DISPLAY_PROPERTIES']['VIDEO']['FILE_VALUE']['SRC'];?>" class="video-desktop">
        </video>
        <video width="100%" height="auto" autoplay="autoplay" loop="true" preload="auto" muted="muted" playsinline src="<?echo $arItem['DISPLAY_PROPERTIES']['VIDEO_MOB']['FILE_VALUE']['SRC'];?>" class="video-mob">
        </video>
        <div class="indexSlider-block">
            <div class="wrapper">
                <div class="indexSlider-title">ваш проводник<br>в цифровое<br><span>будущее</span></div>
                <?if($arItem["CODE"]=='main'):?>
                    <a class='btn' href="<?echo $arItem['DISPLAY_PROPERTIES']['LINK']['VALUE'];?>">СВЯЗАТЬСЯ С НАМИ</a>
                <?else:?>
                    <a class='btn' href="<?echo $arItem['DISPLAY_PROPERTIES']['LINK']['VALUE'];?>">Подробнее</a>
                <?endif;?>
            </div>
        </div>
    </div>
    <?endforeach;?>
</div>

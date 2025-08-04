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

<?
$dateTimeStr=$arResult['TIMESTAMP_X'];
$dateTimeArr= explode(" ", $dateTimeStr);
$dateTime=$dateTimeArr[0];
?>

<? 

$ABZES = [];

foreach ($arResult['DISPLAY_PROPERTIES']['ABZES']['VALUE'] as $k=>$v){
    $ABZES[$k] = [
        "ABZ_TEXT" => $v['SUB_VALUES']['ABZ_TEXT']['~VALUE']['TEXT'],
        "ABZ_SHOW_COM" => $v['SUB_VALUES']['ABZ_SHOW_COM']['VALUE'],
        "COM_TEXT" => $v['SUB_VALUES']['COM_TEXT']['~VALUE']['TEXT'],
        "COM_IMG" => (isset($v['SUB_VALUES']['COM_IMG']['VALUE'])) ? CFile::GetPath($v['SUB_VALUES']['COM_IMG']['VALUE']) : "",
        "COM_1_LINE" => $v['SUB_VALUES']['COM_1_LINE']['VALUE'],
        "COM_2_LINE" => $v['SUB_VALUES']['COM_2_LINE']['VALUE'],
    ];
} 

?>

<div class="trendsDetail">
    <div class="news-detail">
        <div class="content">
        
            <ul class="float_social" style="top: 933px;">
                <a href="https://www.facebook.com/fizikaseti">
                    <li><img src="/bitrix/templates/books/img/icon_social-15.svg" alt=""></li>
                </a> <a href="https://www.instagram.com/fizikaseti/">
                    <li> <img src="/bitrix/templates/books/img/icon_social-16.svg" alt=""></li>
                </a>
            </ul>
            
            <div class="trendsDetail_sample_content">
            
                <?if($arResult["DETAIL_TEXT"] <> ''):?>

                <?if(stristr($arResult["DETAIL_TEXT"], 'fullWidthTemplate')=== FALSE) echo('<div class="wrapper">')?>
                <div class="intro row" style="background-size: cover;background-image: url(<?=$arResult["DETAIL_PICTURE"]["SRC"]?>)!important;">
                </div>

                <?if(stristr($arResult["DETAIL_TEXT"], 'fullWidthTemplate')=== FALSE) echo('<p>'.$dateTime.'</p>')?>

                <div class="wrapper">
                    <?if(stristr($arResult["DETAIL_TEXT"], 'fullWidthTemplate')!= FALSE):?>
                    <p>
                        <?echo($dateTime);?>
                    </p>
                    <h2 class="about_h2"><?=$arResult["NAME"]?></h2>
                    <?endif?>
                </div>

                <?echo $arResult["DETAIL_TEXT"];?>

                <?if(stristr($arResult["DETAIL_TEXT"], 'fullWidthTemplate')=== FALSE) echo('</div>')?>

                <?else:?>
                <?echo $arResult["PREVIEW_TEXT"];?>
                <?endif?>

                <?if($arResult['DISPLAY_PROPERTIES']['TREND_PHOTO']<>'') :?>
                <div class="wrapper"><img class="TREND_PHOTO" src="<?echo $arResult['DISPLAY_PROPERTIES']['TREND_PHOTO']['FILE_VALUE']['SRC'];?>" alt=""></div>
                <?endif?>

            </div>
            
            <? if (!empty($ABZES)): ?>
            <div class="wrapper trendsDetail_sample_abzes">
                
                <div class="abzes">
                <? foreach ($ABZES as $ABZ): ?>
                    
                    <div class="one-abz">
                        
                        <? if ($ABZ["ABZ_TEXT"] != ""): ?>
                        <div class="abz-text"><?=$ABZ["ABZ_TEXT"]?></div>
                        <? endif; ?>
                        
                        <? if ($ABZ["ABZ_SHOW_COM"] == "Y"): ?>
                        <div class="abz-com">
                            
                            <? if ($ABZ["COM_TEXT"] != ""): ?>
                            <div class="abz-com-text"><?=$ABZ["COM_TEXT"]?></div>
                            <? endif; ?>
                            
                            <? if ($ABZ["COM_1_LINE"] != "" || $ABZ["COM_2_LINE"] != "" || $ABZ["COM_IMG"] != ""): ?>
                            <div class="abz-com-author">
                                
                                <? if ($ABZ["COM_IMG"] != ""):  ?>
                                <div class="abz-com-img">
                                    <img src="<?=$ABZ["COM_IMG"];?>"/>
                                </div>
                                <? endif; ?>
                                
                                <? if ($ABZ["COM_1_LINE"] != "" || $ABZ["COM_2_LINE"] != ""): ?>
                                <div class="abz-com-info">
                                    
                                    <? if ($ABZ["COM_1_LINE"] != ""): ?>
                                    <div class="abz-com-line-1"><?=$ABZ["COM_1_LINE"];?></div>
                                    <? endif; ?>
                                    
                                    <? if ($ABZ["COM_2_LINE"] != ""): ?>
                                    <div class="abz-com-line-2"><?=$ABZ["COM_2_LINE"];?></div>
                                    <? endif; ?>
                                    
                                </div>
                                <? endif; ?>
                                
                            </div>
                            <? endif; ?>
                            
                        </div>
                        <? endif; ?>
                        
                    </div>
                    
                <? endforeach; ?>
                </div>
                        
            </div>
            <? endif; ?>

            <? if (!empty($arResult['DISPLAY_PROPERTIES']['PHOTOES']["VALUE"])): ?>
            <div class="wrapper">
                <div class="swiper-trends">
                    <div class="swiper" id="swiper-trends">
                        <div class="swiper-wrapper">
                            <? foreach ($arResult['DISPLAY_PROPERTIES']['PHOTOES']["VALUE"] as $arImgID): 
                        $srcImg = CFile::GetFileArray($arImgID);
                        $srcImg = $srcImg['SRC'];
                    ?>
                            <img src="<?=$srcImg;?>" class="swiper-slide" />
                            <? endforeach; ?>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
            <? endif; ?>

        </div>
    </div>
</div>

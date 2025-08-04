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
global $APPLICATION;
$dir = $APPLICATION->GetCurDir();?>
<?if($dir==$arResult["ITEMS"][0]['LIST_PAGE_URL']):?>
<div class="content decisions decisionsMain">
    <!--<div class="intro">
		<div class="wrapper">
			<div class="col-6">
				<h2 class="about_h2">РЕШЕНИЯ</h2>
			</div>
		</div>
	</div>-->
    <div class="wrapper">
        <h2>Решения</h2>
        <div class="news-list row">
            <?$count=0;?>
            <?foreach($arResult["SECTION"] as $arSection):?>


            <?$rsResult = CIBlockSection::GetList(array("SORT" => "ASC"), array("IBLOCK_ID" => $arParams["IBLOCK_ID"], "ID" =>$arSection["ID"]), false, $arSelect = array("UF_*")); // возвращаем список разделов с нужными нам пользовательскими полями. UF_* — в таком виде выведет все доступные для данного раздела поля.
// $arParams["IBLOCK_ID"] — у вас может быть получением ID инфоблока другим способом
// $arResult["SECTION"]["ID"] — и ID раздела тоже, проверяйте через print_r($arResult);
if($arSection = $rsResult -> GetNext())
    {
    $arResult["SECTION_USER_FIELDS"]["UF_DECGIF"] = $arSection["UF_DECGIF"];
    $arResult["SECTION_USER_FIELDS"]["UF_DECSTAT"] = $arSection["UF_DECSTAT"];
    $arResult["SECTION_USER_FIELDS"]["UF_DECISPRETEXT"] = $arSection["~UF_DECISPRETEXT"];
} // создаем переменные с содержимым наших пользовательских полей
?>




            <div class="col-4 mainList <?echo $arSection['CODE'];?> decisionsSection <?if ($count==0)echo'active';$count++;?>"> <a href="/decisions/<?echo $arSection['CODE'];?>/">
                    <p class="decisionMainName">
                        <?echo $arSection['NAME'];?>
                    </p>
                    <p class="DesMainDescription">
                        <?echo $arResult["SECTION_USER_FIELDS"]["UF_DECISPRETEXT"];?>
                    </p>
                    <img class='decisionStat' src="<?=CFile::GetPath($arResult["SECTION_USER_FIELDS"]["UF_DECSTAT"]);?>" alt="">
                    <img class='decisionGif' src="<?=CFile::GetPath($arResult["SECTION_USER_FIELDS"]["UF_DECGIF"]);?>" alt="">
                </a></div>
            <?endforeach;?>
        </div>

    </div>
</div>
<?else:?>
<?$sectionId=$arResult["ITEMS"][0]['IBLOCK_SECTION_ID']?>
<? foreach ($arResult["SECTION"] as $key => $val) {
       if ($val['ID'] == $sectionId) {
           $sectionKey= $key;
       }
   }?>
<div class="content decisions decisionsSection">
    <!--<div class="intro" style=" background-image: url(<?=CFile::GetPath($arResult["SECTION"][$sectionKey]["PICTURE"]);?>);">
		<div class="wrapper">
			<div class="col-6">
				<h2 class="about_h2"><?echo $arResult["SECTION"][$sectionKey]["NAME"];?></h2>
			</div>
		</div>
	</div>-->
   <div class="col-5">
        <h2 class="about_h2 mobileOnly">
            <?echo $arResult["SECTION"][$sectionKey]["NAME"];?>
        </h2>
    </div>
    <?$rsResult = CIBlockSection::GetList(array("SORT" => "ASC"), array("IBLOCK_ID" => $arParams["IBLOCK_ID"], "ID" =>$arResult["ITEMS"]["0"]["IBLOCK_SECTION_ID"]), false, $arSelect = array("UF_*"));
    if($arSection = $rsResult -> GetNext())
    {
        $DECVIDEO = CFile::GetPath($arSection["~UF_DECVIDEO"]);
    }
    ?>
    <video width="100%" height="auto" autoplay="autoplay" loop="true" preload="auto" muted="muted" playsinline>
        <source src="<?echo $DECVIDEO;?>" type="video/mp4">
    </video>
    <div class="wrapper">
       <div class="row">
        <div class="col-5">
           <div>
            <h2 class="about_h2 desktopOnly">
                <?echo $arResult["SECTION"][$sectionKey]["NAME"];?>
            </h2>
            <p>
                <?=$arResult["SECTION"][$sectionKey]["DESCRIPTION"];?>
            </p></div>
        </div>
        <div class="col-7">
            <div class="news-list">
                <div id="accordion" class="accordion">

                <?foreach($arResult["ITEMS"] as $arItem):?>
                <?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
                    <div class="accordion-item">
                        <div class="accordion-item-header">
                        <p><?echo $arItem["NAME"];?></p>
                            <div class="circle-swicher">
                               <div>
                                <span></span>
                                <span class="closedSwicher"></span></div>
                            </div>
                        </div>
                        <div class="accordion-item-content">
                            <p><?echo $arItem["PREVIEW_TEXT"];?></p>
                        </div>
                    </div>
                <?endforeach;?>
                                </div>
            </div>
        </div>
    </div>
    </div>
    
    <div class="wrapper">
        <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"Trends", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "Trends",
		"DETAIL_URL" => "/blog/#CODE#/",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "-",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "TREND_EXTERNAL_LINK",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	),
	false
);?>
    </div>
</div>
<?endif;?>

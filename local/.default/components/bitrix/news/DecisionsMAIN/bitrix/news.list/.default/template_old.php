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
<!--//АХТУНГ!!! Следующая строчка php занимается тем, что отличает для компонента страницу раздела и основную страницу с решениями. Сейчас детальных страниц для каждой услуги нет, но если создать - код немножко поломается!-->
<?if($dir==$arResult["ITEMS"][0]['DETAIL_PAGE_URL']):?>
<div class="content decisions decisionsMain">
   	<!--<div class="intro">
		<div class="wrapper">
			<div class="col-6">
				<h2 class="about_h2">РЕШЕНИЯ</h2>
			</div>
		</div>
	</div>-->
    <div class="wrapper">
<a href="decisions"><h3>Решения</h3></a>
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
                   <p class="decisionMainName"><?echo $arSection['NAME'];?></p> 
                                     <p class="DesMainDescription"><?echo $arResult["SECTION_USER_FIELDS"]["UF_DECISPRETEXT"];?></p>                 
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
    <div class="wrapper">
<h2 class="about_h2"><?echo $arResult["SECTION"][$sectionKey]["NAME"];?></h2>
                  <div class="content-swap">
       			<p><?=$arResult["SECTION"][$sectionKey]["DESCRIPTION"];?></p>
        <div class="news-list">
                    <div class="row " style="color:white;">
                        <?foreach($arResult["ITEMS"] as $arItem):?>
                        <?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
                        <div class="col-4">
                            <div class='decisionToHide'><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"];?>" alt=""></div>
                            <p class='decisionToHide'>
                                <?echo $arItem["NAME"];?>
                            </p>
                            <div class='decisionDescription'>
                                <p>
                                    <?echo $arItem["PREVIEW_TEXT"];?>
                                </p>
                            </div>
                        </div>
                        <?endforeach;?>
                    </div>
                </div>
    </div></div>
</div>
<?endif;?>
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
<div class="content decisions">
   	<!--<div class="intro">
		<div class="wrapper">
			<div class="col-6">
				<h2 class="about_h2">РЕШЕНИЯ</h2>
			</div>
		</div>
	</div>-->
    <div class="wrapper">
<h2 class="about_h2">РЕШЕНИЯ</h2>
        <div class="news-list">
            <div class="content-nav">
               <?$count=0;?>
                <?foreach($arResult["SECTION"] as $arSection):?>
                <div class='<?echo $arSection['CODE'];?> <?if ($count==0)echo'active';$count++;?>'>
                    <p><?echo $arSection['NAME'];?></p>
                </div>
                <?endforeach;?>
            </div>
            <div class="content-swap">
               <?$count=0;?>
                <?foreach($arResult["SECTION"] as $arSection):?>
                <div class="<?echo $arSection['CODE'];?> decisionsSection <?if ($count==0)echo'active';$count++;?>">
                    <div class="row " style="color:white;">
                        <?foreach($arResult["ITEMS"] as $arItem):?>
                        <?if($arSection['ID']==$arItem['IBLOCK_SECTION_ID']):?>
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
                        <?endif;?>
                        <?endforeach;?>
                    </div>
                    <a href="/decisions/<?echo $arSection['CODE'];?>/">
                        <div class="btn">ВСЕ РЕШЕНИЯ</div>
                    </a>
                </div>
                <?endforeach;?>
            </div>
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
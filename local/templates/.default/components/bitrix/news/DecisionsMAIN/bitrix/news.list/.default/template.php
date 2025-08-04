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
<div class="content decisions decisionsMain">
  <div class="wrapper">
		<a href="decisions"><h3>Решения</h3></a>
        <div class="news-list row">
               <?$count=0;?>
                <?foreach($arResult["SECTION"] as $arSection):?>
                <?//d($arSection)?>
                
                <?$rsResult = CIBlockSection::GetList(array("SORT" => "DESC"), array("IBLOCK_ID" => $arParams["IBLOCK_ID"], "ID" =>$arSection["ID"]), false, $arSelect = array("UF_*")); // возвращаем список разделов с нужными нам пользовательскими полями. UF_* — в таком виде выведет все доступные для данного раздела поля.
									// $arParams["IBLOCK_ID"] — у вас может быть получением ID инфоблока другим способом
									// $arResult["SECTION"]["ID"] — и ID раздела тоже, проверяйте через print_r($arResult);
									if($arSection = $rsResult -> GetNext())
    									{
    									$arResult["SECTION_USER_FIELDS"]["UF_DECGIF"] = $arSection["UF_DECGIF"];
									$arResult["SECTION_USER_FIELDS"]["UF_DECSTAT"] = $arSection["UF_DECSTAT"];
    									$arResult["SECTION_USER_FIELDS"]["UF_DECISPRETEXT"] = $arSection["DESCRIPTION"];
									} // создаем переменные с содержимым наших пользовательских полей
									?>
               
               
               
               
                  <div class="col-3 mainList <?echo $arSection['CODE'];?> decisionsSection <?if ($count==0)echo'active';$count++;?>"> <a href="/solutions/<?echo $arSection['CODE'];?>/">
                   	<span class="mainList_wrap">
										 <p class="decisionMainName"><?echo $arSection['NAME'];?></p> 
                                     <p class="DesMainDescription"><?echo $arResult["SECTION_USER_FIELDS"]["UF_DECISPRETEXT"];?></p>
										</span>    
                                      <img class='decisionStat' src="<?=CFile::GetPath($arResult["SECTION_USER_FIELDS"]["UF_DECSTAT"]);?>" alt="">
                  <img class='decisionGif' src="<?=CFile::GetPath($arResult["SECTION_USER_FIELDS"]["UF_DECGIF"]);?>" alt="">
                </a></div>
                <?endforeach;?>
        </div>

    </div>
</div>
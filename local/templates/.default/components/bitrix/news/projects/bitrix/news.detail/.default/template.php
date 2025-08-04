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

<div class="news-detail">
    
    <div class="wrapper">
		<div class='content project_page'>
            
        	<?echo $arResult["DETAIL_TEXT"];?>

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
            
		</div>
    </div>
    
</div>

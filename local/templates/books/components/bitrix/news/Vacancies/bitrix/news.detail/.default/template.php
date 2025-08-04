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
<div class="wrapper">
    <div class="content vacancies vacancy news-detail">
        <div class="row vacancyHead">
            <div class="col-8">
                <h2 class="partners_h2">
                    <?=$arResult["NAME"]?>
                </h2>
                <?echo $arResult["DETAIL_TEXT"];?>
            </div>
            <div class="col-4 vacancyDetailImage" style="background-image: url(<?=$arResult["DETAIL_PICTURE"]["SRC"]?>)"></div>
        </div>
        <div class="row condReq">
            <div class="col-4 CONDITIONS">
               <h3>УСЛОВИЯ</h3>
                <?print_r($arResult['DISPLAY_PROPERTIES']['VACANCY_CONDITIONS']['~VALUE']['TEXT'])?>
            </div>
            <div class="col-4 REQUIREMENTS">
               <h3>ТРЕБОВАНИЯ</h3>
                <?print_r($arResult['DISPLAY_PROPERTIES']['VACANCY_REQUIREMENTS']['~VALUE']['TEXT'])?>
            </div>
        </div>
            <div class="wrapper contact">
            <?$APPLICATION->IncludeComponent(
	"custom:main.feedback", 
	"Vacancies", 
	array(
		"COMPONENT_TEMPLATE" => "Vacancies",
		"EMAIL_TO" => "hr@physnetwork.ru",
		"EVENT_MESSAGE_ID" => array(
			0 => "7",
		),
		"OK_TEXT" => "Спасибо, мы скоро с вами свяжемся!",
		"REQUIRED_FIELDS" => array(
			0 => "NAME",
			1 => "EMAIL",
			2 => "CHECK",
		),
		"USE_CAPTCHA" => "N"
	),
	false
);?>
        </div>
        </div>
</div>

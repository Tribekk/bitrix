<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<div class="mfeedback">
<h3>Заинтересовала вакансия?</h3>
<p>Оставьте свои контактные данные, и наш HR-менеджер свяжется с вами для уточнения деталей.</p>
<div class="wrapper row">
<div class="col-12">
<form action="<?=POST_FORM_ACTION_URI?>" method="POST" enctype="multipart/form-data">
<?=bitrix_sessid_post()?>
<div class="row">
<div class="col-7 row">
	<div class="col-6">
		<div class="mf-name  col-12">
		<div class="mf-text"></div>
			<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?>						<svg id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.43 16.92"><defs><style>.cls-1{fill:none;stroke:#139dd9;stroke-width:0.75px;}</style></defs><title>Безымянный-1</title><path class="cls-1" d="M10.65.38,10,6.9l6.58-1.84L17,8.77l-6.15.49,4,5.32-3.4,1.83L8.66,10.63,6.11,16.41l-3.5-1.83L6.55,9.26.43,8.77,1,5.06,7.46,6.9,6.76.38Z"/></svg><?endif?>
		<input class='<?if((!empty($arResult["ERROR_MESSAGE"]))&&(in_array("NAME", $arResult["ERROR_MESSAGE"]))){echo('errorInput');}?>'
 type="text" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>" placeholder="<?=GetMessage("MFT_NAME")?>">
	</div>
		<div class="mf-email  col-12">
		<div class="mf-text"></div>
			<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?>						<svg id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.43 16.92"><defs><style>.cls-1{fill:none;stroke:#139dd9;stroke-width:0.75px;}</style></defs><title>Безымянный-1</title><path class="cls-1" d="M10.65.38,10,6.9l6.58-1.84L17,8.77l-6.15.49,4,5.32-3.4,1.83L8.66,10.63,6.11,16.41l-3.5-1.83L6.55,9.26.43,8.77,1,5.06,7.46,6.9,6.76.38Z"/></svg><?endif?>

				<input class='<?if((!empty($arResult["ERROR_MESSAGE"]))&&(in_array("EMAIL", $arResult["ERROR_MESSAGE"]))){echo('errorInput');}?>'
 placeholder="<?=GetMessage("MFT_EMAIL")?>" type="text" name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>">
	</div>
		<div class="mf-message  col-12">
		<div class="mf-text"></div>
			<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?>						<svg id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.43 16.92"><defs><style>.cls-1{fill:none;stroke:#139dd9;stroke-width:0.75px;}</style></defs><title>Безымянный-1</title><path class="cls-1" d="M10.65.38,10,6.9l6.58-1.84L17,8.77l-6.15.49,4,5.32-3.4,1.83L8.66,10.63,6.11,16.41l-3.5-1.83L6.55,9.26.43,8.77,1,5.06,7.46,6.9,6.76.38Z"/></svg><?endif?>

        <input placeholder="<?=GetMessage("MFT_MESSAGE")?>"type="MESSAGE" name="MESSAGE" value="<?=$arResult["MESSAGE"]?>">
	</div>
	    <div class="mf-phone  col-12">
		<div class="mf-text"></div>
			<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("PHONE", $arParams["REQUIRED_FIELDS"])):?>						<svg id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.43 16.92"><defs><style>.cls-1{fill:none;stroke:#139dd9;stroke-width:0.75px;}</style></defs><title>Безымянный-1</title><path class="cls-1" d="M10.65.38,10,6.9l6.58-1.84L17,8.77l-6.15.49,4,5.32-3.4,1.83L8.66,10.63,6.11,16.41l-3.5-1.83L6.55,9.26.43,8.77,1,5.06,7.46,6.9,6.76.38Z"/></svg><?endif?>

				<input class='<?if((!empty($arResult["ERROR_MESSAGE"]))&&(in_array("PHONE", $arResult["ERROR_MESSAGE"]))){echo('errorInput');}?>'
 placeholder="<?=GetMessage("MFT_PHONE")?>" type="PHONE" name="PHONE" value="<?=$arResult["PHONE"]?>">
	</div>
	</div>
<div class="col-6">
	<div class="mf-service col-12">
		<div class="mf-text"></div>
			<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("SERVICE", $arParams["REQUIRED_FIELDS"])):?>						<svg id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.43 16.92"><defs><style>.cls-1{fill:none;stroke:#139dd9;stroke-width:0.75px;}</style></defs><title>Безымянный-1</title><path class="cls-1" d="M10.65.38,10,6.9l6.58-1.84L17,8.77l-6.15.49,4,5.32-3.4,1.83L8.66,10.63,6.11,16.41l-3.5-1.83L6.55,9.26.43,8.77,1,5.06,7.46,6.9,6.76.38Z"/></svg><?endif?>

		<textarea placeholder="<?=GetMessage("MFT_SERVICE")?>" name="SERVICE" rows="5" cols="40"><?=$arResult["SERVICE"]?></textarea>
	</div>
</div>
</div>
<div class="col-4 row form__right">
	<div class="fileAttachment">
        <input id='file' class="fileAttachment"  type="file" name="file" value="">
        <label for="file"><p>ДЛЯ ВАШЕГО РЕЗЮМЕ</p><img class="fileArrow" src="<?=SITE_TEMPLATE_PATH?>/img/file1.svg" alt=""><img class="fileFolder" src="<?=SITE_TEMPLATE_PATH?>/img/file2.svg" alt=""></label>
    </div>
	<div class="mf-captcha">
		<div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
		<div class="mf-text">Сколько месяцев в году?</div>
		<input class="<?if((!empty($arResult["ERROR_MESSAGE"]))&&(in_array("BOTTEST", $arResult["ERROR_MESSAGE"]))){echo('errorInput');}?>" type="text" name="BOTTEST" size="30" maxlength="50" value="">
	</div>
	<div class="mf-check">
		<div class="mf-text"></div>
			<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("CHECK", $arParams["REQUIRED_FIELDS"])):?>						<?endif?>
<input id="check" class="check" placeholder="<?=GetMessage("MFT_CHECK")?>" type="checkbox" name="CHECK" <?echo empty($_POST['CHECK']) ? '' : ' checked="checked" '; ?>>
		<label class='<?if((!empty($arResult["ERROR_MESSAGE"]))&&(in_array("CHECK", $arResult["ERROR_MESSAGE"]))){echo('errorCheckbox');}?>'
 for="check"><a target="_blank" href='/upload/Politika_OOO_Fizika_Seti_v_otnoshenii_obrabotki_personalnykh_dannykh.pdf'>Ознакомлен(а) с Политикой в области обработки<br> персональных данных и даю согласие на их обработку.</a></label>
	</div>
</div>


	<?if($arParams["USE_CAPTCHA"] == "Y"):?>
	<div class="mf-captcha">
		<div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div><input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
		<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
		<div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?></div><input type="text" name="captcha_word" size="30" maxlength="50" value="">
	</div>
	<?endif;?><input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
	<div class="row col-12 formFooter">


	<input style="width: auto" class='btn' type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>"></div>
	<div class="feedbackResult"> <?/*if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}*/
    if(!empty($arResult["ERROR_MESSAGE"])){
        echo('<div class="FailedForm"></div>');
    }
if($arResult["OK_MESSAGE"] <> '')
{
	?><div class="mf-ok-text"><?//=$arResult["OK_MESSAGE"]?></div><?
}
?></div>
	</div>
</form>
</div>
</div>
</div>
<?//print_r($arResult['ATTACHMENTS'])?>
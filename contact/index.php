<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Контакты - ФИЗИКА СЕТИ Системный интегратор IT-решений");
$APPLICATION->SetTitle("Связаться с нами");
?><div class="content contact">
	 <?$APPLICATION->IncludeComponent(
	"custom:main.feedback",
	"Contacts",
	Array(
		"COMPONENT_TEMPLATE" => "Contacts",
		"EMAIL_TO" => "hr@physnetwork.ru",
		"EVENT_MESSAGE_ID" => array(0=>"7",),
		"OK_TEXT" => "Спасибо, мы скоро с вами свяжемся!",
		"REQUIRED_FIELDS" => array(0=>"NAME",1=>"EMAIL",2=>"CHECK",),
		"USE_CAPTCHA" => "N"
	)
);?>
	<div class="wrapper row mapDiv">
		<div class="col-4 mapPretext row">
			<h2>МЫ НАХОДИМСЯ ЗДЕСЬ</h2>
			<div class="mapPretextP">
				<p>
					Москва,<br class="desktopOnly">
					 ул. Василисы Кожиной 1,<br>
					 этаж 5 пом. I комната 8И
				</p>
				<p>
					Время работы <br>
					9:00-18:00
				</p>
			</div>
		</div>
		<div class="col-8 map row desktopOnly">
 <a target="_blank" href="https://yandex.ru/maps/org/fizika_seti/188718022149/?ll=37.399399%2C55.726315&z=18"> <img src="http://www.physnetwork.ru/upload/medialibrary/832/KARTA_FIZIKA-01.png" alt=""> </a>
		</div>
	</div>
</div>
<div class="col-12 map row mobileOnly">
 <a target="_blank" href="https://yandex.ru/maps/org/fizika_seti/188718022149/?ll=37.399399%2C55.726315&z=18"> <img src="http://www.physnetwork.ru/upload/medialibrary/832/KARTA_FIZIKA-01.png" alt=""> </a>
</div>
<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
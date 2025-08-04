<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"footer", 
	array(
		"ROOT_MENU_TYPE" => "bottom",
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "",
		"USE_EXT" => "Y",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"COMPONENT_TEMPLATE" => "footer",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>









 


<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/Resources/slick/slick/slick.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/script.js"></script>

</body>

</html>
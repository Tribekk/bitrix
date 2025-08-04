<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>








<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="yandex-verification" content="1e08aaebaad2231f" />
<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/Resources/slick/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/Resources/slick/slick/slick-theme.css"/>
<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/Resources/swiper/swiper-bundle.min.css"/>
<script src="<?=SITE_TEMPLATE_PATH?>/Resources/swiper/swiper-bundle.min.js"></script>
<?$APPLICATION->ShowHead()?>
<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
<title><?$APPLICATION->ShowTitle()?></title>
<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="48x48" href="/favicon-48x48.png">
<link rel="shortcut icon" href="/favicon.png" type="image/x-icon" />
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '800897147389985');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=800897147389985&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code →

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(68076505, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/68076505" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-T6C2H7X2RY"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-T6C2H7X2RY');
</script>

<!--  -->
<!-- 
<link rel="stylesheet" type="text/css" href="https://physnetwork.ru/local/templates/books/Resources/slick/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://physnetwork.ru/local/templates/books/Resources/slick/slick/slick-theme.css"/>
<link rel="stylesheet" type="text/css" href="https://physnetwork.ru/local/templates/books/Resources/swiper/swiper-bundle.min.css"/>
<script src="https://physnetwork.ru/local/templates/books/Resources/swiper/swiper-bundle.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="robots" content="index, follow" />
<meta name="keywords" content="ФИЗИКА СЕТИ Системный интегратор IT-решений" />
<meta name="description" content="ФИЗИКА СЕТИ Системный интегратор IT-решений" />
<link href="https://physnetwork.ru/local/templates/.default/components/bitrix/news/DecisionsMAIN/bitrix/news.list/.default/style.css?1606957734150" type="text/css"  rel="stylesheet" />
<link href="https://physnetwork.ru/local/templates/.default/components/bitrix/news/projects/bitrix/news.list/.default/style.css?1603723526150" type="text/css"  rel="stylesheet" />
<link href="https://physnetwork.ru/local/templates/.default/components/bitrix/news.list/Partners/style.css?1603723526150" type="text/css"  rel="stylesheet" />
<link href="custom.css?18367532923" type="text/css"  data-template-style="true"  rel="stylesheet" />

<script src="https://physnetwork.ru/local/templates/books/components/bitrix/menu/horizontal_multilevel/script.js?1603723526543"></script>
<script src="https://physnetwork.ru/local/templates/books/components/bitrix/menu/footer/script.js?1603723526543"></script> -->

<!--  -->

</head>

<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div> 










<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"horizontal_multilevel", 
	array(
		"ROOT_MENU_TYPE" => "top",
		"MAX_LEVEL" => "3",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"COMPONENT_TEMPLATE" => "horizontal_multilevel",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"MENU_THEME" => "site"
	),
	false
);?>
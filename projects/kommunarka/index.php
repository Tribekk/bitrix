<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Сервисная поддержка");
?><div class="content project-page project-page2">
	<div class="intro row">
		<div class="wrapper">
			<h2 class="about_h2 about_h2-2">Паркинг для ММКЦ «Коммунарка»</h2>
			<p class="serv-title-p">
				Разработка и согласование рабочей документации
			</p>
		</div>
	</div>
	<div class="project-task">
		<div class="wrapper">
			<div class="row">
				<div class="col-4">
					<h3>Задача</h3>
				</div>
				<div class="col-8">
					<div class="project-task-item">
						ММКЦ «Коммунарка» – это&nbsp;многопрофильный клинический кластер, где&nbsp;оказывают плановую и&nbsp;экстренную медицинскую помощь для&nbsp;пациентов со&nbsp;всей России.
					</div>
					<div class="project-task-item">
						Перед «Физикой сети» стояла задача разработать и&nbsp;согласовать в&nbsp;надзорных органах рабочую документацию для&nbsp;паркинга центра. 
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="project-real">
		<div class="wrapper">
			<div class="row">
				<div class="col-4">
					<h3>Реализация</h3>
				</div>
				<div class="col-8">
					<div class="project-real-item">
						Многоуровневый паркинг в&nbsp;Коммунарке предназначен не&nbsp;только для временной стоянки автомобилей, но&nbsp;и&nbsp;для хранения медицинских препаратов. Двойное назначение объекта значительно повышает требования к&nbsp;технической защищенности и&nbsp;решениям в&nbsp;области безопасности здания.
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="project-result">
		<div class="wrapper">
			<div class="row">
				<div class="col-4">
					<h3>Результат</h3>
				</div>
				<div class="col-8">
					<p>Мы&nbsp;провели тщательный анализ уже имеющейся документации, внесли необходимые правки, разработали рабочую документацию и&nbsp;успешно прошли все необходимые согласования.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="project-point">
		<div class="wrapper">
			<div class="row">
				<div class="col-4">
					<div class="project-point-item">
						<div class="project-point-item-title"><span>297</span></div>
						<div class="project-point-item-text">машиномест</div>
					</div>
				</div>
				<div class="col-4">
					<div class="project-point-item">
						<div class="project-point-item-title"><span>15 750</span> м&sup2;</div>
						<div class="project-point-item-text">общая площадь паркинга</div>
					</div>
				</div>
				<div class="col-4">
					<div class="project-point-item">
						<div class="project-point-item-title"><span>8</span></div>
						<div class="project-point-item-text">этажей</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="connect">
		<div class="wrapper">
			<div class="row">
				<div class="col-6 col-flex-start">
					<h2 class="about_h2">Пригласить<br>в тендер</h2>
				</div>
				<div class="col-6">
					<p>
						 Больше всего (ну,&nbsp;почти) наши&nbsp;эксперты<br>любят отвечать на&nbsp;вопросы заказчиков
					</p>
					 <a href="/contact/" class="btn btn_blue">связаться с нами</a>
				</div>
				 </div>
		</div>
	</div>
	<div class="service-sotr">
		<div class="wrapper">
			<div class="row">
				<div class="col-6">
					<h3>Почему стоит работать с&nbsp;нами?</h3>
				</div>
				<div class="col-6">
					<p>
						 При работе с&nbsp;каждым объектом мы&nbsp;всегда фокусируемся на&nbsp;ключевых задачах: соблюдение бюджета и&nbsp;сроков, снижение строительных рисков и&nbsp;повышение инвестиционной привлекательности проекта. Благодаря нашей уникальной методике управления проектами, мы&nbsp;берем на&nbsp;себя всю операционную деятельность, привлекая заказчика только для&nbsp;решения критически важных вопросов.
					</p>
				</div>
			</div>
			<div class="service-sotr-block row">
				<div class="col-6 service-sotr-item">
					<div class="service-sotr-item-title">
						 Экспертиза
					</div>
					<div class="service-sotr-item-txt">
						 15+ лет опыта в&nbsp;проектировании и&nbsp;ежегодное повышение квалификации
					</div>
				</div>
				<div class="col-6 service-sotr-item">
					<div class="service-sotr-item-title">
						 Качество
					</div>
					<div class="service-sotr-item-txt">
						Являемся членами СРО и&nbsp;НОПРИЗ, имеем все необходимые лицензии (МЧС, ФСТЭК и&nbsp;др.)
					</div>
				</div>
				<div class="col-6 service-sotr-item">
					<div class="service-sotr-item-title">
						 Гибкость
					</div>
					<div class="service-sotr-item-txt">
						Проектируем для&nbsp;крупных корпораций и&nbsp;небольших&nbsp;компаний
					</div>
				</div>
				<div class="col-6 service-sotr-item">
					<div class="service-sotr-item-title">
						 Полный цикл
					</div>
					<div class="service-sotr-item-txt">
						Пресейл, проектирование, прохождение экспертизы, монтаж, пусконаладка, сервисная поддержка
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="news">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"Trends",
	Array(
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
		"FIELD_CODE" => array(0=>"",1=>"",),
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
		"PROPERTY_CODE" => array(0=>"TREND_EXTERNAL_LINK",1=>"",),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?><br>
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
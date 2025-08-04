<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О компании");
?><div class="content about">
	<div class="intro row">
		<div class="wrapper">
			<div class="col-6">
				<h2 class="about_h2">
				ВАШ ПРОВОДНИК<br>
				 В ЦИФРОВОЕ</h2>
				<h2 class="blueText bluetext about_h2">БУДУЩЕЕ</h2>
 <img src="/local/templates/books/img/Banner_Company.png" class="mobileOnly about_earth" alt=""> <img src="/local/templates/books/img/company_future.png" class="future desktopOnly" alt="">
				<p>
 <b>Комплексная стратегия или решение прикладной задачи?</b><br>
 <br>
					 Команда ФИЗИКА СЕТИ предоставляет полный портфель ИТ-решений в области цифровой интеграции, цифровой оптимизации и цифровой защиты бизнеса
				</p>
			</div>
		</div>
	</div>
	<div class="approach">
		<div class="wrapper">
			<h3>Подход</h3>
			<div class="row">
				<div class="approach_text">
					<p>
						 Наша миссия— помочь бизнесу извлечь максимум из технологий для успеха: стать быстрее, эффективнее и надежнее в новых реалиях. Наш подход — взглянуть на процессы под другим углом, определить зоны роста и совместно составить план достижения результата.
					</p>
				</div>
				<ul class="float_social">
					<li> <a href="https://www.youtube.com/channel/UCnu0uV7EDinTZ4Qbd_ZVS5g"><img src="/local/templates/books/img/yt.svg" alt=""></a> </li>
				</ul>
			</div>
		</div>
	</div>
	<div class="competence">
		<div class="wrapper">
			<h3>Компетенции</h3>
			<div class="row">
				<div class="col-4">
 <img src="/local/templates/books/img/icon-11.svg" alt="">
					<p>
						 Цифровая интеграция
					</p>
					<p class="about_description">
						 создаем современную ИТ-инфраструктуру с учетом актуальных потребностей бизнеса
					</p>
				</div>
				<div class="col-4">
 <img src="/local/templates/books/img/icon-02.svg" alt="">
					<p>
						 Оптимизация
					</p>
					<p class="about_description">
						 решаем конкретные ИТ-задачи — снижаем затраты, повышаем эффективность и производительность
					</p>
				</div>
				<div class="col-4">
 <img src="/local/templates/books/img/icon-01.svg" alt="">
					<p>
						 Защита бизнеса
					</p>
					<p class="about_description">
						 гарантируем информационную, репутационную защиту данных и физическую безопасность объектов заказчика
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:news",
	"DecisionsMAIN",
	Array(
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "Decisions",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(0=>"",1=>"",),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(0=>"",1=>"",),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "Content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(0=>"",1=>"",),
		"LIST_PROPERTY_CODE" => array(0=>"",1=>"",),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "100",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_FOLDER" => "/",
		"SEF_MODE" => "Y",
		"SEF_URL_TEMPLATES" => array("news"=>"","section"=>"#SECTION_CODE#/","detail"=>"",),
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N"
	),
false,
Array(
	'ACTIVE_COMPONENT' => 'Y'
)
);?><br>
<? if (0>1) : ?>
	<div class="directions">
		<div class="wrapper">
			<h3>Направления</h3>
			<div class="row">
				<div class="col-25">
 <img src="/local/templates/books/img/gear.svg" alt="" style="margin: auto;display:none;">
					<p>
						 Услуги инжиниринга
					</p>
				</div>
				<div class="roll_wrap">
 <img src="/local/templates/books/img/arrow.svg" class="directions_roll" alt="">
				</div>
 <img src="/local/templates/books/img/gear.svg" class="directions_popup" alt="" style="width: 60px; height: 60px">
				<p class="about_description">
					 создание проектной документации, техническое и консультационное сопровождение на всех этапах проекта
				</p>
			</div>
			<div class="row">
				<div class="col-25">
 <img src="/local/templates/books/img/icon-03.svg" alt="" style="margin: auto;display:none;">
					<p>
						 Мобильность бизнеса
					</p>
				</div>
				<div class="roll_wrap">
 <img src="/local/templates/books/img/arrow.svg" class="directions_roll" alt="">
				</div>
 <img src="/local/templates/books/img/icon-03.svg" class="directions_popup" alt="">
				<p class="about_description">
					 создание единого информационного пространства, не ограниченного пределами офиса
				</p>
			</div>
			<div class="row">
				<div class="col-25">
 <img src="/local/templates/books/img/icon_14-14.svg" alt="" style="margin: auto;display:none;">
					<p>
						 Эффективная работа с данными
					</p>
				</div>
				<div class="roll_wrap">
 <img src="/local/templates/books/img/arrow.svg" class="directions_roll" alt="">
				</div>
 <img src="/local/templates/books/img/icon_14-14.svg" class="directions_popup" alt="">
				<p class="about_description">
					 разработка и внедрение систем для сбора, обработки, хранения и анализа данных
				</p>
			</div>
			<div class="row">
				<div class="col-25">
 <img src="/local/templates/books/img/icon-08.svg" alt="" style="margin: auto;display:none;">
					<p>
						 Информационная безопасность бизнеса
					</p>
				</div>
				<div class="roll_wrap">
 <img src="/local/templates/books/img/arrow.svg" class="directions_roll" alt="">
				</div>
 <img src="/local/templates/books/img/icon-08.svg" class="directions_popup" alt="">
				<p class="about_description">
					 защита репутации компании и снижение финансовых рисков
				</p>
			</div>
			 <!--<a href="/decisions">
			<div class="btn">
				 ВСЕ УСЛУГИ
			</div>
 </a>-->
		</div>
	</div>
<? endif; ?>
	<div class="connect">
		<div class="wrapper">
			<div class="row">
				<div class="col-6">
					<h2 class="about_h2">КАКАЯ ЗАДАЧА <br>
					 СТОИТ ПЕРЕД ВАМИ?</h2>
				</div>
				<div class="col-6">
					<p>
						 Напишите нам, и мы подберем оптимальное<br>решение для вашей компании
					</p>
 <a href="/contact">
					<div class="btn btn_blue">
						 СВЯЗАТЬСЯ С НАМИ
					</div>
 </a>
				</div>
			</div>
		</div>
	</div>
	<!-- <div class="technologies">
		<div class="wrapper">
			<h3>Технологии</h3>
			<div class="row">
				<div class="col-6">
					<p>
						 Мы используем оборудование и технологии ведущих производителей: HPE/Aruba, Dell/EMC, Lenovo, Bull, NetАpp, Fujitsu, Extreme Networks, Huawei, Fortinet, CheckPoint, Positive Technologies, Unify, Avaya, ABB, Rittal, Schneider Electric, APC, Siemens, Hirschmann, MOXA, ISS, а также оборудование российских производителей
					</p>
				</div>
				<div class="col-6">
					<div class="partner_logos">
 <img src="/local/templates/books/img/partners/Avaya_Logo.svg" alt=""> <img src="/local/templates/books/img/partners/Lenovo_logo_2015.svg" alt=""> <img src="/local/templates/books/img/partners/HP_New_Logo_2D.svg" alt=""> <img src="/local/templates/books/img/partners/dr-web-logo.svg" alt=""> <img src="/local/templates/books/img/partners/Dell_Logo.svg" alt=""> <img src="/local/templates/books/img/partners/Hitachi_Logo.svg" alt=""> <img src="/local/templates/books/img/partners/Cisco_logo.svg" alt=""> <img src="/local/templates/books/img/partners/extreme-networks-vector-logo.svg" alt=""> <img src="/local/templates/books/img/partners/Riverbed_logo.svg" alt=""> <img src="/local/templates/books/img/partners/Xerox_logo.svg" alt=""> <img src="/local/templates/books/img/partners/kaspersky-logo-2019.svg" alt="">
					</div>
				</div>
			</div>
 <a href="/partners">
			<div class="btn">
				 ВСЕ ПАРТНЕРЫ
			</div>
 </a>
		</div>
	</div>-->
	<div class="about_projects">
		<div class="wrapper">
			<h3>Проекты</h3>
			<div class="row">
				<div class="col-6">
					<p>
						 С 2017 года ФИЗИКА СЕТИ работает на рынке крупных ИТ-проектов в различных областях: финансовой, нефтегазовой, добывающей, машиностроительной, энергетической, сетевой розничной торговли и многих других
					</p>
				</div>
				<div class="col-6">
					<p class="blue_text">
						 В портфолио решений команды — проекты для предприятий госкорпорации «Росатом», ОАО «РЖД», «Триколор ТВ», ПАО «Роснефть», ПАО «Северсталь», ПАО «Газпром Нефть», KCA Deutag и других
					</p>
				</div>
			</div>
			<div class="row logos">
				<div>
					<div>
 <img src="/local/templates/books/img/logo-gazprom-neft.png" alt="">
					</div>
				</div>
				<div>
					<div>
 <img src="/local/templates/books/img/tricolor.png" alt="">
					</div>
				</div>
				<div>
					<div>
 <img src="/local/templates/books/img/1280px-RZD.svg.png" alt="">
					</div>
				</div>
				<div>
					<div>
 <img src="/local/templates/books/img/1280px-Rosneft_Logo.svg.png" alt="">
					</div>
				</div>
				<div>
					<div>
 <img src="/local/templates/books/img/severstal.png" alt="">
					</div>
				</div>
				<div>
					<div>
 <img src="/local/templates/books/img/177668.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<? if (0>1): ?>
	<div class="about_c">
		<div class="wrapper">
			<h3>О компании</h3>
			<div class="col-12">
				<div class="row">
					<div class="col-4">
						<div class="year">
							<h2>2017</h2>
							<p>
								 ЗАПУСК ПРОЕКТА ФИЗИКА СЕТИ
							</p>
							<div>
 <a target="_blank" href="/local/templates/books/Resources/General_02_27.pdf">
								<div class="btn">
									 ПРОСМОТРЕТЬ ПРЕЗЕНТАЦИЮ
								</div>
 </a>
							</div>
						</div>
					</div>
					<div class="col-8">
						<p class="about_c_p">
							 <b>ФИЗИКА СЕТИ</b> — российская компания, созданная профессионалами в сфере информационных технологий, имеющими многолетний опыт работы в ведущих российских и зарубежных ИТ-командах.
						</p>
					</div>
				</div>
			</div>
			<h3 class="about_white_header"></h3>
			<div class="row">
				<div class="col-4">
 <img src="/local/templates/books/img/icon-10.svg" alt="">
					<p>
						 Tailor made package
					</p>
					<p class="about_description">
						 подбор оптимальных решений для каждого конкретного заказчика
					</p>
				</div>
				<div class="col-4">
 <img src="/local/templates/books/img/icon-06.svg" alt="">
					<p>
						 «Нет» проблемам
					</p>
					<p class="about_description">
						 для развития вашего бизнеса в нашем арсенале имеются отраслевые технологии и сильные партнерские связи
					</p>
				</div>
				<div class="col-4">
 <img src="/local/templates/books/img/icon-07.svg" alt="">
					<p>
						 Уникальный опыт
					</p>
					<p class="about_description">
						 наша команда — это высоко- квалифицированные специалисты, имеющие большой опыт работы в сфере проектирования, построения и сопровождения сетей связи
					</p>
				</div>
				<div class="col-4">
 <img src="/local/templates/books/img/icon_13-13.svg" alt="">
					<p>
						 Отслеживание трендов
					</p>
					<p class="about_description">
						 наши клиенты задают моду в технологической сфере с помощью инновационных решений
					</p>
				</div>
				<div class="col-4">
 <img src="/local/templates/books/img/icon-09.svg" alt="">
					<p>
						 Импортозамещение
					</p>
					<p class="about_description">
						 в нашем вендерском портфеле есть решения как иностранных, так и отечественных производителей
					</p>
				</div>
				<div class="col-4">
 <img src="/local/templates/books/img/icon-05.svg" alt="">
					<p>
						 Сервис
					</p>
					<p class="about_description">
						 обучаем персонал клиента использовать платформы/инфраструктуру/ПО максимально эффективно
					</p>
				</div>
				<div class="col-4">
 <img src="/local/templates/books/img/icon-04.svg" alt="">
					<p>
						 Решения в аренду
					</p>
					<p class="about_description">
						 современная модель потребления IT-решений — подписка, аренда, лизинг
					</p>
				</div>
				 <!--<div class="col-4 button_col4">
					<div class="button_wrapper">
 <a href="/license">
						<div class="btn">
							 лицензии и сертификаты
						</div>
 </a>
					</div>
				</div>-->
			</div>
		</div>
	</div>
	<? endif; ?>
	
	<div class="wrapper">
		<div class="about_c">
			<div class="wrapper">
 <a href="/about">
				<h3>О компании</h3>
				</a>
				<div class="col-12">
					<div class="row">
						<div class="col-4">
							<div class="year">
								<h2>2012</h2>
								<p>
									ЗАПУСК ПРОЕКТА ФИЗИКА СЕТИ
								</p>
								<div>
									<div class="btn">
										<a href="http://physnetwork.ru/local/templates/books/Resources/General_15_05.pdf" target="_blank"> ПОЛУЧИТЬ ПРЕЗЕНТАЦИЮ </a>
									</div>
								</div>
								<div class="about_c_contact">Ищете оптимальное решение для&nbsp;своего бизнеса? Учтем все&nbsp;задачи и&nbsp;подберем лучшее решение. <a href="/contact/" target="_blank">Свяжитесь с&nbsp;нами</a>, чтобы&nbsp;получить индивидуальный расчет по&nbsp;проекту.</div>
							</div>
						</div>
						<div class="col-8">
							<p class="about_c_p">
								<b>«ФИЗИКА СЕТИ»</b>&nbsp;—&nbsp;комплексный системный интегратор полного цикла. Мы&nbsp;специализируемся на&nbsp;разработке и&nbsp;реализации сложных ИТ&#8209;проектов для&nbsp;бизнеса и&nbsp;государства. Нас&nbsp;отличает скорость, неформальный подход к&nbsp;задачам и&nbsp;умение добиваться снижения расходов на&nbsp;ИТ за&nbsp;счет нестандартных решений
							</p>
							<div class="about-item">
								<div class="about-item-text">
									Реализация проектов в&nbsp;формате EPC+, где&nbsp;отвечаем за&nbsp;все этапы работ: от&nbsp;концепции до&nbsp;ввода оборудования в&nbsp;эксплуатацию
								</div>
							</div>
							<div class="about-item">
								<div class="about-item-text">
									Инжиниринг. Охватываем каждый этап создания системы: от&nbsp;эскизного проекта до&nbsp;создания информационной модели здания (BIM) с&nbsp;образцами реального оборудования
								</div>
							</div>
							<div class="about-item">
								<div class="about-item-text">
									Поставка программно&#8209;аппаратных комплексов и&nbsp;ИТ&#8209;оборудования, внесенных в&nbsp;РЭП и&nbsp;РПП, а&nbsp;также оборудования ТОРП: сервера, СХД, сетевое и&nbsp;телекоммуникационное оборудование, ПК, межсетевые экраны, IP&#8209;телефония и&nbsp;др.
								</div>
							</div>
							<div class="about-item">
								<div class="about-item-text">
									Поставка программного обеспечения на&nbsp;базе Python, Java, JavaScript, C#, C++, PHP, включенных в&nbsp;Единый реестр российских программ для&nbsp;электронных вычислительных машин и&nbsp;баз данных
								</div>
							</div>
							<div class="about-item">
								<div class="about-item-text">
									Сервисная ИТ&#8209;поддержка в&nbsp;режиме 24/7. Благодаря мультивендорной экспертизе предлагаем варианты на&nbsp;стыке решений разных производителей
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper">
		<div class="about_c">
			<div class="wrapper">
				<div class="row bullets-block">
					<div class="bullets-item">
 <img src="/local/templates/books/images/icon01.svg" alt="">
						<div class="bullets-title">
							Исходим из&nbsp;целей бизнеса
						</div>
						<div class="bullets-txt">
							Не инновации ради инноваций,<br>
							а&nbsp;взвешенные ИТ&#8209;решения для&nbsp;роста и&nbsp;конкурентоспособности вашего бизнеса
						</div>
					</div>
					<div class="bullets-item">
 <img src="/local/templates/books/images/icon02.svg" alt="">
						<div class="bullets-title">
							Соблюдаем сроки
						</div>
						<div class="bullets-txt">
							 За&nbsp;счет эффективного управления, системы мотивации и&nbsp;командной работы реализуем проекты максимально оперативно
						</div>
					</div>
					<div class="bullets-item">
 <img src="/local/templates/books/images/icon03.svg" alt="">
						<div class="bullets-title">
							Привлекаем финансирование
						</div>
						<div class="bullets-txt">
							 Привлекаем проектное финансирование на&nbsp;сложные проекты: лизинг, рассрочка, аккредитив
						</div>
					</div>
					<div class="bullets-show bullets-btn">
						Показать еще
					</div>
					<div class="bullets-hide-block">
						<div class="bullets-item">
 <img src="/local/templates/books/images/icon04.svg" alt="">
							<div class="bullets-title">
								Заботимся о людях
							</div>
							<div class="bullets-txt">
								 Внедряем ИТ&#8209;решения, которые помогают вашим&nbsp;сотрудникам сосредоточиться на&nbsp;том, что&nbsp;действительно важно
							</div>
						</div>
						<div class="bullets-item">
 <img src="/local/templates/books/images/icon05.svg" alt="">
							<div class="bullets-title">
								Думаем о будущем
							</div>
							<div class="bullets-txt">
								 Выстраиваем долгосрочные отношения с&nbsp;вендорами, что&nbsp;позволяет предлагать выгодные&nbsp;коммерческие условия
							</div>
						</div>
						<div class="bullets-item">
 <img src="/local/templates/books/images/icon06.svg" alt="">
							<div class="bullets-title">
								Повышаем экспертизу
							</div>
							<div class="bullets-txt">
								 Наши&nbsp;эксперты регулярно проходят обучение, развивая soft- и&nbsp;hard&#8209;скиллы
							</div>
						</div>
					</div>
					<div class="bullets-hide bullets-btn">
						Скрыть
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
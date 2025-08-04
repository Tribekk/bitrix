<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "ИТ-решения, ФИЗИКА СЕТИ, цифровая интеграция, цифровая оптимизация, цифровая защита");
$APPLICATION->SetPageProperty("description", "ФИЗИКА СЕТИ Системный интегратор IT-решений");
$APPLICATION->SetPageProperty("title", "ФИЗИКА СЕТИ  Системный интегратор ИТ-решений");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Главная страница");
?><div class="content mainpage">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"indexSlider",
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
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("",""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "Content",
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
		"PROPERTY_CODE" => array("LINK","VIDEO","VIDEO_MOB"),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
	<div class="wrapper" style="display: none">
		<div class="importozameshchenie">
			<div class="row">
				<div class="col-12">
 <a href="/importozameshchenie" class="importozameshchenie__header">
					<h3>ИМПОРТОЗАМЕЩЕНИЕ </h3> ваыаываыва
 </a>
					<p class="importozameshchenie__text">
						 Физика Сети уже не первый год помогает компаниям выгодно внедрять отечественные инновационные разработки, выстраивать инфраструктуру, которая не зависит от колебаний рынка и санкций. Наши клиенты всегда в курсе текущих тенденций, рисков и подготовлены к максимально эффективной работе при любых обстоятельствах. Наша команда поможет вашему бизнесу быстро и эффективно полностью перейти на отечественные решения.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-4">
					<div class="importozameshchenie__point imp-point">
						<div class="imp-point__img">
 <img src="/local/templates/books/img/importozameshchenie.svg" alt="">
						</div>
						<div class="imp-point__text">
							 Разработка стратегии импортозамещения
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="importozameshchenie__point imp-point">
						<div class="imp-point__img">
 <img src="/local/templates/books/img/importozameshchenie1.svg" alt="">
						</div>
						<div class="imp-point__text">
							 Аудит существующей инфраструктуры заказчика, оценка технической возможности интеграции выбранных решений
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="importozameshchenie__point imp-point">
						<div class="imp-point__img">
 <img src="/local/templates/books/img/importozameshchenie2.svg" alt="">
						</div>
						<div class="imp-point__text">
							 Технико-экономическое обоснование перехода на выбранные решения
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="importozameshchenie__point imp-point">
						<div class="imp-point__img">
 <img src="/local/templates/books/img/importozameshchenie3.svg" alt="">
						</div>
						<div class="imp-point__text">
							 Пилот для тестирования типового решения, для сравнения вендоров. Проектирование типового решения
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="importozameshchenie__point imp-point">
						<div class="imp-point__img">
 <img src="/local/templates/books/img/importozameshchenie4.svg" alt="">
						</div>
						<div class="imp-point__text">
							 Проектирование и внедрение системы безопасности значимых объектов КИИ (187-ФЗ) на объектах заказчика
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="importozameshchenie__point imp-point">
						<div class="imp-point__img">
 <img src="/local/templates/books/img/importozameshchenie5.svg" alt="">
						</div>
						<div class="imp-point__text">
							 Проектирование ИКТ-инфраструктуры под задачи заказчика
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="importozameshchenie__point imp-point">
						<div class="imp-point__img">
 <img src="/local/templates/books/img/importozameshchenie6.svg" alt="">
						</div>
						<div class="imp-point__text">
							 Подготовка тендерной документации для процедур закупки отечественных решений по 44-ФЗ и 223-ФЗ
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="importozameshchenie__point imp-point">
						<div class="imp-point__img">
 <img src="/local/templates/books/img/importozameshchenie7.svg" alt="">
						</div>
						<div class="imp-point__text">
							 Строительство инфраструктуры заказчика
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="importozameshchenie__point imp-point">
						<div class="imp-point__img">
 <img src="/local/templates/books/img/importozameshchenie8.svg" alt="">
						</div>
						<div class="imp-point__text">
							 Поддержка и сопровождение отечественных решений, оказание сервиса, обеспечение технической документации
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper" style="display: none">
		<div class="portfolio">
			<h3>Портфель отечественных производителей:</h3>
			<div class="row">
				<div class="col-6">
					<div class="portfolio__item">
						<div class="portfolio__item-name">
							 ВИРТУАЛИЗАЦИЯ
						</div>
						<div class="portfolio__item-vendors">
							 zVirt<br>
							 Аэродиск<br>
							 Скала-Р<br>
							 Термидеск<br>
							 Тионикс
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="portfolio__item">
						<div class="portfolio__item-name">
							 СЕРВЕРЫ
						</div>
						<div class="portfolio__item-vendors">
							 AQUARIUS<br>
							 DEPO Computers<br>
							 QTECH<br>
							 YADRO<br>
							 Kraftway
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="portfolio__item">
						<div class="portfolio__item-name">
							 Информационная безопасность
						</div>
						<div class="portfolio__item-vendors">
							 Positive Technologies<br>
							 UserGate<br>
							 Infotecs<br>
							 С-Терра<br>
							 Код Безопасности<br>
							 Kaspersky
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="portfolio__item">
						<div class="portfolio__item-name">
							 Унифицированные коммуникации и мультимедиа
						</div>
						<div class="portfolio__item-vendors">
							 Vinteo<br>
							 FLAT<br>
							 QTECH<br>
							 CommuniGate<br>
							 Mind<br>
							 TrueConf
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="portfolio__item">
						<div class="portfolio__item-name">
							 СХД
						</div>
						<div class="portfolio__item-vendors">
							 QTECH<br>
							 AQUARIUS<br>
							 DEPO Computers<br>
							 Aerodisk
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="portfolio__item">
						<div class="portfolio__item-name">
							 СЕТИ
						</div>
						<div class="portfolio__item-vendors">
							 QTECH<br>
							 NATEKS<br>
							 Eltex<br>
							 Т-Ком
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="portfolio__item">
						<div class="portfolio__name__job portfolio__item-name">
							 Рабочее место, оргтехника
						</div>
						<div class="portfolio__item-vendors">
							 DEPO<br>
							 AQUARIUS<br>
							 Kraftway<br>
							 TONK<br>
							 КАТЮША<br>
							 F+
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="portfolio__item">
						<div class="portfolio__name__OS portfolio__item-name">
							 Операционные системы и прикладное ПО
						</div>
						<div class="portfolio__item-vendors">
							 Business Ecosystems<br>
							 СДИ Софт<br>
							 Astra Linux<br>
							 Р7 Офис<br>
							 Мой Офис<br>
							 ISPSystems<br>
							 Postgres Pro<br>
							 Скала-Р
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
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
 <a href="http://physnetwork.ru/local/templates/books/Resources/About_Fizika.pdf" target="_blank"> ПОЛУЧИТЬ ПРЕЗЕНТАЦИЮ </a>
									</div>
								</div>
								<div class="about_c_contact">
									Ищете оптимальное решение для&nbsp;своего бизнеса? Учтем все&nbsp;задачи и&nbsp;подберем лучшее решение. <a href="/contact/" target="_blank">Свяжитесь с&nbsp;нами</a>, чтобы&nbsp;получить индивидуальный расчет по&nbsp;проекту.
								</div>
							</div>
						</div>
						<div class="col-8">
							<p class="about_c_p">
 <b>«ФИЗИКА СЕТИ»</b>&nbsp;—&nbsp;комплексный системный интегратор полного цикла. Мы&nbsp;специализируемся на&nbsp;разработке и&nbsp;реализации сложных ИТ‑проектов для&nbsp;бизнеса и&nbsp;государства. Нас&nbsp;отличает скорость, неформальный подход к&nbsp;задачам и&nbsp;умение добиваться снижения расходов на&nbsp;ИТ за&nbsp;счет нестандартных решений
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
									 Поставка программно‑аппаратных комплексов и&nbsp;ИТ‑оборудования, внесенных в&nbsp;РЭП и&nbsp;РПП, а&nbsp;также оборудования ТОРП: сервера, СХД, сетевое и&nbsp;телекоммуникационное оборудование, ПК, межсетевые экраны, IP‑телефония и&nbsp;др.
								</div>
							</div>
							<div class="about-item">
								<div class="about-item-text">
									 Поставка программного обеспечения на&nbsp;базе Python, Java, JavaScript, C#, C++, PHP, включенных в&nbsp;Единый реестр российских программ для&nbsp;электронных вычислительных машин и&nbsp;баз данных
								</div>
							</div>
							<div class="about-item">
								<div class="about-item-text">
									 Сервисная ИТ‑поддержка в&nbsp;режиме 24/7. Благодаря мультивендорной экспертизе предлагаем варианты на&nbsp;стыке решений разных производителей
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="connect">
		<div class="wrapper">
			<div class="row">
				<div class="col-6">
					<h2 class="about_h2">Задать вопрос эксперту</h2>
				</div>
				<div class="col-6">
					<p>
						 Больше всего (ну, почти) наши эксперты<br>
						любят отвечать на&nbsp;вопросы заказчиков
					</p>
 <a href="/contact" class="btn btn_blue">
					СВЯЗАТЬСЯ С НАМИ </a>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper">
		<div class="about_c">
			<div class="wrapper">
				<div class="row bullets-block bullets-block2">
					<div class="bullets-item">
 <img src="/local/templates/books/images/icon07.svg" alt="">
						<div class="bullets-title">
							 Программное обеспечение
						</div>
						<div class="bullets-txt">
							 В комплексных интеграционных решениях используем системное и&nbsp;прикладное отечественное&nbsp;ПО, которое включено в&nbsp;«Единый реестр российских программ для&nbsp;ЭВМ&nbsp;и&nbsp;баз&nbsp;данных» Минцифры. В&nbsp;общей сложности используем более&nbsp;50&nbsp;различных ПО, предназначенных для&nbsp;разных задач
						</div>
						<div class="bullets-txt-show bullets-txt-btn">
							Подробнее
						</div>
						<div class="bullets-txt-block">
							<p>
								—&nbsp;«СДИ&nbsp;Базис» от&nbsp;«СДИ&nbsp;Софт» для&nbsp;цифрового документирования инженерной, ИТ‑ и&nbsp;телеком‑инфраструктуры организаций<br>
								 —&nbsp;zVirt от&nbsp;OrionSoft, которая включает в&nbsp;себя весь&nbsp;необходимый функционал для&nbsp;эффективного управления серверами и&nbsp;виртуальными машинами<br>
								 —&nbsp;Nova Container Platform от&nbsp;OrionSof в&nbsp;качестве платформы для&nbsp;оркестрации контейнеризированных приложений<br>
								 —&nbsp;RuBackup от&nbsp;«Астра», профессиональное решение для&nbsp;резервного копирования&nbsp;—&nbsp;Termidesk от&nbsp;«Астра» для&nbsp;создания инфраструктуры виртуальных рабочих мест и&nbsp;организации безопасной удаленной работы сотрудников.
							</p>
							<p>
								Наши партнеры в&nbsp;этом направлении: Орионсофт, Астра, РОСА, Аэродиск, Raidix, Киберпротект, VK.
							</p>
							<p>
								Стоимость каждого проекта рассчитывается индивидуально. <a href="/contact/" target="_blank">Свяжитесь с&nbsp;нами</a>, чтобы получить расчет.
							</p>
							<div class="bullets-txt-hide bullets-txt-btn">
								Скрыть
							</div>
						</div>
					</div>
					<div class="bullets-item">
 <img src="/local/templates/books/images/icon08.svg" alt="">
						<div class="bullets-title">
							 Кибербезопасность
						</div>
						<div class="bullets-txt">
							 Выстраиваем информационную защиту ИТ‑инфраструктуры и&nbsp;телекоммуникационных систем компаний, отталкиваясь от&nbsp;архитектуры организаций и&nbsp;задач бизнеса. Сотрудничаем со&nbsp;всеми лидерами отрасли, предлагая заказчику оптимальный технологический стек.
						</div>
						<div class="bullets-txt-show bullets-txt-btn">
							Подробнее
						</div>
						<div class="bullets-txt-block">
							<p>
								—&nbsp;MaxPatrol SIEM от&nbsp;Positive Technologies для&nbsp;выявления сложных атак<br>
								 —&nbsp;NGFW от&nbsp;UserGate, который совмещает в&nbsp;себе систему обнаружения вторжения и&nbsp;межсетевой экран и&nbsp;находится в&nbsp;реестре сертифицированных средств защиты информации&nbsp;ФСТЭК России<br>
								 —&nbsp;Каspersky Security Cloud от&nbsp;«Лаборатория Касперского»&nbsp;для облачной защиты<br>
								 —&nbsp;Континент АП/ZTN от&nbsp;«Код Безопасности», которое обеспечивает защищенный доступ в&nbsp;корпоративную сеть при&nbsp;удаленном подключении
							</p>
							<p>
								Наши партнеры в&nbsp;этом направлении: Positive Technologies, Infotecs, «Лаборатория Касперского», UserGate и&nbsp;др.
							</p>
							<p>
								Стоимость каждого проекта рассчитывается индивидуально. <a href="/contact/" target="_blank">Свяжитесь с&nbsp;нами</a>, чтобы получить расчет.
							</p>
							<div class="bullets-txt-hide bullets-txt-btn">
								Скрыть
							</div>
						</div>
					</div>
					<div class="bullets-item">
 <img src="/local/templates/books/images/icon09.svg" alt="">
						<div class="bullets-title">
							 Инжиниринг
						</div>
						<div class="bullets-txt">
							 Проектируем объекты любой сложности. Являемся членами СРО и&nbsp;НОПРИЗ, имеем все&nbsp;необходимые лицензии (МЧС, ФСТЭК и&nbsp;др.) Мы&nbsp;предлагаем полный цикл инжиниринговых услуг, включающий все&nbsp;этапы: пресейл, проектирование, прохождение надзорных органов, монтаж, пусконаладка, сервисная поддержка.
						</div>
						<div class="bullets-txt-show bullets-txt-btn">
							Подробнее
						</div>
						<div class="bullets-txt-block">
							<p>
								Ключевые направления:<br>
								 —&nbsp;Информационное моделирование (BIM) и&nbsp;разработка разработка моделей оборудования (Revit‑семейств), подход позволяет повышать эффективность и&nbsp;снижать стоимость строительства<br>
								 —&nbsp;Проектирование систем связи и&nbsp;систем безопасности. Комплексно подходим к&nbsp;разработке слаботочных систем и&nbsp;систем безопасности, гарантируя качество и&nbsp;прозрачность работ на&nbsp;всех этапах работ<br>
								 —&nbsp;Разрабатываем всю&nbsp;необходимую документацию для&nbsp;получения разрешения на&nbsp;строительства объекта<br>
								 —&nbsp;Помогаем получить все&nbsp;необходимые разрешения в&nbsp;надзорных органах: ресурсоснабжающих организаций, некоммерческих организациях и&nbsp;казенных предприятиях, государственных ведомствах и&nbsp;министерствах и&nbsp;экспертизах
							</p>
							<p>
								Стоимость каждого проекта рассчитывается индивидуально. <a href="/contact/" target="_blank">Свяжитесь с&nbsp;нами</a>, чтобы получить расчет.
							</p>
							<div class="bullets-txt-hide bullets-txt-btn">
								Скрыть
							</div>
						</div>
					</div>
					<div class="bullets-show bullets-btn">
						 Показать еще
					</div>
					<div class="bullets-hide-block">
						<div class="bullets-item">
 <img src="/local/templates/books/images/icon10.svg" alt="">
							<div class="bullets-title">
								 Телекоммуникационные шкафы для ВЭС. Собственные разработки.
							</div>
							<div class="bullets-txt">
								 Предлагаем к&nbsp;реализации телекоммуникационные шкафы для&nbsp;ветроэлектростанций собственной разработки. В&nbsp;состав шкафа входят:
							</div>
							<div class="bullets-txt-show bullets-txt-btn">
								Подробнее
							</div>
							<div class="bullets-txt-block">
								<p>
									Панели распределения питания по&nbsp;постоянному (DC) и&nbsp;переменному (AC) току, автоматические выключатели и&nbsp;коммутирующие силовые клеммы, оптические боксы и&nbsp;патч‑панели, промышленные коммутаторы, блоки розеток, источники бесперебойного питания и&nbsp;силовой батарейный модуль, вентиляционные модули, сетевое телекоммуникационное оборудование.
								</p>
								<p>
									Для шкафов была разработана конструкторская, рабочая документация, изготовлены паспорта изделий.<br>
									Основные компоненты шкафа производятся отечественными компаниями: Натекс, Триком, ЦМО.
								</p>
								<p>
									Стоимость каждого проекта рассчитывается индивидуально. <a href="/contact/" target="_blank">Свяжитесь с&nbsp;нами</a>, чтобы получить расчет.
								</p>
								<div class="bullets-txt-hide bullets-txt-btn">
									Скрыть
								</div>
							</div>
						</div>
						<div class="bullets-item">
 <img src="/local/templates/books/images/icon11.svg" alt="">
							<div class="bullets-title">
								 Программно‑аппаратные комплексы виртуализации. Собственные разработки
							</div>
							<div class="bullets-txt">
								 Предлагаем программно‑аппаратные комплексы виртуализации собственной разработки, которые включают в&nbsp;себя инженерную инфраструктуру.
							</div>
							<div class="bullets-txt-show bullets-txt-btn">
								Подробнее
							</div>
							<div class="bullets-txt-block">
								<p>
									 В&nbsp;инфраструктуру входят: стойки, гарантированное питание и&nbsp;охлаждение, сетевая инфраструктура, вычислительная инфраструктура, программное обеспечение, которое включено в&nbsp;«Единый реестр российских программ для&nbsp;ЭВМ&nbsp;и&nbsp;баз&nbsp;данных» Минцифры.
								</p>
								<p>
									Основные компоненты решений производятся отечественными компаниями: ЦМО, QTECH, «Вектор Технологии», DEPO Computers, «Аквариус», YADRO, Orionsoft, «РОСА», «Киберпротект» и&nbsp;др.
								</p>
								<p>
									Стоимость каждого проекта рассчитывается индивидуально. <a href="/contact/" target="_blank">Свяжитесь с&nbsp;нами</a>, чтобы получить расчет.
								</p>
								<div class="bullets-txt-hide bullets-txt-btn">
									Скрыть
								</div>
							</div>
						</div>
						<div class="bullets-item">
 <img src="/local/templates/books/images/icon12.svg" alt="">
							<div class="bullets-title">
								 Сервисная поддержка и обслуживание ИТ‑инфраструктуры
							</div>
							<div class="bullets-txt">
								 Предоставляем полный комплекс услуг в&nbsp;области сервисного обслуживания: от&nbsp;решения локальных задач до&nbsp;расширенной гарантийной поддержки и&nbsp;комплексного обслуживания ИТ‑инфраструктуры.
							</div>
							<div class="bullets-txt-show bullets-txt-btn">
								Подробнее
							</div>
							<div class="bullets-txt-block">
								<p>
									При необходимости, подбираем аналоги отечественных вендоров и&nbsp;обеспечиваем бесшовный переход.
								</p>
								<p>
									Работаем с&nbsp;ведущими западными и&nbsp;российскими вендорами: «Аквариус», DEPO Computers, QTECH, YADRO, Kraftway, Fortinet, Cisco и&nbsp;др.
								</p>
								<p>
									Стоимость каждого проекта рассчитывается индивидуально. <a href="/contact/" target="_blank">Свяжитесь с&nbsp;нами</a>, чтобы получить расчет.
								</p>
								<div class="bullets-txt-hide bullets-txt-btn">
									Скрыть
								</div>
							</div>
						</div>
						<div class="bullets-item">
 <img src="/local/templates/books/images/icon13.svg" alt="">
							<div class="bullets-title">
								 ИТ‑инфраструктура
							</div>
							<div class="bullets-txt">
								 Предлагаем полный комплекс услуг по&nbsp;работе с&nbsp;ИТ‑инфраструктурой: от&nbsp;разработки концепции и&nbsp;создании дорожной карты развития до&nbsp;масштабирования и&nbsp;сервисной поддержки. Работаем с&nbsp;ведущими отечественными вендорами.
							</div>
							<div class="bullets-txt-show bullets-txt-btn">
								Подробнее
							</div>
							<div class="bullets-txt-block">
								<p>
									Лидеры индустрии предоставляют ИТ‑решения любого уровня сложности для&nbsp;крупного, среднего и&nbsp;малого бизнеса, частных и&nbsp;государственных компаний: «Аквариус», ICL, «КАТЮША», DEPO Computers, NERPA, DатаРу, QTECH и&nbsp;др.
								</p>
								<p>
									Стоимость каждого проекта рассчитывается индивидуально. <a href="/contact/" target="_blank">Свяжитесь с&nbsp;нами</a>, чтобы получить расчет.
								</p>
								<div class="bullets-txt-hide bullets-txt-btn">
									Скрыть
								</div>
							</div>
						</div>
						<div class="bullets-item">
 <img src="/local/templates/books/images/icon14.svg" alt="">
							<div class="bullets-title">
								 Цифровой двойник
							</div>
							<div class="bullets-txt">
								 Предоставляем возможность документирования любых физических и&nbsp;логических объектов ИТ‑, телекоммуникационной и&nbsp;инженерной инфраструктуры. Решение реализуем на&nbsp;платформе «СДИ‑Софт», которое включено в&nbsp;Единый реестр программного обеспечения (Реестровая запись №&nbsp; от&nbsp;07.04.2020)
							</div>
							<div class="bullets-txt-show bullets-txt-btn">
								Подробнее
							</div>
							<div class="bullets-txt-block">
								<p>
									Преимущества решения:
								</p>
								<p>
									—&nbsp;Библиотека цифровых моделей оборудования, содержащая свыше 60000 активных и&nbsp;пассивных ИТ‑компонентов.<br>
									 —&nbsp;Специализированные пользовательские интерфейсы для&nbsp;внесения учетной информации и&nbsp;работы с&nbsp;ней.<br>
									 —&nbsp;Планирование изменений, формирование перечня технических операций, резервирование физических и&nbsp;логических ресурсов.<br>
									 —&nbsp;Планирование и&nbsp;документирование современных серверных сред и&nbsp;систем хранения на&nbsp;физическом и&nbsp;виртуальном уровнях.<br>
									 —&nbsp;Учет лицензий и&nbsp;договоров.<br>
									 —&nbsp;Представление и&nbsp;управление физическими и&nbsp;логическими сетевыми структурами, в&nbsp;т.&nbsp;. управление адресным пространством IPv4 и&nbsp;IPv6, учет VLAN.<br>
									 —&nbsp;Графический редактор стоек с&nbsp;фотореалистичным представлением оборудования и&nbsp;др.
								</p>
								<p>
									<a href="http://physnetwork.ru/local/templates/books/Resources/Стоимость лицензий СДИ Базиc 20230101.pdf" target="_blank">Прайс-лист</a>
								</p>
								<div class="bullets-txt-hide bullets-txt-btn">
									Скрыть
								</div>
							</div>
						</div>
						<div class="bullets-item">
 <img src="/local/templates/books/images/icon15.svg" alt="">
							<div class="bullets-title">
								 Облачные технологии и SaaS‑решения
							</div>
							<div class="bullets-txt">
								 Интегрируем различные SaaS‑решения, которые позволяют сделать бизнес более&nbsp;гибким, устойчивым к&nbsp;высоким нагрузкам, а&nbsp;также повышают скорость разработки цифровых продуктов и&nbsp;внедрения инноваций. Реализуем на&nbsp;платформах: VK&nbsp;Cloud, OrionSoft Cloudlink.
								<p>
								</p>
								<p>
									Стоимость каждого проекта рассчитывается индивидуально. <a href="/contact/" target="_blank">Свяжитесь с&nbsp;нами</a>, чтобы получить расчет.
								</p>
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
);?>
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
							 а&nbsp;взвешенные ИТ‑решения для&nbsp;роста и&nbsp;конкурентоспособности вашего бизнеса
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
								 Внедряем ИТ‑решения, которые помогают вашим&nbsp;сотрудникам сосредоточиться на&nbsp;том, что&nbsp;действительно важно
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
								 Наши&nbsp;эксперты регулярно проходят обучение, развивая soft- и&nbsp;hard‑скиллы
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
	<div class="content projectPage">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:news",
	"projects",
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
		"COMPONENT_TEMPLATE" => "projects",
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
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "Content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(0=>"",1=>"",),
		"LIST_PROPERTY_CODE" => array(0=>"BUTTON",1=>"",),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "5",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_FOLDER" => "/projects/",
		"SEF_MODE" => "Y",
		"SEF_URL_TEMPLATES" => array("news"=>"","section"=>"","detail"=>"#ELEMENT_CODE#/",),
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
	)
);?>
	</div>
	<div class="wrapper">
		<h3>партнеры</h3>
		 <?global $arrFilter;
			$arrFilter = array(
				"PROPERTY_SHOW_HOME_VALUE" => "Y",
			);
		?> <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"Partners",
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
		"COMPONENT_TEMPLATE" => "Partners",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "arrFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "Content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MAIN" => true,
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "100",
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
		"PROPERTY_CODE" => array(0=>"SHOW_HOME",1=>"LINK",2=>"",),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "PROPERTY_HOME_SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
	</div>
 <br>
	 <?/*$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"PartnersMain",
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
		"COMPONENT_TEMPLATE" => "PartnersMain",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "7",
		"IBLOCK_TYPE" => "Content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "100",
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
		"PROPERTY_CODE" => array(0=>"",1=>"",),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "TIMESTAMP_X",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);*/ ?><br>
</div>
 <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
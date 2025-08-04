<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if(count($arResult["ITEMS"])>0):?>
<div class="wrapper">
    <div class="content vacancies">
        <div class="wrapper">
            <div class="intro">
                <div class="col-7">
                    <h2 class="partners_h2">Карьера</h2>
                    <p>
                        Системный интегратор «Физика сети» предоставляет полный спектр услуг по IT-консалтингу, интеграции, оптимизации и автоматизации бизнес-процессов, информационной и физической защите организаций.
                        <br><br>
                        Компания работает на рынке крупных IT-проектов с 2017 года в партнерстве с крупнейшими российскими и зарубежными поставщиками оборудования и программного обеспечения.
                        <br><br>
                        «Физика сети» реализует крупные и интересные проекты. Среди наших клиентов Госкорпорация «Росатом», ОАО «РЖД», ПАО «НК «РОСНЕФТЬ», ПАО «СЕВЕРСТАЛЬ», ПАО «ГАЗПРОМ.
                        <br><br>
                        Мы профессиональная команда с экспертизой в сфере мобильных решений, обработки данных и информационной безопасности.
                        <br><br>
                        Мы поставляем не базовые услуги, а решения уникальных проблем и задач, предлагаем надежные инновационные решения на рынке информационных технологий.
                        <br><br>
                        Главная ценность и актив «Физики сети» – это сотрудники компании.
                        <br><br>
                        Рады видеть в своих рядах профессионалов, которые разделяют нашу миссию, хотят расти и развиваться вместе с нами.
                        <br><br>
                        Вас ждут:
                    </p>
                    <ul>
                        <li><p>Интересные и амбициозные задачи, о которых вы сможете с гордостью рассказать друзьям и коллегам</p></li>
                        <li><p>Профессиональное и экспертное развитие и обучение. Мы растем и развиваемся вместе с технологиями и быстро меняющимся рынком.</p></li>
                        <li><p>Доступность и поддержка руководства и коллег. У нас драйвовая, дружелюбная команда.</p></li>
                        <li><p>Минимум бюрократии, открытость руководства компании к любым самым необычным идеям.</p></li>
                    </ul>
                    <p>
                        Обещаем интересную работу, возможность пройти необходимое обучение, получить наставничество и проявить себя.
                        <br><br>
                        Мы не заманиваем в офис «бесплатными печеньками», наши сотрудники имеют возможность работать, откуда им удобно.
                        <br><br>
                        Из приятных бонусов: уроки английского языка, ДМС, оплата связи, корпоративная библиотека, оригинальные подарки на день рождения и, конечно, достойное, соответствующее профессиональному уровню денежное вознаграждение.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="cityFilter">
                    <div>
                        <input type="radio" name="city" class="radio" id="1" checked data-city='Все'>
                        <label for="1" class="">Все</label>
                    </div>
                    <div>
                        <input type="radio" name="city" class="radio" id="2" data-city='Москва'>
                        <label for="2" class="">Москва</label>
                    </div>
                    <div>
                        <input type="radio" name="city" class="radio" id="3" data-city='Санкт-Петербург'>
                        <label for="3" class="">Санкт-Петербург</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div id="accordion" class="accordion">

                <?foreach($arResult["ITEMS"] as $arItem):?>
                <?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
                <div class="accordion-item">
                    <div class="accordion-item-header" data-city='<?print_r($arItem['DISPLAY_PROPERTIES']['VACANCY_CITY']['VALUE'])?>'>
                        <div>
                            <div class="circle-swicher">
                                <div>
                                    <span></span>
                                    <span class="closedSwicher"></span></div>
                            </div>
                            <p>
                                    <?echo $arItem["NAME"];?>
                                </p>
                        </div>
                        <p>
                            <?print_r($arItem['DISPLAY_PROPERTIES']['VACANCY_CITY']['VALUE'])?>
                        </p>
                    </div>
                    <div class="accordion-item-content">
                        <p>
                            <?echo $arItem["PREVIEW_TEXT"];?>
                        </p>
                        <a href="<?echo $arItem["DETAIL_PAGE_URL"];?>"><div class="btn">Подробнее</div></a>
                    </div>
                </div>
                <?endforeach;?>
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
        <div class="wrapper">
            <div class="row">
                <div class="col-6 vacancyMailContact">
                    <div class="HHPhoto"><img src="<?=SITE_TEMPLATE_PATH?>//images/HHPhoto.png"><p>Валерия Дроздова <br> HR-менеджер</p></div>
                    <div>
                        <p>Если вы хотите стать частью нашей команды, но на сайте нет актуальной вакансии — напишите нам! </p>
                        <a href="mailto:hr@physnetwork.ru">hr@physnetwork.ru</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?endif?>

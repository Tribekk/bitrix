<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<!-- <pre>
	<?//print_r($arResult);?>
</pre> -->

<?if (!empty($arResult)):?>
<!-- <div class="wrapper_nav">
    <div class="wrapper">
        <div class="nav">
            <div class="logo"><a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/img/mainlogo.svg" alt=""></a></div>
            <div class="desktopMenu">
										<?$previousLevel = 0;?>
                  	<?foreach($arResult as $arItem):?>
											
											<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
												<?=str_repeat("</div></div>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
											<?endif?>
											
											<?if(!$arItem["IS_PARENT"] == 1):?>

                  			<div class="">
													<a href="<?=htmlspecialcharsbx($arItem["LINK"])?>" class="
                          	<?if ($arItem["SELECTED"]):?>bluetext
                          	<?else:?>root-item
                          	<?endif?> <?if ( mb_strtolower($arItem["TEXT"])=='маркетплейс'):?>root-item-selected<?endif?> ">
                          	<?=htmlspecialcharsbx($arItem["TEXT"])?></a>
												</div>
														
											<?else:?>
												<div class="menu_parent">
													<a href="<?=htmlspecialcharsbx($arItem["LINK"])?>" class="
														<?if ($arItem["SELECTED"]):?>bluetext
														<?else:?>root-item
														<?endif?> <?if ( mb_strtolower($arItem["TEXT"])=='маркетплейс'):?>root-item-selected<?endif?> ">
														<?=htmlspecialcharsbx($arItem["TEXT"])?></a>

														<div class="menu_sub">
											<?endif?>
											
												

												<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

                    <?endforeach?>
										
										<?if ($previousLevel > 1)://close last item tags?>
											<?=str_repeat("</div>", ($previousLevel-1) );?>
										<?endif?>
            </div>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="menu">
                <ul id="horizontal-multilevel-menu">

                    <?
										foreach($arResult as $arItem):?>

                    <li><a href="<?=htmlspecialcharsbx($arItem["LINK"])?>" class="
                            <?if ($arItem["SELECTED"]):?>bluetext
                            <?else:?>root-item
                            <?endif?> <?if ( mb_strtolower($arItem["TEXT"])=='маркетплейс'):?>root-item-selected<?endif?> ">
                            <?=htmlspecialcharsbx($arItem["TEXT"])?></a></li>

                    <?endforeach?>
                    <a href="tel:+7%20(495)%20786-03-93">
                        <li class="menu_contacts">+7(495)786-03-93</li>
                    </a>
                    <a href="mailto:info@physnetwork.ru">
                        <li class="menu_contacts">info@physnetwork.ru</li>
                    </a>
                </ul>
            </div>
        </div>
    </div>
</div> -->
  <div class="header-top">
    <img src="/local/templates/books/images/new_img/header-back.jpg" class="header-back">
    <div class="header-block">
        <div class="container-block">
            <div class="nav-block">
                <div class="container">
                    <div class="nav">
                        <div class="logo"><a href="/"><img src="/local/templates/books/images/new_img/logo.svg" alt=""></a></div>
                        <div class="desktopMenu">
                            <div>
                                <a href="/uslugi-i-avtomatizacia/">Решения 1С</a>
                            </div>
                            <div class="has-submenu" id="menu-services">
                                <button type="button" class="menu-toggle" aria-haspopup="true" aria-expanded="false">
                                    Услуги
                                    <span class="menu-caret"></span>
                                </button>

                                <ul class="submenu" role="menu">
                                    <li role="none"><a href="/uslugi-proektirovanie/">Проектирование слаботочных систем</a></li>
                                    <li role="none"><a href="/uslugi-montazh/">Монтаж слаботочных систем</a></li>
                                    <li role="none"><a href="/uslugi-ekspertiza/">Экспертиза в построении ИТ-инфраструктуры</a></li>
                                    <li role="none"><a href="/uslugi-service-support/">Сервисная поддержка</a></li>
                                </ul>
                            </div>
                            <div>
                                <a href="/keis/">Кейсы</a>
                            </div>
                            <div>
                                <a href="/contact/">Контакты</a>
                            </div>
                        </div>
                        <div class="header-right">
                            <div class="header-email"><a href="mailto:info@fnserv.ru">info@fnserv.ru</a></div>
                            <div class="header-btn"><a href="/contact/" class="js-open-contact">Связаться с нами</a></div>
                            <div class="hamburger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="menu">
                                <div id="horizontal-multilevel-menu">
                                    <ul>
                                        <li><a href="/uslugi-i-avtomatizacia/">Решения 1С</a></li>
                                        <li class="m-has-sub">
                                            <button type="button" class="m-toggle" aria-expanded="false">
                                                Услуги
                                                <span class="m-caret"></span>
                                            </button>
                                            <ul class="m-sub">
                                                <li><a href="/uslugi-proektirovanie/">Проектирование слаботочных систем</a></li>
                                                <li><a href="/uslugi-montazh/">Монтаж слаботочных систем</a></li>
                                                <li><a href="/uslugi-ekspertiza/">Экспертиза в построении ИТ-инфраструктуры</a></li>
                                                <li><a href="/uslugi-service-support/">Сервисная поддержка</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/keises/">Кейсы</a></li>
                                        <li><a href="/contact">Контакты</a></li>
                                    </ul>
                                    <div class="menu_contacts">
                                        <a href="tel:+79999088499">+7 999 908-84-99</a>
                                        <a href="mailto:info@fnserv.ru">info@fnserv.ru</a>
                                        <div class="menu_btn"><a href="#">Связаться с нами</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-info-block">
                <div class="container">
                    <div class="header-info">
                        <div class="header-info-title">Автоматизация бизнеса</div>
                        <div class="header-info-text">Учитываем особенности бизнеса и ИТ-инфраструктуры. Обеспечиваем сервисную поддержку и гарантию</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
<?endif?>

<script>
    (function () {
        const services = document.querySelector('.desktopMenu .has-submenu');
        if (!services) return;

        const btn  = services.querySelector('.menu-toggle');
        const menu = services.querySelector('.submenu');

        function closeMenu(){
            services.classList.remove('open');
            btn.setAttribute('aria-expanded','false');
        }

        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const willOpen = !services.classList.contains('open');
            document.querySelectorAll('.desktopMenu .has-submenu.open').forEach(n => {
                if (n !== services) n.classList.remove('open');
            });
            services.classList.toggle('open', willOpen);
            btn.setAttribute('aria-expanded', willOpen ? 'true' : 'false');
        });

        // закрываем при клике вне меню
        document.addEventListener('click', (e) => {
            if (!services.contains(e.target)) closeMenu();
        });

        // закрытие по Esc
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') closeMenu();
        });
    })();
</script>

<script>
    (function(){
        function initMobileServices(){
            const wrap = document.querySelector('.menu #horizontal-multilevel-menu');
            if (!wrap) return;
            const item  = wrap.querySelector('.m-has-sub');
            if (!item) return;

            const btn   = item.querySelector('.m-toggle');
            const sub   = item.querySelector('.m-sub');

            // открыть/закрыть по клику
            btn.addEventListener('click', function(e){
                e.stopPropagation();
                const willOpen = !item.classList.contains('open');
                // если нужен режим "один открыт" — закрываем остальные:
                wrap.querySelectorAll('.m-has-sub.open').forEach(n => n !== item && n.classList.remove('open'));
                item.classList.toggle('open', willOpen);
                btn.setAttribute('aria-expanded', willOpen ? 'true' : 'false');
            });

            // клик вне подпункта — закрыть
            document.addEventListener('click', function(e){
                if (window.innerWidth > 1300) return;     // только мобильный
                if (!item.contains(e.target)) {
                    item.classList.remove('open');
                    btn.setAttribute('aria-expanded','false');
                }
            });
        }

        // инициализация только на мобильном
        function boot(){
            if (window.innerWidth <= 1300) initMobileServices();
        }
        boot();

        // при ресайзе закрываем раскрытое меню при уходе в десктоп
        window.addEventListener('resize', () => {
            if (window.innerWidth > 1300){
                document.querySelectorAll('.m-has-sub.open').forEach(el => el.classList.remove('open'));
            }
        });
    })();
</script>
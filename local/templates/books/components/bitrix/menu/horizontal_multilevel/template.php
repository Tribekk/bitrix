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
                                <a href="#">Решения 1С</a>
                            </div>
                            <div>
                                <a href="/uslugi-i-avtomatizacia/">Услуги</a>
                            </div>
                            <div>
                                <a href="#">Кейсы</a>
                            </div>
                            <div>
                                <a href="/contact">Контакты</a>
                            </div>
                        </div>
                        <div class="header-right">
                            <div class="header-email"><a href="mailto:info@fnserv.ru">info@fnserv.ru</a></div>
                            <div class="header-btn"><a href="/contact/">Связаться с нами</a></div>
                            <div class="hamburger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="menu">
                                <div id="horizontal-multilevel-menu">
                                    <ul>
                                        <li><a href="#">Решения 1С</a></li>
                                        <li><a href="#">Услуги</a></li>
                                        <li><a href="#">Кейсы</a></li>
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

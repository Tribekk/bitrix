<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="footer">
    <div class="wrapper">
        <div class="row">
			<div class="col-3 footer__logo">
				<a href="/">
					<img src="/local/templates/books/img/mainlogo.svg"/>
				</a>
				<a class="js-open-contact">
					<div class="btn btn_blue">
						 ОСТАВИТЬ ЗАЯВКУ
					</div>
				</a>
			</div>
            <div class="col-3 footer-contacts">
                <p class="footer-titles">контакты</p>
                <a class="footer-phone" href="tel:+7 (495) 786-03-93">+7 (495) 786-03-93 </a>
                <a class="footer-mail" href="mailto:info@physnetwork.ru">info@physnetwork.ru</a>
                <div class="footer-address">
                    Москва, ул. Василисы Кожиной 1,<br>
                    этаж 5 пом. I комната 8И
                </div>
                <div class="footer_soc">
                    <!--<a href="https://www.facebook.com/fizikaseti"><img src="<?=SITE_TEMPLATE_PATH?>/img/icon_social-15.svg" alt=""></a>-->
                    <a href="https://www.youtube.com/channel/UCnu0uV7EDinTZ4Qbd_ZVS5g" target="_blank" class="footer-yt"></a>
                    <a href="https://vk.com/physnetwork" target="_blank" class="footer-vk"></a>
                    <a href="https://t.me/physnetwork" target="_blank" class="footer-tg"></a>
            	</div>
            </div>
            <div class="col-3 footer-menu">
               <div class="col-10">
                <p class="footer-titles">меню</p>
				   <div class="footer__items">
						<? foreach($arResult as $arItem):?>
                            <div class="col-6 footer_menu">
                                <a href="<?=htmlspecialcharsbx($arItem["LINK"])?>" class="page_menu
                                <?if ($arItem["SELECTED"]):?>root-item-selected
                                <?else:?>root-item
                                <?endif?>">
                                <p>
                                    <?=htmlspecialcharsbx($arItem["TEXT"])?>
                                </p>
                                </a>
                            </div>

                        <?endforeach?>
					</div>

            </div>
            </div>
            <div class="col-3 footer-rekv">
                <p class="footer-titles">Реквизиты</p>
                <div>ООО «Физика Сети»<br>ОГРН 1127847633825<br>ИНН/КПП 7838483126/773001001<br>ОКВЭД 62.02 Деятельность консультативная и работы в области компьютерных технологий<br>121096 г. Москва, вн. тер. города, муниципальный округ Филевский парк, ул. Василисы Кожиной, д. 1, помещ. 1/2/8</div>
                <!--<div>
                    <p class="footer-copyright">© 2020</p>
                </div>-->
            </div>

            <?endif?>

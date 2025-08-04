<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="footer">
    <div class="wrapper">
        <div class="row">
			<div class="col-3 footer__logo">
				<a href="/">
					<img src="/local/templates/books/img/mainlogo.svg"/>
				</a>
				<a href='/contact'>
					<div class="btn btn_blue">
						 ОСТАВИТЬ ЗАЯВКУ
					</div>
				</a>
			</div>
            <div class="col-25 footer-contacts">
                <p class="footer-titles">контакты</p>
                <a class="footer-phone" href="tel:+7 (495) 786-03-93">+7 (495) 786-03-93 </a>
                <a class="footer-mail" href="mailto:info@physnetwork.ru">info@physnetwork.ru</a>
                <div class="footer_soc">
                <!--<a href="https://www.facebook.com/fizikaseti"><img src="<?=SITE_TEMPLATE_PATH?>/img/icon_social-15.svg" alt=""></a>-->
                <a href="https://www.youtube.com/channel/UCnu0uV7EDinTZ4Qbd_ZVS5g"><img src="<?=SITE_TEMPLATE_PATH?>/img/yt.svg" alt=""></a>
            		</div>
            </div>
            <div class="col-4 footer-menu">
               <div class="col-10">
                <p class="footer-titles">меню</p>
				   <div class="footer__items">
						 <?
foreach($arResult as $arItem):?>

                <div class="col-4 footer_menu"><a href="<?=htmlspecialcharsbx($arItem["LINK"])?>" class="page_menu
                        <?if ($arItem["SELECTED"]):?>root-item-selected
                        <?else:?>root-item
                        <?endif?>">
                        <p>
                            <?=htmlspecialcharsbx($arItem["TEXT"])?>
                        </p></a></div>

                <?endforeach?>
					</div>

            </div>
            </div>
            <div class="col-25 footer-adress">
                <p class="footer-titles">адрес</p>
                <div>
									<span><p>Москва, ул. Василисы Кожиной 1,</p></span>
								  <span><p>этаж 5 пом. I комната 8И</p></div>
                <!--<div>
                    <p class="footer-copyright">© 2020</p>
                </div>-->
            </div>

            <?endif?>

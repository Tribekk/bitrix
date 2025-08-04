<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="wrapper newPartners<?=($arParams['MAIN'])? ' newPartners_main' : '';?>">
    <div class="row">
				<?$c=0?>
        <? foreach ($arResult["ITEMS"] as $arItem) : ?>
					<?//d($arItem["PROPERETIES"]["SHOW_HOME"]["VALUE"])?>
											
            <div class='col-4'>
                <div class="newPartners__item">
                    <div class="newPartnersItem__img" style="background-image:url('<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>')"></div>
                    <div class="newPartnersItem__info">
												
											<?if($arItem['PREVIEW_TEXT'] != ''):?>
                       	<div>
													 	<a href="<?= $arItem['PROPERTIES']['LINK']['VALUE'] ?>" target="_blank">Cайт «<?= $arItem['NAME'] ?>»</a>
											 	</div>
											<?endif?>

												<div class="newPartners__item__text">
													<?=$arItem['~PREVIEW_TEXT']; ?>
												</div>
												
												<?if($arItem['PREVIEW_TEXT'] == ''):?>
													<div>
															<a href="<?= $arItem['PROPERTIES']['LINK']['VALUE'] ?>" target="_blank">Cайт «<?= $arItem['NAME'] ?>»</a>
													</div>
												<?endif?>

                    </div>
                </div>
                <a href="<?= $arItem['DISPLAY_PROPERTIES']['LINK']['VALUE'] ?>" style="background-image:url('<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>')" class="newPartners__item newPartners__item_mobile"></a>
            </div>
						
						
						<?if($c == 4):?>
							<div class='col-4'>
								<a href="/partners/" class="newPartners__item">
									<div class="newPartners__item__block">
										<div class="newPartners__item__block_wrap">
											<span class="newPartners__item__block__number">50+</span>
											<span class="newPartners__item__block__text">партнеров</span>
										</div>
									</div>
								</a>
								
								<a href="/partners/" class="newPartners__item newPartners__item_mobile">
									<div class="newPartners__item__block">
										<div class="newPartners__item__block_wrap">
											<span class="newPartners__item__block__number">50+</span>
											<span class="newPartners__item__block__text">партнеров</span>
										</div>
									</div>
								</a>
							</div>
						<?endif?>

						
					<?$c++?>
        <? endforeach; ?>
    </div>
    <?if($arParams['MAIN']){?>
        <!-- <div class="btn newPartners__showAll">Показать всех</div> -->
    <?}?>
</div>
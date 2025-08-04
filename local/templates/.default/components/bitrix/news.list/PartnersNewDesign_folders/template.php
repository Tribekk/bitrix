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
<?//d($arResult["ALL"]);?>
<div class="wrapper tagsPartnersWrapper">
		<div class="tagsPartners">
				<div class="tagsPartners__item active" tag="all">Все партнеры</div>
				<? foreach ($arResult["SECTIONS"] as $CLASS => $TAG) : ?>
						<div class="tagsPartners__item" tag="tag_<?=$CLASS?>"><?= $TAG["NAME"] ?></div>
				<? endforeach; ?>
		</div>
</div>
<div class="wrapper gridPartners">
	<!--сначала элементы для вкладки ВСЕ-->
	<?foreach($arResult["ALL"]["ITEMS"] as $a => $allItem):?>
		<div class="gridPartners__item" tag="all" style="display: block">
			<div class="image-container">
					<img src="<?=CFile::GetPath($allItem["PREVIEW_PICTURE"]) ?>">
			</div>
			<?//d($allItem)?>
			
			<?if($allItem["~PREVIEW_TEXT"] != '' || $allItem["PROPERTIES"]["LINK"]["VALUE"] != ''):?>
				<div class="gridPartners__item__hover">
					<?if($allItem["PROPERTIES"]["LINK"]["VALUE"] != ''):?>
						<a href="<?=$allItem["PROPERTIES"]["LINK"]["VALUE"]?>" class="gridPartners__item__hover__link"><?=$allItem["NAME"]?></a>
					<?endif?>
					<div class="gridPartners__item__hover__text"><?=$allItem["~PREVIEW_TEXT"]?></div>
				</div>
			<?endif?>
			
			<div class="content-for-popup">
					<div class="cfp-text"><?= $allItem['~DETAIL_TEXT']; ?></div>
					<div class="cfp-link"><?= $allItem['DISPLAY_PROPERTIES']['LINK']['VALUE'] ?></div>
					<div class="cfp-tags">
								<?foreach ($allItem["NEW_TAGS"] as $t => $itemTag) : ?>
									<div class="one-tag-parnter"><?=$itemTag?></div>
							<?endforeach; ?>
					</div>
			</div>
		</div>
	<?endforeach?>
	
	<?foreach ($arResult["SECTIONS"] as $CLASS => $TAG):?>
		<?foreach($TAG["ITEMS"] as $k => $arItem):?>
			<?//d($arItem["NEW_TAGS"])?>
			<div class="gridPartners__item" tag="tag_<?=$CLASS?>">
				<div class="image-container">
						<img src="<?=CFile::GetPath($arItem["PREVIEW_PICTURE"]) ?>">
				</div>
			
				<?if($arItem["~PREVIEW_TEXT"] != '' || $arItem["PROPERTIES"]["LINK"]["VALUE"] != ''):?>
					<div class="gridPartners__item__hover">
						<?if($arItem["PROPERTIES"]["LINK"]["VALUE"] != ''):?>
							<a href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>" class="gridPartners__item__hover__link"><?=$arItem["NAME"]?></a>
						<?endif?>
						<div class="gridPartners__item__hover__text"><?=$arItem["~PREVIEW_TEXT"]?></div>
					</div>
				<?endif?>
				
				<div class="content-for-popup">
						<div class="cfp-text"><?= $arItem['~DETAIL_TEXT']; ?></div>
						<div class="cfp-link"><?= $arItem['DISPLAY_PROPERTIES']['LINK']['VALUE'] ?></div>
						<div class="cfp-tags">
								<?foreach ($arItem["NEW_TAGS"] as $t => $itemTag) : ?>
										<div class="one-tag-parnter"><?=$itemTag?></div>
								<?endforeach; ?>
						</div>
				</div>
			</div>
		<?endforeach?>
	<?endforeach?>
</div>
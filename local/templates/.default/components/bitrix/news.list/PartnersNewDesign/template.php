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
<?

$LIST_TAGS = [];

// $property_tags = CIBlockPropertyEnum::GetList(Array("ID"=>"ASC", "SORT"=>"ASC"), Array("IBLOCK_ID"=>3, "CODE"=>"TAGS"));
$property_tags = CIBlockPropertyEnum::GetList(Array("SORT"=>"ASC"), Array("IBLOCK_ID"=>3, "CODE"=>"TAGS"));
while ($one_tag = $property_tags->GetNext()) {
    $LIST_TAGS[$one_tag["XML_ID"]] = $one_tag["VALUE"];
}

?>
<div class="wrapper tagsPartnersWrapper">
    <div class="tagsPartners">
        <div class="tagsPartners__item active" data-class="all">Все партнеры</div>
        <? foreach ($LIST_TAGS as $CLASS => $TAG) : ?>
            <div class="tagsPartners__item" data-class="<?= $CLASS ?>"><?= $TAG ?></div>
        <? endforeach; ?>
    </div>
</div>
<div class="wrapper gridPartners">
    <? foreach ($arResult["ITEMS"] as $arItem) : ?>
        <?
            // Формирование массива тэгов
            $TAGS = [];
            $TAGS_classes = "";
            foreach ($arItem['DISPLAY_PROPERTIES']['TAGS']['VALUE'] as $key_tag => $one_tag){
                $key_tag_val = $arItem['DISPLAY_PROPERTIES']['TAGS']['VALUE_XML_ID'][$key_tag]; 
                $TAGS[$key_tag_val] = $one_tag;
                $TAGS_classes .= " show_{$key_tag_val}";
            }
        ?>
        <div class='gridPartners__item <?= $TAGS_classes ?>'>
            <div class="image-container">
                <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>">
            </div>
            <div class="content-for-popup">
                <div class="cfp-text"><?= $arItem['PREVIEW_TEXT']; ?></div>
                <div class="cfp-link"><?= $arItem['DISPLAY_PROPERTIES']['LINK']['VALUE'] ?></div>
                <div class="cfp-tags">
                    <? foreach ($TAGS as $TAG) : ?>
                        <div class="one-tag-parnter"><?= $TAG ?></div>
                    <? endforeach; ?>
                </div>
            </div>
        </div>
    <? endforeach; ?>
</div>
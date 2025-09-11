<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "ИТ-решения, ФИЗИКА СЕТИ, цифровая интеграция, цифровая оптимизация, цифровая защита");
$APPLICATION->SetPageProperty("description", "ФИЗИКА СЕТИ Системный интегратор IT-решений");
$APPLICATION->SetPageProperty("title", "ФИЗИКА СЕТИ  Системный интегратор ИТ-решений");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Главная страница");


?>
    <link rel="stylesheet" href="/keises/style.css">
    <div class="page">
        <div class="head">
            <div class="head_text">
                <h1>Вместе превращаем сложные решения в простые задачи</h1>
                <h2>Сервис помогает полностью перейти на электронный документооборот — внутри компании, с контрагентами,
                    партнёрами и даже госорганами. Всё работает быстро, удобно и официально — с поддержкой ЭДО и
                    интеграцией в Битрикс24.</h2>
            </div>
        </div>

        <?php
use Bitrix\Main\Loader;

Loader::includeModule('iblock');

$sections = \CIBlockSection::GetList(
    ['SORT' => 'ASC'],
    [
        'IBLOCK_ID' => 10,
        'DEPTH_LEVEL' => 1,
        'ACTIVE' => 'Y',
    ],
    false,
    ['ID', 'NAME']
);

$cases = [];
while ($section = $sections->Fetch()) {
    $element = \CIBlockElement::GetList(
        ['ACTIVE_FROM' => 'DESC'],
        [
            'IBLOCK_ID' => 10,
            'SECTION_ID' => $section['ID'],
            'INCLUDE_SUBSECTIONS' => 'Y',
            'ACTIVE' => 'Y',
        ],
        false,
        ['nTopCount' => 1],
        ['ID', 'NAME', 'PREVIEW_TEXT']
    )->GetNext();

    if ($element) {
        $cases[] = [
            'SECTION_NAME' => $section['NAME'],
            'ID' => $element['ID'],
            'NAME' => $element['NAME'],
            'PREVIEW_TEXT' => $element['PREVIEW_TEXT'],
        ];
    }
}
?>
        <section class="cases">
            <div class="cases__grid">
                <?php foreach ($cases as $index => $case): ?>
                    <article onclick="window.location.href='/keis/?id=<?= (int)$case['ID']; ?>'" class="case<?= $index === 2 ? ' case--featured' : '' ?>">
                        <span class="case__badge"><?= htmlspecialcharsbx($case['SECTION_NAME']); ?></span>
                        <div>
                            <h3 class="case__title"><?= htmlspecialcharsbx($case['NAME']); ?></h3>
                            <p class="case__desc"><?= htmlspecialcharsbx($case['PREVIEW_TEXT']); ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section>
            <div class="form-section">
                <div class="form-left">
                    <h3>Обсудим, как можно сократить бюджет?</h3>
                    <div class="form-desc">
                        Задайте вопрос, проверьте готовое КП или пригласите в тендер
                    </div>
                </div>

                <form class="form">
                    <input type="text" class="field-fio" placeholder="ФИО">
                    <input type="text" class="field-company" placeholder="Название компании">
                    <input type="text" class="field-position" placeholder="Должность">
                    <input type="tel" class="field-phone" placeholder="+ 7 987 654 32 10">
                    <textarea placeholder="Кратко расскажите о своей задаче"></textarea>
                    <div class="form-policy">
                        <input type="checkbox" id="policy" required>
                        <label for="policy" class="policy">Я даю свое согласие на обработку персональных данных в соответствии с
                            <a href="#">Политикой оператора</a> в отношении обработки персональных данных
                        </label>
                    </div>
                    <button type="submit" class="form-btn">Отправить</button>
                </form>
            </div>
        </section>
    </div>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
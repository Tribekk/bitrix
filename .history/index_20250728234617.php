<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "ИТ-решения, ФИЗИКА СЕТИ, цифровая интеграция, цифровая оптимизация, цифровая защита");
$APPLICATION->SetPageProperty("description", "ФИЗИКА СЕТИ Системный интегратор IT-решений");
$APPLICATION->SetPageProperty("title", "ФИЗИКА СЕТИ  Системный интегратор ИТ-решений");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Главная страница");


?>




<script>
function newsSlider() {
    if ($(window).width() >= '1300') {
        $('.main-partners-list').slick({
            dots: true,
            infinite: true,
            centerMode: true,

            slidesToShow: 6,
            slidesToScroll: 1
        });
        $('.main-news-list').slick({
            dots: true,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,

            variableWidth: true,

        });
    } else if ($(window).width() >= '768' && $(window).width() < '1300') {
        $('.main-partners-list').slick({
            dots: true,
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,

            centerMode: true,
            variableWidth: true,
        });
        $('.main-news-list').slick({
            dots: true,
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 1,

            variableWidth: true,

        });
    } else if ($(window).width() < '768' && $(window).width() > '450') {
        $('.main-partners-list').slick({
            dots: true,
            infinite: true,
            centerMode: true,
            slidesToShow: 3,
            slidesToScroll: 1,

            centerMode: true,
            variableWidth: true,
        });
        $('.main-news-list').slick({
            dots: true,
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 1
        });
    } else if ($(window).width() < '450') {
        $('.main-partners-list').slick({
            dots: false,
            infinite: true,
            centerMode: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            variableWidth: true,

        });
        $('.main-news-list').slick({
            dots: false,
            infinite: true,
            centerMode: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            variableWidth: true,
            arrows: true      
        });
    }
}
$(document).ready(newsSlider()); // при загрузке

function setEqualHeight(columns)
{
    var tallestcolumn = 0;
    columns.each(
    function()
    {
        currentHeight = $(this).height();
        if(currentHeight > tallestcolumn)
        {
            tallestcolumn = currentHeight;
        }
    }
    );
    columns.height(tallestcolumn);
}
$(document).ready(function(){
    setEqualHeight($('.main-news .main-news-item'));
});
</script>
 <? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
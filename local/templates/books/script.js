$(document).on('click', '.content-nav > div', function () {
    changeSwap($(this));
});

function changeSwap(that) {
    $('.active').removeClass('active');
    var number = $('.content-nav').children().index($(that));
    $(that).addClass('active');
    $('.content-swap>div:eq(' + number + ')').addClass('active');
}

$(document).on('click', '.hamburger', function () {
    menu($(this));
});

function menu() {
    if ($('.menu ul').hasClass('activeMenu')) {
        $('.menu').animate({
            opacity: '0'
        }, 500, "linear");
        setTimeout(function () {
            $('.menu').removeClass('full')
        }, 500);
        setTimeout(function () {
            $('.menu ul').removeClass('activeMenu')
        }, 500);
    } else {
        $('.menu ul').addClass('activeMenu');
        $('.menu').addClass('full');
        $('.menu').animate({
            opacity: '1'
        }, 500, "linear")
    }
}
$('.hamburger ').click(function () {
    $('.hamburger span:nth-child(1)').toggleClass('burgerLine');
    $('.hamburger span:nth-child(2)').toggleClass('burgerLine');
    $('.hamburger span:nth-child(3)').toggleClass('burgerLine');
});

$(document).ready(function () {
    $(document).bind('touchmove scroll', function () {
        if ($('.partnersMain').length > 0) {
            var start = $('.partnersMain').offset().top - $(window).height() + 300;
            var finish = $('.partnersMain').offset().top - $('.wrapper_nav').outerHeight(true);
            var percent = ($(this).scrollTop() - start) / (finish - start);
            var elementWidth = $('.partMainAnimator').width();
            var oneSideMargin = $('.partnersMain').width() / 100;
            var hiddenAmount = $('.partnersMain>div').length / $('.partnersMain').length - Math.floor($(window).width() / (elementWidth + 2 * oneSideMargin)); //количество скрытых элементов
            if (($(this).scrollTop() > start) && ($(this).scrollTop() < finish)) {
                /*старт elementWidth 1%// минус собственная ширина плюс марджин 
                финиш -100%/6 + 1% + 100% // минус собственная ширина плюс марджин минус сколько скрытых элементов собсвенных ширин и всех марджинов*/
                var margin = Math.round(-elementWidth + oneSideMargin - percent * hiddenAmount * elementWidth - (oneSideMargin) * hiddenAmount * percent * 2);
                var reverseMargin = Math.round(-elementWidth + oneSideMargin - (1 - percent) * hiddenAmount * elementWidth - (oneSideMargin) * hiddenAmount * (1 - percent) * 2);
                $('.partMainAnimator').css('margin-left', margin + 'px');
                $('.partMainAnimatorReverse').css('margin-left', reverseMargin + 'px');
            }
        }
    });

    //функция для вывода лицензии в разделе "Партнеры"
    if ($('.partners').length > 0) {
        $(".licenseImg").click(function () { // Событие клика на маленькое изображение
            var img = $(this); // Получаем изображение, на которое кликнули
            var src = img.attr('LicenseSrc'); // Достаем из этого изображения путь до картинки
            $("body").append("<div class='PartnersPopup'>" + //Добавляем в тело документа разметку всплывающего окна
                "<div class='PartnersPopup_bg'></div>" + // Блок, который будет служить фоном затемненным
                "<img src='" + src + "' class='PartnersPopup_img' />" + // Само увеличенное фото
                "</div>");
            $(".PartnersPopup").fadeIn(800); // Медленно выводим изображение
            $(".PartnersPopup_bg, .PartnersPopup_img").click(function () { // Событие клика на затемненный фон	   
                $(".PartnersPopup").fadeOut(800); // Медленно убираем всплывающее окно
                setTimeout(function () { // Выставляем таймер
                    $(".PartnersPopup").remove(); // Удаляем разметку всплывающего окна
                }, 800);
            });
        });
    }

    if ($('.newPartners_main').length > 0) {
        $(".newPartners__showAll").click(function () {
            if($('.newPartners_main').hasClass('showAll')){
                $('.newPartners_main').removeClass('showAll');
                $(this).html('Показать всех');
            }else{
                $('.newPartners_main').addClass('showAll');
                $(this).html('Скрыть');
            }
        });
    }
});
$(document).ready(function () {//попап успешной отправки вакансии
    if($('.vacancies .mf-ok-text').length>0){
    $("body").append("<div class='PartnersPopup'>" + //Добавляем в тело документа разметку всплывающего окна
        "<div class='PartnersPopup_bg'></div>" + // Блок, который будет служить фоном затемненным
        "<div class='vacPopup'><img src='/local/templates/books/img/Group_33.svg' alt=''><h4>Спасибо!</h4><p>Благодарим за интерес к компании 'Физика сети'.<br>Мы получили Ваш отклик и c радостью рассмотрим Вашу кандидатуру.<br> В случае заинтересованности специалист по подбору свяжется с Вами в течение двух недель.<br>Спасибо за желание построить карьеру в нашей компании!</p><div class='btn closePopup'>Понятно</div>" + 
        "</div>");
    $(".PartnersPopup").fadeIn(300); // Медленно выводим изображение
    $(".PartnersPopup_bg, .closePopup").click(function () { // Событие клика на затемненный фон	   
        $(".PartnersPopup").fadeOut(300); // Медленно убираем всплывающее окно
        setTimeout(function () { // Выставляем таймер
            $(".PartnersPopup").remove(); // Удаляем разметку всплывающего окна
        }, 300);
    });
}
});
$(document).ready(function () {//попап неуспешной отправки вакансии
    if($('.vacancies .FailedForm').length>0){
    $("body").append("<div class='PartnersPopup'>" + //Добавляем в тело документа разметку всплывающего окна
        "<div class='PartnersPopup_bg'></div>" + // Блок, который будет служить фоном затемненным
        "<div class='vacPopup'><img src='/local/templates/books/img/Group_33.svg' alt=''><h4>Произошла ошибка!</h4><p>Пожалуйста, проверьте все поля</p><div class='btn closePopup'>Понятно</div>" + 
        "</div>");
    $(".PartnersPopup").fadeIn(300); // Медленно выводим изображение
    $(".PartnersPopup_bg, .closePopup").click(function () { // Событие клика на затемненный фон	   
        $(".PartnersPopup").fadeOut(300); // Медленно убираем всплывающее окно
        setTimeout(function () { // Выставляем таймер
            $(".PartnersPopup").remove(); // Удаляем разметку всплывающего окна
        }, 300);
    });
}
});

function directionsAnimation() {
    $('.directions_popup').each(function () {
        var that = $(this);
        setTimeout(function () {
            that.animate({
                opacity: '1'
            }, 1000, "linear");
        }, 500 * (that.parents('.row').index()));
    });
    $('.directions_roll').each(function () {
        var that = $(this);
        setTimeout(function () {
            that.animate({
                width: '100%'
            }, 1000, "linear");
        }, 500 * (that.parents('.row').index()));
    });
}
var interval = 4;

function parntersAnimation() {
    $('.partner_logos img').each(function () {
        var that = $(this);
        setTimeout(function () {
            that.animate({
                opacity: '0'
            }, interval * 1000, "linear");
        }, interval * 500 * (that.index()));
    });
    $('.partner_logos img').each(function () {
        var that = $(this);
        setTimeout(function () {
            that.animate({
                opacity: '1'
            }, interval * 1000, "linear");
        }, interval * 1000 + interval * 500 * (that.index()));
    });

}
/*function directionsAnimation() {
    $('.directions_popup').eq(0).animate({
        opacity: '1'
    }, 1000, "linear");
    setTimeout(function () {
        $('.directions_popup').eq(1).animate({
            opacity: '1'
        }, 1000, "linear");
    }, 1000);
    setTimeout(function () {
        $('.directions_popup').eq(2).animate({
            opacity: '1'
        }, 1000, "linear");
    }, 2000);
}*/

$(document).ready(function () {
    if ($('.technologies').length > 0) {
        var partner_logosInterval = (($('.partner_logos img').length) + 3) * interval * 500;
        parntersAnimation();
        setInterval(function () {
            parntersAnimation();
        }, partner_logosInterval);
        localStorage.setItem('directionsCheck', '0');

        $(document).bind('touchmove scroll', function () {
            var approach = $('.approach').offset().top;
            var competence = $('.competence').offset().top;
            var directions = $('.directions').offset().top;
            var connect = $('.connect').offset().top;
            var technologies = $('.technologies').offset().top;
            var projects = $('.about_projects').offset().top;
            var about_c = $('.about_c').offset().top;
            var news = $('.news').offset().top;
            approach = approach - $('.wrapper_nav').outerHeight(true) - ($('.approach').outerHeight(true)) / 2 - $('.float_social').outerHeight(true) / 2;
            competence = competence - $('.wrapper_nav').outerHeight(true) + ($('.competence').outerHeight(true) / 2) - $('.float_social').outerHeight(true) / 2;
            directions = directions - $('.wrapper_nav').outerHeight(true) + ($('.directions').outerHeight(true) / 2) - $('.float_social').outerHeight(true) / 2;
            connect = connect - $('.wrapper_nav').outerHeight(true) + ($('.connect').outerHeight(true) / 2) - $('.float_social').outerHeight(true) / 2;
            technologies = technologies - $('.wrapper_nav').outerHeight(true) + ($('.technologies').outerHeight(true) / 2) - $('.float_social').outerHeight(true) / 2;
            projects = projects - $('.wrapper_nav').outerHeight(true) + ($('.about_projects').outerHeight(true) / 2) - $('.float_social').outerHeight(true) / 2;
            about_c = about_c - $('.wrapper_nav').outerHeight(true) + ($('.about_c').outerHeight(true) / 2) - $('.float_social').outerHeight(true) / 2;
            news = news - $('.wrapper_nav').outerHeight(true) + ($('.news').outerHeight(true) / 2) - $('.float_social').outerHeight(true) / 2;
            var coords = 0;
            if (localStorage.getItem('directionsCheck') != '1') var directionsCheck = 0;
            if ($(this).scrollTop() > about_c) {
                coords = $('.news').offset().top + ($('.news').outerHeight(true)) / 2 - $('.float_social').outerHeight(true) / 2;
                $('.float_social').css('top', coords);
            } else if ($(this).scrollTop() > projects) {
                coords = $('.about_c').offset().top + ($('.about_c').outerHeight(true)) / 2 - $('.float_social').outerHeight(true) / 2;
                $('.float_social').css('top', coords);
            } else if ($(this).scrollTop() > technologies) {
                coords = $('.about_projects').offset().top + ($('.about_projects').outerHeight(true)) / 2 - $('.float_social').outerHeight(true) / 2;
                $('.float_social').css('top', coords);
            } else if ($(this).scrollTop() > connect) {
                coords = $('.technologies').offset().top + ($('.technologies').outerHeight(true)) / 2 - $('.float_social').outerHeight(true) / 2;
                $('.float_social').css('top', coords);
            } else if ($(this).scrollTop() > directions) {
                coords = $('.connect').offset().top + ($('.connect').outerHeight(true)) / 2 - $('.float_social').outerHeight(true) / 2;
                $('.float_social').css('top', coords);
            } else if ($(this).scrollTop() > competence) {
                if (directionsCheck < 1) {
                    directionsAnimation();
                    localStorage.setItem('directionsCheck', '1');
                }
                coords = $('.directions').offset().top + ($('.directions').outerHeight(true)) / 2 - $('.float_social').outerHeight(true) / 2;
                $('.float_social').css('top', coords);
            } else if ($(this).scrollTop() > approach) {
                coords = $('.competence').offset().top + ($('.competence').outerHeight(true)) / 2 - $('.float_social').outerHeight(true) / 2;
                $('.float_social').css('top', coords);
            } else {
                coords = $('.approach').offset().top + ($('.approach').outerHeight(true)) / 2 - $('.float_social').outerHeight(true) / 2;
                $('.float_social').css('top', coords);
            }
        });
    }
});
$(document).ready(function () { //аккордеон
    if ($('#accordion').length > 0) {
        $(document).on('click', '.accordion-item-header', function () {
            if ($(this).parent(".accordion-item").hasClass('show')) {
                $(this).parent(".accordion-item").removeClass('show');
                $(this).parent(".accordion-item").find('.accordion-item-content').slideUp(300);
            } else {
                $('.show .accordion-item-content').slideUp(300);
                $('.show').removeClass('show');
                $(this).parent(".accordion-item").addClass('show');
                $(this).parent(".accordion-item").find('.accordion-item-content').slideDown(300);
            }
        });
    }
})
$(document).ready(function () { //фильтр по городам на вакансиях
    if ($('.vacancies #accordion').length > 0) {
        $(document).on('click', '.radio', function () {
            $('.show .accordion-item-content').slideUp(300);
            $('.show').removeClass('show');
            var city = $(this).attr('data-city');
            if (city == 'Все') {
                $('.accordion-item').hide(500);
                setTimeout(function () {
                    $('.accordion-item').show(500);
                }, 500);
            } else {
                $('.accordion-item').hide(500);
                setTimeout(function () {
                    $('.accordion-item-header[data-city="' + city + '"]').parent('.accordion-item').show(500);
                }, 500);
            }
        })
    }
})
$(document).ready(function () { //параллакс
    if ($('.project-parallax').length > 0) {
        var parallax = '<div class="projectParallaxElem"><div class="parallaxAnimator"></div></div>';
        $('.projectPage .wrapper').before(parallax);
        var height = $(window).height() - $('.wrapper_nav').height();
        var width = $(window).width() / 2;
        var top = $(window).height() - height;
        $('.projectParallaxElem').css({
            'right': '0',
            'top': top,
            'height': height,
            'width': width
        });
        $('.parallax_img').each(function () {
            $('.projectParallaxElem').append($(this));
        })
        var scrollTop = $(this).scrollTop();
        var currentElemCount = 0;
        var currentElem = 0;
        var elementWidth = $('.parallax_img').width();
        var percent = 0;
        $('.singleProjectBlock ').each(function () {
            var start = $(this).offset().top - $('.wrapper_nav').height();
            var finish = start + $(this).height();
            if ((scrollTop > start) && (scrollTop < finish)) {
                currentElem = currentElemCount;
                percent = (scrollTop - start) / (finish - start);
            }
            currentElemCount++;
        })
        if (currentElem < $('.singleProjectBlock').length - 1) {
            var margin = Math.round(currentElem * elementWidth + percent * elementWidth);
        } else {
            var margin = Math.round(currentElem * elementWidth);
        }
        var opacity = 100 * (1 - percent);
        var nextOpacity = 100 - 100 * (1 - percent);
        $('.parallaxAnimator').css('margin-left', '-' + margin + 'px');
        $('.parallax_img ').eq(currentElem).css('opacity', opacity + '%');
        $('.parallax_img ').eq(currentElem + 1).css('opacity', nextOpacity + '%');
        $(document).bind('touchmove scroll', function () {
            var scrollTop = $(this).scrollTop();
            var currentElemCount = 0;
            var currentElem = 0;
            var elementWidth = $('.parallax_img').width();
            var percent = 0;
            $('.singleProjectBlock ').each(function () {
                var start = $(this).offset().top - $('.wrapper_nav').height();
                var finish = start + $(this).height();
                if ((scrollTop > start) && (scrollTop < finish)) {
                    currentElem = currentElemCount;
                    percent = (scrollTop - start) / (finish - start);
                }
                currentElemCount++;
            })
            if (currentElem < $('.singleProjectBlock').length - 1) {
                var margin = Math.round(currentElem * elementWidth + percent * elementWidth);
            } else {
                var margin = Math.round(currentElem * elementWidth);
            }
            var opacity = 100 * (1 - percent);
            var nextOpacity = 100 - 100 * (1 - percent);
            $('.parallaxAnimator').css('margin-left', '-' + margin + 'px');
            $('.parallax_img ').eq(currentElem).css('opacity', opacity + '%');
            $('.parallax_img ').eq(currentElem + 1).css('opacity', nextOpacity + '%');
        })
    }
})

$(document).on('click', '.slick-arrow', function () {
    var SRC;
    var video = $('.slick-active video');
    var height = video.height();
    video.css('max-height', height);
    SRC = video.attr('src');
    video.attr('src', '0');
    setTimeout(function () {
        video.attr('src', SRC);
    }, 100);
});

function newsSlider() {
   // if ($(window).width() <= '1200') {
        $('.multiple-items').slick({
            dots: true,
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 1
        });

    //} else {
        // $('.multiple-items').slick({
        //     dots: true,
        //     infinite: true,
        //     slidesToShow: 4,
        //     slidesToScroll: 1
        // });
    //}
    $('.indexSlide r').slick({
        //dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 18000
    });
}
$(document).ready(newsSlider()); // при загрузке

// Фильтрация партеров по тэгам
$(document).ready(function () {

    // Фильтрация партнеров
    $('body').on('click', '.tagsPartners__item', function () {
        
        $('.tagsPartners__item').removeClass('active');
        $(this).addClass('active');
				
				var tag = $(this).attr('tag');
				console.log(tag);
        
        $('.gridPartners__item').hide();
        $('.gridPartners__item[tag='+tag+']').show();
    
    });
		
		
		// $('.tagsPartners__item').click(function () {
		// 		if ($(this).hasClass('active')) {
		// 				return false;
		// 		}
		// 		$('.tagsPartners__item').removeClass('active');
		// 		$(this).addClass('active');
		// 		if ($(this).data('class') == 'all') {
		// 				$('.gridPartners__item').show();
		// 		} else {
		// 				$('.gridPartners__item').hide();
		// 				$('.gridPartners__item.show_' + $(this).data('class')).show();
		// 		}
		// });

    // Открытие партнера
    $('.gridPartners__item').click(function () {
        let $elem = $(this);
        $('body').addClass('open-modal');
        $('.modals__partneres').addClass('show');
        $('.modal__partneres').addClass('show');

        $('.modal__logo_partner').html($elem.find('.image-container:eq(0)').html());
        $('.modal__description_partner').html($elem.find('.cfp-text:eq(0)').html());
        if ($elem.find('.cfp-link').html() == ""){
            $('.modal__site_partner').hide();
        }
        else{
            $('.modal__site_partner').show();
        }
        $('.modal__site_partner a').attr('href', $elem.find('.cfp-link:eq(0)').html()).html($elem.find('.cfp-link').html());
        $('.modal__tags_partner').html($elem.find('.cfp-tags:eq(0)').html());

    });

    // Закрытие модального окна по клику на крестик
    $('body').on('click', '.close__modal_partneres', function () {
        $('.modals__partneres').removeClass('show');
        setTimeout(function () {
            $('body').removeClass('open-modal');
        }, 100);
    });

    // Закрытие окна по клику вне области
    $('body').on('click', '.modal__partneres', function (event) {
        if ($(event.target).is('.modal__partneres')) {
            $('.close__modal_partneres').click();
        };
    });

    // Закрытие окна по нажатии на ESC
    $(document).keydown(function (e) {
        if (e.keyCode == 27) {
            if ($('body').hasClass('open-modal')) {
                $('.close__modal_partneres').click();
            }
        }
    });

});

$(document).ready(function () {

    const swipertrends = new Swiper('#swiper-trends', {
        pagination: {
            el: '.swiper-pagination',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
});

$('.bullets-show').click(function(){
    $(this).next('.bullets-hide-block').addClass('show');
    $('.bullets-show').hide();
    $('.bullets-hide').show();
})
$('.bullets-hide').click(function(){
    $(this).prev('.bullets-hide-block').removeClass('show');
    $('.bullets-hide').hide();
    $('.bullets-show').show();
})

$('.bullets-txt-show').click(function(){
    $(this).next('.bullets-txt-block').addClass('show');
    $(this).hide();
    $(this).next('.bullets-txt-block').find('.bullets-txt-hide').show();
})
$('.bullets-txt-hide').click(function(){
    $(this).parent('.bullets-txt-block').removeClass('show');
    $(this).hide();
    $(this).parent('.bullets-txt-block').prev('.bullets-txt-show').show();
})

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
    setEqualHeight($('.engineering-page .projects-item .projects-item-title'));
    setEqualHeight($('.main-news .main-news-item'));
});
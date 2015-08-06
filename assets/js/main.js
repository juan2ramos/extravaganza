var eventType = ((document.ontouchstart !== null) ? 'click' : 'touchstart'),
    allPanels = $('.Zone-list li p').hide(),
    $zone = $('.Zone-list'),
    $list = $('.Zone-list li'),
    $button = $('.NeedKnow-button'),
    $NeedKnowLi = $('.NeedKnow-ul li'),
    $NeedKnowArticles = $('.NeedKnow-articles'),
    $back = $('.back'),
    flag = true;

$('.button-nav').on(eventType, function () {

    $('.Header-nav').toggleClass("open");

});

$(function () {

});
if ($(window).width() > 800) {
    $list.on(eventType ,function () {

        allPanels.slideUp(800);
        $list.removeClass('open');
        $(this).find('p').slideDown(500);
        $(this).addClass("open");


        return false;

    });
}

$button.on(eventType ,function () {
    $(this).parent().find('article').toggleClass('translate');
    $('.play').toggleClass('rotate');
    return false;
});
$back.on(eventType ,function () {
    $NeedKnowArticles.css('-webkit-transform','translateY(100vh)');

    $('.NeedKnow-content').css('z-index', '-1');

});
$NeedKnowLi.on(eventType ,function () {
    var topArticle ;
    if ($(window).width() > 800) {
        topArticle = parseInt($(this).index()) * -460;
        $NeedKnowArticles.css('top',topArticle);
    }
    else {
        topArticle = parseInt($(this).index()) * (parseInt($(window).height()) - 81) * -1 ;
        console.log(parseInt($(window).height()));
        $NeedKnowArticles.css('-webkit-transform','translateY(' + topArticle + 'px)');

        $('.NeedKnow-content').css('z-index', '1')
    }
    return false;
});

function dayCounter() {

    var date = new Date(),
        today = new Date(date.getFullYear(), date.getMonth() + 1, date.getDate()).getTime(),
        deadline = new Date(2015, 10, 5).getTime(),
        days = (deadline - today ) / (1000 * 60 * 60 * 24);
    $('.Welcome-count span').text(days);
}
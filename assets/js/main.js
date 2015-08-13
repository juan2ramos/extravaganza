var eventType = 'click',
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


    $("body").delegate("#save_user", "click", function () {
        params = $('#user_register_form').serialize();

        $.ajax({
            url: $("#base_url").val() + 'extravaganza/save_user',
            data: params,
            type: 'POST',
            success: function (r) {
                $(".error").each(function () {
                    $(this).hide();
                });
                r = JSON.parse(r);
                console.log(r)

                if (r.success) {
                    $('.thanks').show();
                    $('.hideForm').hide();
                    $('.error').hide();
                    $('#user_register_form').css('height', '411');
                } else {


                    for (var i = 0; i < r.length; i++) {
                        var id = "#s_" + r[i];
                        $(id).show();

                    }
                    ;
                }
            }
        });
    });

});
if ($(window).width() > 800) {
    $list.on(eventType, function () {

        allPanels.slideUp(800);
        $list.removeClass('open');
        $(this).find('p').slideDown(500);
        $(this).addClass("open");


        return false;

    });
} else {

    //var padding = ((parseInt($(window).height()) - 81) - ($('.NeedKnow-articleContent').height()) ) / 2;
    //$NeedKnowArticles.find('.NeedKnow-article').css('padding-top', padding + 'px').css('padding-bottom', padding + 'px');
}

$button.on(eventType, function () {
    $(this).parent().find('article').toggleClass('translate');
    $('.play').toggleClass('rotate');
    return false;
});
$back.on(eventType, function () {
    $NeedKnowArticles.css('-webkit-transform', 'translateY(100vh)');

    $('.NeedKnow-content').css('z-index', '-1');

});
$NeedKnowLi.on(eventType, function () {
    var topArticle;
    if ($(window).width() > 800) {
        topArticle = parseInt($(this).index()) * -460;
        $NeedKnowArticles.css('top', topArticle);
    }
    else {
        var padding = ((parseInt($(window).height()) - 81) - ($('.NeedKnow-articleContent').height()) ) / 2;

        topArticle = parseInt($(this).index()) * (parseInt($NeedKnowArticles.find('.NeedKnow-article').outerHeight())) * -1;
        $NeedKnowArticles.css('-webkit-transform', 'translateY(' + topArticle + 'px)');

        $('.NeedKnow-content').css('z-index', '1')
    }
    return false;
});

function dayCounter() {

    var date = new Date(),
        today = new Date(date.getFullYear(), date.getMonth() + 1, date.getDate()).getTime(),
        deadline = new Date(2015, 9, 3).getTime(),
        days = (deadline - today ) / (1000 * 60 * 60 * 24);
    $('.Welcome-count span').text(days);
}

$('.activity').on('click', function () {
    $('.NeedKnow-dates').addClass('showDate')
});
$('.backDate').on('click', function () {
    $('.NeedKnow-dates').removeClass('showDate')
});
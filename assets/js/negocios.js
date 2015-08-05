jQuery(function() {
    /* BOTON LOG IN */
    $("#log-in a").click(function() {
        event.preventDefault();
        if ( $("#log-in").hasClass("open") ) {
            $("#log-in").removeClass("open");
            $("#log-in form").fadeOut(200);
        }
        else {
            $("#log-in").addClass("open");
            $("#log-in form").delay( 500 ).fadeIn(300);
        }
    });
    /* TAMAÑO DE LOS CUADROS */
    var medidaini = $('.subir-img').width();
    $('.subir-img').height(medidaini);
    $( window ).resize(function() {
        var medida = $('.subir-img').width();
        $('.subir-img').height(medida);
    });
    var medidainimap = $('#map a').width();
    $('#map a').height(medidainimap);
    $( window ).resize(function() {
        var medida = $('#map a').width();
        $('#map a').height(medida);
    });
    /* BOTON CIUDADES */
    $(".ciudad a").each(function (){
        var numlocales = $(this).siblings("ul").children().length;
        
        var alturaciudad = numlocales*60;
        $(this).siblings("ul").css("top",-alturaciudad);
    });
    $(".ciudad a").click(function(evt) {
        evt.preventDefault();
        var numlocales = $(this).siblings("ul").children().length;
        var alturaciudad = (numlocales*60)+50;
        if ( $(this).parent().hasClass("open-ciudad") ) {
            $(this).parent().removeClass("open-ciudad");
            $(this).siblings("ul").css("top",-alturaciudad+50);
            $(this).parent().height(50);
        }
        else {
            $(".ciudad").removeClass("open-ciudad");
            $(".ciudad").height(50);
            $(this).parent().addClass("open-ciudad");
            $(this).parent().height(alturaciudad);
            $(this).siblings("ul").css("top",0);
        }
    });
    /* BOTON INSCRIPCION */
    $("#btn-inscripcion").click(function() {
        $("body, html").animate({ scrollTop: $('#formulario h1').offset().top }, 600);
        return false;
    });

    if($('#inscripcion .pop-up').length) {
        $('#inscripcion .pop-up').show();
    }

    $('input, textarea').placeholder();

    $('input[type=file]').change(function(){
        $(this).parent().addClass('imagen-subida');
    });

    show_menu = false;
     $(".menu").click(function() {
        if(!show_menu){
            $('#links').css('display','block');
            $('header').css('margin-bottom','25%');
            $('#home > .year').hide();
            show_menu = true;
        }else{
            $('#links').css('display','none');
            $('header').css('margin-bottom','0%');
            $('#home > .year').show();
            show_menu = false;
        }
        
     });

    
});

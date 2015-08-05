placeholder=function(){
    $('input, textarea').each(function(){
        var holder=$(this).attr('placeholder');
        if(typeof(holder) !=='undefined'){
            $(this).val(holder);
            $(this).bind('click',function(){
                $(this).val('');
            }).blur(function(){
                $(this).val(holder);
            });
        }
    });
};
$(document).ready(placeholder);
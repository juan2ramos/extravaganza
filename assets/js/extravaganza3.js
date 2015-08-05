jQuery(document).ready(function($) {
     var $ = jQuery;
    //$(document).foundation();

    // PLACEHOLDER FOR IE
    $('input, textarea').placeholder();

    $("body").delegate("#save_user","click",function(){
        params = $('#user_register_form').serialize();
        
        $.ajax({
            url: $("#base_url").val() + 'extravaganza/save_user',
            data: params,
            type: 'POST',
            success: function(r){
                $( ".error" ).each(function() {
                    $(this).hide();
                });
                response = JSON.parse(r);
                if(response == "YES" || response == "NO"){   
                    var id = ".c_"+response;  
                    console.log(id);               
                    $(id).show();            
                    $('.thanks').bPopup({
                        speed: 650,
                        transition: 'slideIn',
                        transitionClose: 'slideBack'
                    });
                }else{
                    /*response.forEach(function(error) {
                        $("#s_"+error).show();
                    });*/
                    for (var i = 0; i < response.length; i++) {
                        var id = "#s_"+response[i];
                        $(id).show();      
                    };
                }
            }
        });
    });

    $("body").delegate(".confirm_passaport","click",function(e){
        e.preventDefault();
        if($(this).attr("id") == "p_yes"){
            $("[name=passaport]").val("YES");
            $("#p_yes").css("background-color","white").css("color","red");
            $("#p_no").css("background-color","transparent").css("color","white");
        }else{
            $("[name=passaport]").val("NO");
            $("#p_no").css("background-color","white").css("color","red");
            $("#p_yes").css("background-color","transparent").css("color","white");
        }
    });

    $("body").delegate(".confirm_store","click",function(e){
        e.preventDefault();
        if($(this).attr("id") == "st_yes"){
            $("[name=store]").val("YES");
            $("#st_yes").css("background-color","white").css("color","red");
            $("#st_no").css("background-color","transparent").css("color","white");
        }else{
            $("[name=store]").val("NO");
            $("#st_no").css("background-color","white").css("color","red");
            $("#st_yes").css("background-color","transparent").css("color","white");
        }
    });

    $("body").delegate(".accept","click",function(e){
        e.preventDefault();
        window.location = $("#base_url").val()+"extravaganza";
    });
    
});
$(document).ready(function () {

    $("input[name='tel']").mask("+38(999)999-99-99");//Проверка телефона

    //убераем плесхолдер при клике
    $('.wpcf7-form input,.wpcf7-form textarea,input#s,input,textarea').each(function(){
        var placeH = $(this).attr('placeholder');
        $(this).focus(function () {
            $(this).removeAttr('placeholder');

        });
        $(this).focusout(function(){
            $(this).attr('placeholder',placeH);
        });
    });
//убераем плесхолдер при клике - конец
});
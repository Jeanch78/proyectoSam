



$(document).ready(function () {
    $('.buscarActive').on('click', function () {
        var t = $(this).attr("data-class");
        $(".buscarActive").removeClass("mm-active"),
            $(this).addClass("mm-active"),
            localStorage.setItem('class_active_mode_admin', t);
    })
    var dat_navbar_activ = (localStorage.getItem('class_active_mode_admin'))
    $(".buscarActive").removeClass("mm-active"),
        $("." + dat_navbar_activ).addClass("mm-active")

});


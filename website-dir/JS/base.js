$(function () {
    var isSafari = /constructor/i.test(window.HTMLElement) || (function (p) { return p.toString() === "[object SafariRemoteNotification]"; })(!window['safari'] || (typeof safari !== 'undefined' && safari.pushNotification));
    if(isSafari){
        $(".sidemenu-close-btn").css("bottom","90px");
    }
    $(".menu-button, .sidemenu-close-btn, .sidemenu-spacing").click(function () {
        if ($(".sidemenu").css("Visibility") === "hidden") {
            $(".sidemenu").removeClass("sidemenu-close");
            $(".sidemenu").addClass("sidemenu-open");
            $("body").addClass("sidemenu-body");
        }
        else{
            $(".sidemenu").removeClass("sidemenu-open");
            $(".sidemenu").addClass("sidemenu-close");
            $("body").removeClass("sidemenu-body");
        }
    });
    $(".register-button").click(function () {
        if ($(".register-input").css("Display") === "none") {
            $(".register-button span").text("Login");
        }
        else if ($(".register-input").css("Display") === "block") {
            $(".register-button span").text("Registrieren");
        }
        $(".register-input").toggle();
    });
    $("section .scrolldown, footer .scrolldown").click(function () {
        var sections = $("section");
        var cursection = $(this).parents("section");
        for (var x = 0; x < sections.length; x++) {
            if (sections[x] === cursection[0]) {
                $('html,body').animate({
                    scrollTop: $(sections[(x + 1)]).offset().top
                }, 600);
                break;
            }
        }

    });
    $(".scrollup").click(function () {
        $('html,body').animate({
            scrollTop: 0
        }, 1200)
    });
});
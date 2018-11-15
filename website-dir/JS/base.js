$(function () {
    $(".menu-button").click(function () {
        navbar();
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

function navbar() {
    if ($(".sidemenu").css("Visibility") === "hidden") {
        $(".sidemenu").removeClass("close");
        $(".sidemenu").addClass("open");
    }
    else if ($(".sidemenu").css("Visibility") === "visible") {
        $(".sidemenu").removeClass("open");
        $(".sidemenu").addClass("close");
    }
}
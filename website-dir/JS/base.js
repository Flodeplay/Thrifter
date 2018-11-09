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
    $("section .scrolldown").click(function () {
        var sections = $("section");
        console.log(sections);
        var cursection = $(this).parents("section");
        for (var x = 0; x < sections.length; x++) {
            if (sections[x] === cursection[0]) {
                $('html,body').animate({
                    scrollTop: $(sections[(x + 1)]).offset().top
                }, 1000);
                break;
            }
        }

    });
    $(".scrollup").click(function () {
        $('html,body').animate({
            scrollTop: 0
        }, 1000)
    });
});

function navbar() {
    if ($(".sidemenu").css("Display") === "none") {
        $(".sidemenu").removeClass("close");
        $(".sidemenu").addClass("open");
    }
    else if ($(".sidemenu").css("Display") === "block") {
        $(".sidemenu").removeClass("open");
        $(".sidemenu").addClass("close");
    }
}
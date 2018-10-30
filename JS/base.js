$(function () {
    $(".menu-button").click(function () {
        navbar();
    });
    $(".register-button").click(function () {
        if ($(".register-input").css("Display") === "none") {
            $(".register-button span").text("Login");
        }
        else if ($(".register-input").css("Display") === "block") {
            $(".register-button span").text("Register");
        }
        $(".register-input").toggle();
    })
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

$(function () {
    $(".menu-button, .sidemenu-close-btn, .sidemenu-spacing").click(function () {
        if ($(".sidenav").css("Visibility") === "hidden") {
            $(".sidenav").removeClass("sidemenu-close");
            $(".sidenav").addClass("sidemenu-open");
            $("body").addClass("sidemenu-body");
        }
        else {
            $(".sidenav").removeClass("sidemenu-open");
            $(".sidenav").addClass("sidemenu-close");
            $("body").removeClass("sidemenu-body");
        }
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
    $('.modal').on('shown.bs.modal', function (e) {
        $('html').addClass('freezePage');
        $('body').addClass('freezePage');
    });
    $('.modal').on('hidden.bs.modal', function (e) {
        $('html').removeClass('freezePage');
        $('body').removeClass('freezePage');
    });
});
$(document).ready(function() {

    $('#search').click(function () {

        $("#search-box").show();
        $('html').addClass('freezePage');
        $('body').addClass('freezePage');
        $('#search-box input[type="text"]').on("keyup input", function () {
            /* Get input value on change */
            var inputVal = $(this).val();
            var result = $(this).parents(".row").siblings("#search-result");
            if (inputVal.length) {
                console.log(inputVal);
                $.get("compute-search.php", {term: inputVal}).done(function (data) {
                    result.html(data);
                });
            } else {
                result.empty();
            }
        });
        $("#search-cancel").click(function () {
            $("#search-box").hide();
            $('html').removeClass('freezePage');
            $('body').removeClass('freezePage');
        })
    });
});
$(document).ready(function() {
var result = $("#timeline");
$.get("compute-timeline.php", {}).done(function (data) {
    result.html(data + result.html());
});
$(document).scroll(function () {
    if($(window).scrollTop() + $(window).height() >= ($(document).height() - 100)) {
        var result = $("#timeline");
        $.get("compute-timeline.php", {}).done(function (data) {
            result.append(data);
        });
    }
})
});
function postlike(p_id, method, element) {
    if(method === "like"){
        $.ajax({
            type: "POST",
            url: "post-like.php",
            data: {p_id: p_id, method: "like"},
            success: function(){
                $(element).html("<i class=\"fas fa-heart fa-2x text-danger\">");
                element.onclick = function () {
                    postlike(p_id,"dislike",this);
                }
            }
        });
    }
    else if(method === "dislike"){
        $.ajax({
            type: "POST",
            url: "post-like.php",
            data: {p_id: p_id, method: "dislike"},
            success: function(){
                $(element).html("<i class=\"fa-2x far fa-heart text-success\"></i>");
                element.onclick = function () {
                    postlike(p_id,"like",this);
                }
            }
        });
    }
}
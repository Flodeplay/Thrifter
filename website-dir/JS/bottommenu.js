function addnewPost() {
    var newPostCOntainer = $("#new_post-container");
    newPostCOntainer.hide();
    newPostCOntainer.load("../html/post_upload.html");
    $("body").addClass("sidemenu-body");
    newPostCOntainer.fadeIn();
}

function closePost() {
    var newPostCOntainer = $("#new_post-container");
    newPostCOntainer.animate(function () {
        0
    }, "slow", function () {
        newPostCOntainer.children(".post-upload-modal").remove();
        $("body").removeClass("sidemenu-body");
    });
}

function validatepost() {
    //Todo validate post funktionnen Manu
    closePost();
}
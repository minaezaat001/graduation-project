$(document).ready(function() {
    const menuWidth = $(".menu").innerWidth();
    $(".menu").css("margin-right", -menuWidth);
    $(".nav-toggle").click(function() {
        $(".menu").toggleClass("show");
        if ($(".menu").hasClass("show")) {
            $(".menu").animate({
                    marginRight: -menuWidth,
                },
                500
            );
        } else {
            $(".menu").animate({
                    marginRight: 0,
                },
                500
            );
        }
    });
    // show
    // $(".taskBtn").click(function () {
    //     $(".task-show").slideDown();
    // });
    // $(".searchBtn").click(function () {
    //     $(".search-show").slideDown();
    // });
});
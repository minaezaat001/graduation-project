$(document).ready(function () {
    $(".menu-tab").click(function () {
        $(".menu-hide").toggleClass("show");
        $(".menu-tab").toggleClass("active");
        if ($(".menu-tab").hasClass("active")) {
            $("body").animate(
                {
                    marginLeft: 345,
                },
                600
            );
        } else {
            $("body").animate(
                {
                    marginLeft: 0,
                },
                600
            );
        }
    });
});

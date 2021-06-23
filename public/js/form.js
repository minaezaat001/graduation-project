window.onload = function () {
    setTimeout(() => {
        document.getElementById("reload").remove();
    }, 1500);
};

$(document).ready(function () {
    // Form Login

    // Show Password
    $(".icon-eye").click(function (e) {
        e.preventDefault();
        $(this).hide();
        $(".icon-eye-slash").fadeIn();
        $(this).siblings("input.form-control").attr("type", "text");
    });

    // Hide Password
    $(".icon-eye-slash").click(function (e) {
        e.preventDefault();
        $(this).hide();
        $(".icon-eye").fadeIn();
        $(this).siblings("input.form-control").attr("type", "password");
    });
});

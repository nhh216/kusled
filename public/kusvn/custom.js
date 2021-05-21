document.addEventListener("DOMContentLoaded", () => {
    $(".c_dotdotdot").dotdotdot();
});

// click header search header
jQuery(document).ready(function ($) {
    $(".search-header-w .icon-search").click(function () {
        $('#sosearchpro .search').slideToggle(200);
        $(this).toggleClass('active');
    });
});
jQuery(document).ready(function ($) {
    $(".search-header-w .ico-search").click(function () {
        $('#sosearchpro').slideToggle(200);
        $(this).toggleClass('active');
    });
});
//active link in menu
$(function () {
    $(".header__link").each(function () {
        window.location.href == this.href && $(this).addClass("active")
    })
});

//modal window
$(document).ready(function () {
    $(".js-callback").click(function (e) {
        e.preventDefault(), $(".info__overlay").fadeIn(400, function () {
            $(".info__popup").css("display", "block").animate({opacity: 1, top: "50%"}, 200)
        })
    }), $(".info__close, .info__overlay").click(function () {
        $(".info__popup").animate({opacity: 0, top: "45%"}, 200, function () {
            $(this).css("display", "none"), $(".info__overlay").fadeOut(400)
        })
    })
});

//fixed menu
$(window).bind("scroll", () => {
    $(window).scrollTop() > 0 ? $(".js-fixed").addClass("header--fixed") : $(".js-fixed").removeClass("header--fixed");
});

// adaptive menu
$(".adaptive-menu__open-menu").click(() => {
    $(".adaptive-menu__full-menu").slideDown()
});
$(".adaptive-menu__close-menu").click(() => {
    $(".adaptive-menu__full-menu").slideUp()
});
// $(".adaptive-menu__link").click(() => {
//     $(".adaptive-menu__full-menu").slideUp()
// });

//slider news
$(".js-slider").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    infinite:!0,
    speed:400,
    nav:true,
    autoplaySpeed:2000,
    margin: 10,
    responsive:[{
        breakpoint:1024,
        settings:{
            slidesToShow:3,
            slidesToScroll:1
        }},
        {
            breakpoint:992,
            settings:{
                slidesToShow:2,
                slidesToScroll:1,
                nav:false
        }},
        {
            breakpoint:650,
            settings:{
                slidesToShow:1,
                slidesToScroll:1}}]
    });

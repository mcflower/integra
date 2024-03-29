$('.owl-carousel.owl-cert').owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    //items: 4,
    //center:true,
    dots: false,
    navText: ['', ''],
    responsive: {
        0: {
            items: 1,
            nav: true
        },
        599: {
            items: 2,
            nav: true
        },
        767: {
            items: 3,
            nav: true
        },
    }
    // autoplay: true
});

$('.owl-carousel.owl-vebinary').owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    //center:true,
    dots: false,
    navText: ["", ""],
    responsive: {
        0: {
            items: 1,
            nav: true
        },
        599: {
            items: 2,
            nav: true
        },
        767: {
            items: 3,
            nav: true
        }
    }
});

$('.owl-carousel.owl-guides').owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    dots: false,
    navText: ["", ""],
    responsive: {
        0: {
            items: 1,
            nav: true
        },
        767: {
            items: 2,
            nav: true
        },
        980: {
            items: 3,
            nav: true
        }
    }
});

$('.owl-carousel.owl-anons').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    //center:true,
    dots: false,
    navText: ["", ""],
    responsive: {
        0: {
            items: 1,
            nav: true
        },
        767: {
            items: 2,
            nav: true
        },
        980: {
            items: 3,
            nav: true
        },
    }
});

$(".nav-left").on("click", function() {
    $(".owl-cert .owl-prev").trigger("click");
});

$(".nav-right").on("click", function() {
    $(".owl-cert .owl-next").trigger("click");
});

$(".nav-web-left").on("click", function() {
    $(".owl-vebinary .owl-prev").trigger("click");
});

$(".nav-web-right").on("click", function() {
    $(".owl-vebinary .owl-next").trigger("click");
});

$(".nav-guide-left").on("click", function() {
    $(".owl-guides .owl-prev").trigger("click");
});

$(".nav-guide-right").on("click", function() {
    $(".owl-guides .owl-next").trigger("click");
});

$(".nav-an-left").on("click", function() {
    $(".owl-anons .owl-prev").trigger("click");
});

$(".nav-an-right").on("click", function() {
    $(".owl-anons .owl-next").trigger("click");
});

$('.sa-button-event').magnificPopup({
    type: 'inline',

    //fixedContentPos: false,
    fixedBgPos: true,

    overflowY: 'auto',

    closeBtnInside: true,
    preloader: false,

    midClick: true,
    removalDelay: 300,
    //mainClass: 'my-mfp-slide-bottom'
});

$('#hypoxia-phone').mask("+7 (999) 999-99-99");
$('#hypoxia-birthday').mask("99.99.9999");

$('.guide-buy-event').on('click', function () {
    $(this).data('price') > 0 ? $('.guide-popup-button-event').html('ПЕРЕЙТИ К ОПЛАТЕ') : $('.guide-popup-button-event').html('ПОЛУЧИТЬ БЕСПЛАТНО');
    $('#guser-gcontent').val($(this).data('guide'));
    $('#guide-title').html($(this).data('gname'));
});

$('.scrollto').on('click', function() {

    let direction = $(this).attr('href');

    $('html, body').animate({
        scrollTop: $(direction).offset().top
    }, {
        duration: 370,   // по умолчанию «400»
        easing: 'linear' // по умолчанию «swing»
    });

    return false;
});

/*$('.pn-button').magnificPopup({
    type: 'inline',

    fixedContentPos: false,
    fixedBgPos: true,

    overflowY: 'auto',

    closeBtnInside: true,
    preloader: false,

    midClick: true,
    removalDelay: 300,
    mainClass: 'my-mfp-slide-bottom'
});*/

/*$('.cw-close').on('click', function() {
    $('.buy-container').hide();
    $('body').removeClass('cw-modal-open');
});

$('.sa-button').on('click', function() {
    $('.buy-container').show();
    $('body').addClass('cw-modal-open');
});*/

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
});
// changing navbar content with js:
$('.dropdown-categories a').mouseenter(function () {
    // var x= $('.dropdown-categories-content').attr().addClass('aaaaaaaa');
    var x = $('.dropdown-categories-content').each(function (index, element) {
        if ($(this).hasClass('is-active')) {
            $(this).removeClass('is-active');
        }

    });
    var a = $(this).attr('data-index');
    var b = $(".dropdown-categories-content[data-index='" + a + "']").addClass('is-active');
    // console.log(b.text());
    // console.log(x.text());
});






// swiperslide js codes
if ($(window).width() < 900) {
    // console.log($(window).width());
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 2,
        slidesPerGroup: 2,
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });


} else {
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 5,
        slidesPerGroup: 5,
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    var swiper2 = new Swiper('.swiper-container2', {
        slidesPerView: 4,
        slidesPerGroup: 4,
        spaceBetween: 20,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
}


// check if is scroll down
var lastScrollTop = 0;
$(window).scroll(function (event) {

    console.log('aaa');
    var st = $(this).scrollTop();
    if (st > lastScrollTop) {
        // $('.navbar-container').addClass('nav-notshown');
        $('.navbar-container').slideUp(200);

        st = $(this).scrollTop();


    } else {
        // upscroll code
        // $('.navbar-container').removeClass('nav-notshown');
        $('.navbar-container').slideDown(200);

        st = $(this).scrollTop();


    }
    setTimeout(function () {
        lastScrollTop = st;
        console.log('bbbb');
    }, 500);

});



// searchbox style
$('.search-input').focus(function(){
    $('.search-icon').addClass('bg-white');
})
$('.search-input').focusout(function(){
    $('.search-icon').removeClass('bg-white');
})




//smooth scroll
$('.nav-link').on('click' , function(e) {
let target = $(this.hash);
if(target.length) {
    e.preventDefault();
    $('html,body').animate({
        scrollTop : target.offset().top-180
    },1000)
}
})
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

    $('.nav-adds-container').each(function (index, element) {
    $(this).removeClass('add-active');

});
$(".nav-adds-container[data-index='" + a + "']").addClass('add-active');
    // console.log(b.text());
    // console.log(x.text());
});








// check if is scroll down
var lastScrollTop = 0;
$(window).scroll(function (event) {

    // console.log('aaa');
    var st = $(this).scrollTop();
    if (st > lastScrollTop+15) {
        // $('.navbar-container').addClass('nav-notshown');


        $('.navbar-container').slideUp(200);

        st = $(this).scrollTop();


    } else if(st < lastScrollTop-15) {

        // upscroll code
        // $('.navbar-container').removeClass('nav-notshown');
        $('.navbar-container').slideDown(200);

        st = $(this).scrollTop();
    }
    lastScrollTop = st;
    // setTimeout(function () {
    //     lastScrollTop = st;
    //     // console.log('bbbb');
    // }, 100);

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
});


// text expand
$('#text-span-btn').click(function(event){
    event.preventDefault();
    if($('.mask-text').hasClass('isExpand')){
        $('.mask-text.isExpand').removeClass('isExpand');
        $('#text-span-btn i').toggleClass('fa-angle-down fa-angle-up');
        $('#text-span-btn span').text('ادامه مطلب');
    }
    else{
        $('.mask-text').addClass('isExpand');
        $('#text-span-btn i').toggleClass('fa-angle-down fa-angle-up');
        $('#text-span-btn span').text('مشاهده کمتر');
    }


});

//params expand
$('#collapse-param-btn').click(function(event){
    event.preventDefault();
    if($('.product-param-collapse').hasClass('is-open')){
        $('.product-param-collapse').removeClass('is-open');
        $('#collapse-param-btn i').toggleClass('fa-angle-down fa-angle-up');
        $('#collapse-param-btn span').text('نمایش همه مشخصات کالا');
    }
    else{
        $('.product-param-collapse').addClass('is-open');
        $('#collapse-param-btn i').toggleClass('fa-angle-down fa-angle-up');
        $('#collapse-param-btn span').text('فقط نمایش مشخصات کلی کالا');
    }


});

//suppliers expand

$('#suppliers-more-btn').click(function(event){
    event.preventDefault();
    if($('.suppliers-in-filter').hasClass('suppliers-in-list')){
        $('.suppliers-in-filter').removeClass('suppliers-in-list');
        $('#suppliers-more-btn i').toggleClass('fa-angle-down fa-angle-up');
        $('#suppliers-more-btn span').text('نمایش فروشنده های دیگر');
    }
    else{
        $('.suppliers-in-filter').addClass('suppliers-in-list');
        $('#suppliers-more-btn i').toggleClass('fa-angle-down fa-angle-up');
        $('#suppliers-more-btn span').text('نمایش کمتر');
    }


});


// swiperslide js codes

    if ($(window).width() < 900) {
        // console.log($(window).width());
        var swiper = new Swiper('.mySwiper', {
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
        var swiper = new Swiper('.mySwiper', {
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


// $('.btn-link-blue').click(function(event){
//     event.preventDefault();
// $('.mask-text').addClass('isExpand');
// });


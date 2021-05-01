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

// if($( window ).width()<950){
//     console.log($( window ).width());
//     var swiper = new Swiper('.swiper-container', {
//     slidesPerView: 1,
//     slidesPerGroup: 1,
//     spaceBetween: 30,
//     pagination: {
//         el: '.swiper-pagination',
//         clickable: true,
//     },
//     navigation: {
//         nextEl: '.swiper-button-next',
//         prevEl: '.swiper-button-prev',
//     },
// });
$(window).resize(function () {

    if ($(window).width() < 900) {
        // console.log($(window).width());
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            slidesPerGroup: 1,
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
});


// changing navbar content with js:
$('.dropdown-categories a').mouseenter(function () {
    //    var x= $('.dropdown-categories-content').attr().addClass('aaaaaaaa');
    var x = $('.dropdown-categories-content').each(function (index, element) {
        if ($(this).hasClass('is-active')) {
            $(this).removeClass('is-active');
        }

    });
    var a = $(this).attr('data-index');
    var b = $(".dropdown-categories-content[data-index='" + a + "']").addClass('is-active');
    // console.log(b.text());
    //    console.log(x.text());
});
// console.log(a);
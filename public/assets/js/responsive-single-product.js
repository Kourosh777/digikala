
$('.main-container').click(function(){
   
    $('.burger-menu').removeClass('burger-is-active');
    $('.my-container').removeClass('body-burger-is-active');
});
$('.header-search-input-container').click(function(){
    if ( $('.burger-menu').hasClass('burger-is-active')){
    $('.burger-menu').removeClass('burger-is-active');
    }
});
$('.icon-header-question').click(function(){
    if ( $('.burger-menu').hasClass('burger-is-active')){
    $('.burger-menu').removeClass('burger-is-active');
    }
});



// $('.burger-menu').slideToggle();

$('.header-burger').click(function(){
    if (! $('.burger-menu').hasClass('burger-is-active')){
    $('.burger-menu').addClass('burger-is-active');
    $('.my-container').addClass('body-burger-is-active');
    }
    });
/*
$('.main-container').click(function(){

    $('.burger-menu').removeClass('burger-is-active');
    $('.my-container').removeClass('body-burger-is-active');
    $('body').css('position','relative');

});
$('.header-search-input-container').click(function(){
    if ( $('.burger-menu').hasClass('burger-is-active')){
    $('.burger-menu').removeClass('burger-is-active');
    $('body').css('position','relative');
    }
});
$('.icon-header-question').click(function(){
    if ( $('.burger-menu').hasClass('burger-is-active')){
    $('.burger-menu').removeClass('burger-is-active');
    $('body').css('position','relative');
    }
});
*/
$('.burger-overlay').click(function(){
$('.burger-menu').removeClass('burger-is-active');
$('.burger-overlay').removeClass('burger-overlay-active');
$('body').css('position','relative');

});


// $('.burger-menu').slideToggle();

//open burger menu
$('.header-burger').click(function(){
    if (! $('.burger-menu').hasClass('burger-is-active')){
    $('.burger-menu').addClass('burger-is-active');
    $('.my-container').addClass('body-burger-is-active');
    $('.burger-overlay').addClass('burger-overlay-active');
    $('body').css('position','fixed');
    }
    });




    $('.burger-menu-category').click(function(event){
        event.preventDefault();
       $(this).toggleClass('burger-category-is-active');
       $(this).children('i').toggleClass('fa-angle-down fa-angle-up');
    });

// to top right away
if ( window.location.hash ) scroll(0,0);
// void some browsers issue
setTimeout( function() { scroll(0,0); }, 1);

var $ = $ || jQuery;

$(function() {

    // your current click function
    $('.scroll').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top + 'px'
        }, 2000, 'swing');
    });

    // *only* if we have anchor on the url
    if(window.location.hash) {

        // smooth scroll to the anchor id
        $('html, body').animate({
            scrollTop: $(window.location.hash).offset().top + 'px'
        }, 2000, 'swing');
    }

});

checkScroll();

$(window).scroll(function(){
   checkScroll();
});

function checkScroll(){
    if($('body#work').length)
        return;

     if($(window).outerWidth() < 767 || $(document).scrollTop() > 0){
        $('.top-nav').addClass('scrolled');
    }
    else{
         $('.top-nav').removeClass('scrolled');
    }
}

$('.menu > li > a, .mobile-menu > li > a  ').click(function(e){

    var selector = $(this).attr('href');

    if(selector.indexOf('#') === 0)
    {
        e.preventDefault();
       $("html, body").animate({scrollTop: $(selector).offset().top - 50})
    }
});

$('.hire-nav, .hire-button, .quote-button').click(function(e){
    e.preventDefault();
    $('body').removeClass('hide-overlay').addClass('show-overlay');
});

$('.hire-overlay .close-btn').click(function(e){
    e.preventDefault();
    $('body').addClass('hide-overlay');
});
$('.hamburger, .hamburger-inner, .hamburger-box').click(function(e){
    e.stopPropagation();
    $('body').toggleClass('menu-open');
});

$(document).click(function(e){
    $('body').removeClass('menu-open');
});

$('.send-btn').click(function(e){
    e.preventDefault();
     if(!$('.loader').length){
                $('body').append('<i class="loader"></i>')
            }
            $('.loader').show();
    if(validateForm()){

        $('.contact-form').slideUp(250);
        $('.hire-form-form').submit();
    }else{
        $('.loader').remove();
    }
})
$('.hire-form-form').submit(function(e){
    e.preventDefault();


    $.ajax({
        url: 'http://formspree.io/dev.brianlee@gmail.com',
        method: 'POST',
        data: $(this).serialize(),
        dataType: 'json',
        beforeSend: function() {

        },
        success: function(data) {
            var time = 2;



            $('.hire-form').html('<div class="form-alert alert alert-success">Message sent! You will be redirected to the home page in <span class="timer">3</span>.</div>').slideDown(250);

            setInterval(function(){
                if(time > -1){
                    $('.timer').html(time);
                    time--;
                }
            }, 1000);

            setTimeout(function(){
                window.location = '/';

            }, 3000)
        },
        error: function(err) {
            $('.loader').hide();
            $('.hire-form').html('<div class="form-alert alert alert-error">I\'m sorry, there was an error trying to send the email.</div>').slideDown(250);
        }
    });
});
$('.name,.email,.message').keyup(function(){
    $(this).removeClass('invalid')
});
$('.budget').on('focus', function(){

    $(this).removeClass('invalid')
})
$('.budget').change(function(){

    $(this).removeClass('invalid')
})
function validateForm(){
    var name    = $('.name').val();
    var email   = $('.email').val();
    var subject = $('.subject').val();
    var message = $('.message').val();
    var budget  = $('.budget').val();

    if(!budget || budget.length === 0){
        $('.budget').addClass('invalid');
        return false;
    }
    if(!name || name.length === 0){
        $('.name').addClass('invalid');
        return false;
    }
    if(!email || email.length === 0 || email.indexOf('@') === -1 || email.indexOf('.') === -1){
        $('.email').addClass('invalid');
        return false;
    }

    if(!message || message.length < 3){
        $('.message').addClass('invalid');
        return false;
    }

    return true;
}

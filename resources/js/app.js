require('./bootstrap');
var $ = require( "jquery" );

$(document).ready(function(){

    $(document).on('click', 'a[href^="#"]', function () {
        $('html, body').stop().animate({
            scrollTop: $($(this).attr('href')).offset().top
        }, 1000, 'linear');
    });

})
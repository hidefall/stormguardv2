require('popper.js');
require('bootstrap');

$(document).ready(function(){
    $('.testimonials_slider').slick({
        dots: true,
        appendDots: $('.dots'),
        arrows: false,
    });
  });
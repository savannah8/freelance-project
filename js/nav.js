$(document).ready(function () {
    $('li.dropdownn').hover(function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(400);
    }, function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(400);
    });
  
 });
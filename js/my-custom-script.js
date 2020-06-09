var $ = jQuery.noConflict();

$(function(){
    // On load
    $( document ).ready(function() {
        $("#links-desktop .menu-item:first-child a").addClass("active");
    });

    // Menu active class
    $('#links-desktop .menu-item').click(function () {
        $("#links-desktop .menu-item a").removeClass("active");
        $(this).find(" a ").addClass("active");
    });

    $('#menu-mobile').click(function(){
        $('#myLinks').toggle();
    });
});
$(document).ready(function(){

    $( ".burger-menu" ).on("click", function() {

        if ( $('#menu-icon').hasClass('block') ) {
            $('#menu-icon').removeClass('block');
            $('#menu-icon').addClass('hidden');

            $('#close-icon').addClass('block');
            $('#close-icon').removeClass('hidden');

        } else {
            $('#menu-icon').removeClass('hidden');
            $('#menu-icon').addClass('block');

            $('#close-icon').addClass('hidden');
            $('#close-icon').removeClass('block');
        }

        $(".small-menu").slideToggle();

    });

});

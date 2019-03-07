(function($) {

    $(document).ready(function(){
        console.log('works');
        $('.menu-burger, .menu-items').on('click', function() {
            $('.menu-bg, .menu-items, .menu-burger').toggleClass('fs');
            $('.menu-burger').text() == "☰" ? $('.menu-burger').text('✕') : $('.menu-burger').text('☰');
        });
    });

})(jQuery);
(function($){
    $(function(){

        //:::menu:::

        $('#mobile-menu li.menu-item-has-children > a').each(function(i, elem){
            $('<button class="mm-show-sub-menu-button"></button>').insertAfter(this);
        });

        $('body').on('click', '#mobile-menu .mm-show-sub-menu-button', function(){
            var li =  $(this).parents('li.menu-item-has-children').first();
            if(li.hasClass('open')){
                li.removeClass('open');
            }
            else {
                li.addClass('open');
            }
          
        });

        $('.hamburger-button').click(function(){
            $('#mobile-menu').toggleClass("shown");
            $('body, html').toggleClass('mm-open');
        });
    
        // $('li.menu-item-has-children > a').click(function(e){
        //     if($(this).attr('data-clicked-once') != "true"){
        //         e.preventDefault();
        //         $(this).parents('li.menu-item-has-children').first().addClass('open');
        //         $(this).attr('data-clicked-once', "true");
        //     }
        // });





        //:::homepage specific:::

        if($('.home')) {
            // console.log('this is the home page');
            // $('#general-dentistry').hover(function(event) {
            //     console.log('test');
            //     $('.general-dentistry').toggleClass('home-show-after');
            // });
            // $('#cosmetic-dentistry').hover(function(event) {
            //     console.log('test');
            //     $('.cosmetic-dentistry').toggleClass('home-show-after');
            // });
            // $('#youth-dentistry').hover(function(event) {
            //     console.log('test');
            //     $('.youth-dentistry').toggleClass('home-show-after');
            // });

            // document.querySelector('.general-dentistry').addEventListener( "touchstart", function( event ) { 
            //     $('.general-dentistry').toggleClass('home-show-after');
            //     $('.youth-dentistry').removeClass('home-show-after');
            //     $('.cosmetic-dentistry').removeClass('home-show-after');
            // } );

            // document.querySelector('.youth-dentistry').addEventListener( "touchstart", function( event ) { 
            //     $('.youth-dentistry').toggleClass('home-show-after');
            //     $('.general-dentistry').removeClass('home-show-after');
            //     $('.cosmetic-dentistry').removeClass('home-show-after');
            // } );

            // document.querySelector('.cosmetic-dentistry').addEventListener( "touchstart", function( event ) { 
            //     $('.cosmetic-dentistry').toggleClass('home-show-after');
            //     $('.youth-dentistry').removeClass('home-show-after');
            //     $('.general-dentistry').removeClass('home-show-after');
            // } );

            //if (!is_touch_device()) {
                document.querySelector('.general-dentistry').addEventListener( "click", function( event ) { 
                    $('#general-dentistry').toggleClass('home-show-after');
                    $('#youth-dentistry').removeClass('home-show-after');
                    $('#cosmetic-dentistry').removeClass('home-show-after');
                    $('.general-dentistry').toggleClass('home-show-after');
                    $('.youth-dentistry').removeClass('home-show-after');
                    $('.cosmetic-dentistry').removeClass('home-show-after');
                } );

                document.querySelector('.youth-dentistry').addEventListener( "click", function( event ) { 
                    $('#youth-dentistry').toggleClass('home-show-after');
                    $('#general-dentistry').removeClass('home-show-after');
                    $('#cosmetic-dentistry').removeClass('home-show-after');
                    $('.youth-dentistry').toggleClass('home-show-after');
                    $('.general-dentistry').removeClass('home-show-after');
                    $('.cosmetic-dentistry').removeClass('home-show-after');
                } );

                document.querySelector('.cosmetic-dentistry').addEventListener( "click", function( event ) { 
                    $('#cosmetic-dentistry').toggleClass('home-show-after');
                    $('#youth-dentistry').removeClass('home-show-after');
                    $('#general-dentistry').removeClass('home-show-after');
                    $('.cosmetic-dentistry').toggleClass('home-show-after');
                    $('.youth-dentistry').removeClass('home-show-after');
                    $('.general-dentistry').removeClass('home-show-after');
                } );
            //}
        }

        function is_touch_device() {  
            try {  
              document.createEvent("TouchEvent");  
              return true;  
            } catch (e) {  
              return false;  
            }  
        }

    });
})(jQuery);


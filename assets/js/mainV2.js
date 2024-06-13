(function($) {
    "use strict";

    //when dom is ready
    $(document).ready(function() {

        // on scroll Navbar Fixed and back to top show
        $(window).on('scroll', function() {
            if($(window).width() > 600){
                if ($(window).scrollTop() > 600) {
                    $('#header').addClass('navbar-fixed-top');
                    $('#back-to-top').addClass('reveal');
                } else {
                    $('#header').removeClass('navbar-fixed-top');
                    $('#back-to-top').removeClass('reveal');
                }
            }
        });


        // Start Back to Top
        $('#back-to-top').on('click', function() {
            $("html, body").animate({scrollTop: 0}, 1000);
            return false;
        });

        // revolution slider start
        
        // revolution slider end


        // Start Portfolio Section
        $(window).on('load', function() {

            //Portfolio Start
            var $container = $('.portfolio-box');
            $container.isotope({
                filter: '*',
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            $('.filter a').on('click', function() {
                $('.filter .active').removeClass('active');
                $(this).addClass('active');
                var selector = $(this).attr('data-filter');
                $('.portfolio-box').isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    }
                });
                return false;
            });
            //Portfolio End
        });


        // Start Animated Number
        $('.animated-counter').appear(function() {
            $('.animated-number').countTo({
                speed: 4000,
                refreshInterval: 60,
                formatter: function(value, options) {
                   
                    return parseFloat(value).toFixed(options.decimals);
                }
            });
        });


        //Progress Bar
        $('.progress-bar').each(function(){
            var width = $(this).data('percentage');
            $(this).css({'transition': 'width 3s'});
            $(this).appear(function () {
                $(this).css('width', width + '%');
                $(this).find('.count').countTo({
                    from: 0,
                    to: width,
                    speed: 3000,
                    refreshInterval: 50,
                });
            });
        });

        // Start Easy Pie Chart
        $('.progress-chart-feature').appear(function() {
            $('.chart').easyPieChart({
                animate: 2000,
                barColor: '#ed1c24',
                trackColor: '#f6f6f6',
                scaleColor: '',
                lineCap: 'round',
                lineWidth: 10,
                size: 130
            });
        });

        //Owl Carousel-- Awards
        $(".testimonial-carousel").owlCarousel({
            pagination: true,
            navigation: true,
            items : 3,
			loop:true,
            itemsDesktop : [1000,3],
            itemsDesktopSmall : [900,2],
            itemsTablet: [767,1],
            slideSpeed: 2000,
            stopOnHover: false,
            autoPlay: true,
            //singleItem: false,
            navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>']
        });
		// Testimonial
		 $(".testimonial").owlCarousel({
            pagination: false,
            navigation: true,
            items : 1,
			loop:true,
            itemsDesktop : [1000,1],
            itemsDesktopSmall : [900,1],
            itemsTablet: [767,1],
            slideSpeed: 4000,
            stopOnHover: false,
            autoPlay: true,
			autoplayTimeout:10000,
            //singleItem: false,
            navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>']
        });
		
		$('.careers').owlCarousel({
			pagination: false,
            navigation: true,
			center: true,
			items:3,
			loop:true,
			margin:10,
			autoPlay: 1500,
			//autoplayTimeout:1000,
			slideSpeed: 1000,
			navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>']
			//itemsDesktop : [1000,3],
            //itemsDesktopSmall : [900,3],
            //itemsTablet: [767,3],
            //slideSpeed: 1000,
		});
		
		// Clients Carousel
		$(".clients-carousel").owlCarousel({
            pagination: false,
            navigation: true,
            items : 4,
            itemsDesktop : [1000,1],
            itemsDesktopSmall : [900,1],
            itemsTablet: [767,1],
			autoPlay: 1500,
            slideSpeed: 1000,
            stopOnHover: false,
            singleItem: false,
            navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>']
        });

        //Owl Carousel-- Latest News
        $(".news-carousel").owlCarousel({
            pagination: true,
            navigation: false,
            items : 3,
            itemsDesktop : [1000,3],
            itemsDesktopSmall : [900,3],
            itemsTablet: [767,2],
            slideSpeed: 2500,
            stopOnHover: true,
            autoPlay: true,
            singleItem: false,
            navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>']
        });

        //Tooltip
        $('[data-toggle="tooltip"]').tooltip()

        //video background
        try {
            jQuery(".player").mb_YTPlayer();
        } catch (err) {}

        //WOW js
        new WOW().init();

		
    });
    //dom ready end

})(jQuery);
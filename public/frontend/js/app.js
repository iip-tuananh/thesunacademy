var App = function () {

     // IE mode
    var isIE8 = false;
    var isIE9 = false;
    var isIE10 = false;

    var handleInit = function() {

        isIE8 = !! navigator.userAgent.match(/MSIE 8.0/);
        isIE9 = !! navigator.userAgent.match(/MSIE 9.0/);
        isIE10 = !! navigator.userAgent.match(/MSIE 10.0/);
        
        if (isIE10) {
            jQuery('html').addClass('ie10'); // detect IE10 version
        }
    }

    function handleIEFixes() {
        //fix html5 placeholder attribute for ie7 & ie8
        if (isIE8 || isIE9) { // ie8 & ie9
            // this is html5 placeholder fix for inputs, inputs with placeholder-no-fix class will be skipped(e.g: we need this for password fields)
            jQuery('input[placeholder]:not(.placeholder-no-fix), textarea[placeholder]:not(.placeholder-no-fix)').each(function () {

                var input = jQuery(this);

                if (input.val() == '' && input.attr("placeholder") != '') {
                    input.addClass("placeholder").val(input.attr('placeholder'));
                }

                input.focus(function () {
                    if (input.val() == input.attr('placeholder')) {
                        input.val('');
                    }
                });

                input.blur(function () {
                    if (input.val() == '' || input.val() == input.attr('placeholder')) {
                        input.val(input.attr('placeholder'));
                    }
                });
            });
        }
    }

    function handleBootstrap() {
        jQuery('.carousel').carousel({
            interval: 15000,
            pause: 'hover'
        });
        jQuery('.tooltips').tooltip();
        jQuery('.popovers').popover();
    }

    function handleMisc() {
        jQuery('.goTop').click(function () {
            jQuery('html,body').animate({
                scrollTop: jQuery('body').offset().top
            }, 'slow');
        }); //move to top navigator
    }


    function handleSearch() {    
        $('.search-btn').click(function () {            
            if($('.search-btn').hasClass('show-search-icon')){
                $('.search-box').fadeOut(300);
                $('.search-btn').removeClass('show-search-icon');
            } else {
                $('.search-box').fadeIn(300);
                $('.search-btn').addClass('show-search-icon');
            } 
        }); 
    }

    function handleUniform() {
        if (!jQuery().uniform) {
            return;
        }
        var test = $("input[type=checkbox]:not(.toggle), input[type=radio]:not(.toggle, .star)");
        if (test.length > 0) {
            test.each(function () {
                    if ($(this).parents(".checker").length == 0) {
                        $(this).show();
                        $(this).uniform();
                    }
                });
        }
    }

    var handleFancybox = function () {
        if (!$.fancybox) {
            return;
        }

        if ($(".fancybox-button").length > 0) {            
            $(".fancybox-button").fancybox({
                groupAttr: 'data-rel',
                closeBtn: true,
                helpers: {
                    title: {
                        type: 'inside'
                    }
                }
            });

            $('.fancybox-video').fancybox({
                type: 'iframe'
            });
        }
    }
    
    var handleInputMasks = function () {
    	$('.mask_percent').autoNumeric("init",{
    		vMin: 0,
        	vMax: 100,
        	mDec: 0,
            aSep: '.',
            aDec: ',', 
        });
        
        $('.mask_currency').autoNumeric("init",{
        	mDec: 0,
            aSep: '.',
            aDec: ',', 
        });
    }
    
    var handleToTop = function () {
    	$('#box_toTop').click(function() {
            $('html,body').animate({
                scrollTop: 0
            }, 'slow');
    	});
    }
	
    return {
        init: function () {
            handleInit();
            handleIEFixes();
            handleInputMasks();
            handleBootstrap();
            handleFancybox();
            handleToTop();
        },
        initBxSlider: function () {
        	$("#slide_bxslider .bxslider").show();
            $("#slide_bxslider .bxslider").bxSlider({
            	auto: true,
                minSlides: 1,
                maxSlides: 1,
                mode: "fade",
                //slideWidth: 360,
                slideMargin: 0,
                moveSlides: 1,
                responsive: true,
                pause: 5000,
                speed: 1500
            });
        }
    };
}();
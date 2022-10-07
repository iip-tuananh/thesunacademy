<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
   <title>@yield('title')</title>
   <meta name="description" content="">
   <meta name="keywords" content="@yield('title')"/>
   <meta name="robots" content="noodp,index,follow" />
   <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
   <meta name="csrf-token" content="{{ csrf_token() }}" />
   <meta name="description" content="@yield('description')" />
   <link rel="canonical" href="{{url()->current()}}" />
   <meta property="og:locale" content="vi_VN" />
   <meta property="og:type" content="article" />
   <meta property="og:title" content="@yield('title')" />
   <meta property="og:description" content="@yield('description')" />
   <meta property="og:url" content="{{url()->current()}}" />
   <meta property="og:site_name" content="ahometh.vn" />
   <meta property="og:updated_time" content="2021-08-28T22:06:30+07:00" />
   <meta property="og:image" content="@yield('image')" />
   <meta property="og:image:secure_url" content="@yield('image')" />
   <meta property="og:image:width" content="598" />
   <meta property="og:image:height" content="333" />
   <meta property="og:image:alt" content="ahome-noi-that" />
   <meta property="og:image:type" content="image/jpeg" />
   <meta name="twitter:card" content="summary_large_image" />
   <meta name="twitter:title" content="@yield('title')" />
   <meta name="twitter:description" content="@yield('description')" />
   <meta name="twitter:image" content="@yield('image')" />
   <!-- Fav Icon -->
   <link rel="icon" href="{{url(''.$setting->favicon)}}" type="image/x-icon">
   <link href="{{asset('frontend/css/bootstrap.min.css')}}" media="screen" rel="stylesheet" type="text/css">
   <link href="{{asset('frontend/css/bootstrap-select.min.css')}}" media="screen" rel="stylesheet" type="text/css">
   <link href="{{asset('frontend/css/font-awesome.min.css')}}" media="screen" rel="stylesheet" type="text/css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"/>
   <link href="{{asset('frontend/css/jquery.bxslider.css')}}" media="screen" rel="stylesheet" type="text/css">
   <link href="{{asset('frontend/css/style.css')}}" media="screen" rel="stylesheet" type="text/css">
   <link href="{{asset('frontend/css/tuvan.css')}}" media="screen" rel="stylesheet" type="text/css">
   <link href="{{asset('frontend/css/user.css')}}" media="screen" rel="stylesheet" type="text/css">
   <link href="{{asset('frontend/css/online.css')}}" media="screen" rel="stylesheet" type="text/css">
   <link href="{{asset('frontend/css/livechat.css')}}" media="screen" rel="stylesheet" type="text/css">
   <link href="{{asset('frontend/css/flowplayer.css')}}" media="screen" rel="stylesheet" type="text/css">
   <link href="{{asset('frontend/css/tuvan.css')}}" media="screen" rel="stylesheet" type="text/css">
   <link href="{{asset('frontend/css/livechat.css')}}" media="screen" rel="stylesheet" type="text/css">
   <link href="{{asset('frontend/css/splide.min.css')}}" media="screen" rel="stylesheet" type="text/css">
   <link href="{{asset('frontend/css/owl.carousel.min.css')}}" media="screen" rel="stylesheet" type="text/css">
   <link href="{{asset('frontend/css/owl.theme.default.min.css')}}" media="screen" rel="stylesheet" type="text/css">
   <link href="{{asset('frontend/css/callbuttom.css')}}" rel="stylesheet" type="text/css" />
   <link href="{{ asset('frontend/css/magnific-popup.css')}}" rel="stylesheet" type="text/css">
</head>
<body class="body"> 
   @include('layouts.header.index')
   @yield('content')
   @include('layouts.footer.index')
   <div class="hotline-phone-ring-wrap">
      <div class="hotline-phone-ring">
         <div class="hotline-phone-ring-circle"></div>
         <div class="hotline-phone-ring-circle-fill"></div>
         <div class="hotline-phone-ring-img-circle">
         <a href="tel:{{$setting->phone1}}" class="pps-btn-img">
         <img src="{{url('frontend/images/icon-call.png')}}" alt="Gọi điện thoại" width="50" loading="lazy">
         </a>
         </div>
      </div>
   </div>
   <div class="hotline-phone-ring-wrap2">
      <div class="hotline-phone-ring">
         <div class="hotline-phone-ring-circle"></div>
         <div class="hotline-phone-ring-circle-fill"></div>
         <div class="hotline-phone-ring-img-circle">
         <a href="https://zalo.me/{{$setting->phone1}}" class="pps-btn-img" target="_blank">
         <img src="{{url('frontend/images/icon-zalo.png')}}" alt="Chat zalo" width="50" loading="lazy">
         </a>
         </div>
      </div>
   </div>
   <div class="hotline-phone-ring-wrap3">
      <div class="hotline-phone-ring">
         <div class="hotline-phone-ring-circle"></div>
         <div class="hotline-phone-ring-circle-fill"></div>
         <div class="hotline-phone-ring-img-circle">
         <a href="{{$setting->google}}" class="pps-btn-img" target="_blank">
         <img src="{{url('frontend/images/icon-mess.png')}}" alt="Chat messenger" width="50" loading="lazy">
         </a>
         </div>
      </div>
   </div>
   <div class="hotline-phone-ring-wrap4">
      <div class="hotline-phone-ring">
         <div class="hotline-phone-ring-circle"></div>
         <div class="hotline-phone-ring-circle-fill"></div>
         <div class="hotline-phone-ring-img-circle">
         <a href="{{$setting->GA}}" class="pps-btn-img" target="_blank">
         <img src="{{url('frontend/images/icon-youtube.png')}}" alt="Xem youtube" width="50" loading="lazy">
         </a>
         </div>
      </div>
   </div>
   <style>
      .item-footer img{max-width: 100%;}
      .inline-app a{display: inline-block; margin: 5px 0; }
      @media screen and (max-width: 767px){
      .item-footer{padding: 15px 0; border-bottom: #fff thin dashed}
      .inline-app a{margin-top: 15px; display: inline-block; width: 50%; float: left; padding: 0 5px; }
      .inline-app a:first-child{padding-left: 0;}
      .inline-app a:last-child{padding-right: 0;}
      }
   </style>
   <script type="text/javascript" src="{{asset('frontend/js/jquery.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('frontend/js/bootstrap-select.min.js')}}"></script>
   <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
   <script type="text/javascript" src="{{asset('frontend/js/jquery.bxslider.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
   <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.2/dist/js/splide.min.js"></script>
   @yield('js')
   <div id="fb-root"></div>
   <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v15.0" nonce="V9nEN9h7"></script>
   <script type="text/javascript">
      document.addEventListener( 'DOMContentLoaded', function () {
      var main = new Splide( '#main-carousel', {
         fixedHeight : 500,
         type      : 'fade',
         rewind    : true,
         pagination: false,
         arrows    : false,
         autoplay: true,
         autoWidth : true,
         breakpoints : {
            768: {
            fixedWidth : 600,
            fixedHeight: 300,
            },
         },
      } );
      var thumbnails = new Splide( '#thumbnail-carousel', {
         fixedWidth  : 280,
         fixedHeight : 180,
         gap         : 10,
         rewind      : true,
         pagination  : false,
         isNavigation: true,
         breakpoints : {
            768: {
            fixedWidth : 120,
            fixedHeight: 80,
            },
         },
      } );
   
      main.sync( thumbnails );
      main.mount();
      thumbnails.mount();
      } );
   </script>
   <script type="text/javascript">
      //<!--
            function close_menu_mobile() {
            $('.bg_menu_mobile').remove();
            $('.box_menuMobile').remove();
      }
      
      $(document).ready(function() {
            $('#box_menuMain .header .toggle').click(function() {
               var xhtmlMenu = $('#box_menuMain .menu').html();
               $('body').append('<div class="box_menuMobile">'+ xhtmlMenu +'</div>');
               $('body').append('<div class="bg_menu_mobile" onclick="close_menu_mobile()"></div>');
            });
      });
      
      //-->
   </script>
   <script>
      $(window).scroll(function(){
      if ($(window).scrollTop() <= 330) {
         $('.box_menuMain').addClass('fixed');
         }
         else {
         $('.box_menuMain').removeClass('fixed');
         }
      });
   </script>
   <script type="text/javascript">
      //<!--
            $(document).ready(function() {
            $("#box_bxslider_pc").show();
            $("#box_bxslider_pc .bxslider").bxSlider({
               auto: true,
               infiniteLoop:true,
               minSlides: 1,
               maxSlides: 1,
               slideMargin: 0,
               moveSlides: 1,
               responsive: true,
               autoHover: true,
               pause: 4000,
               speed: 1500
            });
            var is_mobile = false;
            if( $('#box_bxslider_pc').css('display')=='none') {
               is_mobile = true;       
            }
            if (is_mobile == true) {
               $("#box_bxslider_pc").hide();
            }
      });
      
      //-->
   </script>
   <script type="text/javascript">
      //<!--
            $(document).ready(function() {
            $("#box_bxslider_mobile").show();
            $("#box_bxslider_mobile .bxslider").bxSlider({
               auto: true,
               infiniteLoop:true,
               minSlides: 1,
               maxSlides: 1,
               slideMargin: 0,
               moveSlides: 1,
               responsive: true,
               pause: 5000,
               speed: 1500
            });
            var is_pc = false;
            if( $('#box_bxslider_mobile').css('display')=='none') {
               is_pc = true;       
            }
            if (is_pc == true) {
               $("#box_bxslider_mobile").hide();
            }
      });
      
      //-->
   </script>
   <script>
      $('.owl-carousel').owlCarousel({
         loop:true,
         margin:10,
         nav:true,
         dots: false,
         autoplay:true,
         autoplayTimeout:3000,
         autoplayHoverPause:true,
         responsive:{
            0:{
                  items:1
            },
            600:{
                  items:1
            },
            1000:{
                  items:1
            }
         }
      })
   </script>
   <script type="text/javascript">
      $(document).ready(function() {
            var maxSlides = 4;
            var slideWidth = 260; 
            if ($(window).width() < 768) {
               maxSlides = 2;
               slideWidth = 260;
            }
            $('#bxslider').show();
            $('#bxslider').bxSlider({
               auto: true,
               autoControls: false,
               minSlides: maxSlides,
               maxSlides: maxSlides,
               moveSlides: 1,
               slideWidth: slideWidth,
               slideMargin: 30,
               adaptiveHeight: true,
               responsive: true
            }, 3000);
      });
      
      $(document).ready(function() {
            var maxSlides = 3;
            var slideWidth = 368; 
            if ($(window).width() < 768) {
               maxSlides = 1;
               slideWidth = 260;
            }
            $('#box_student').show();
            $('#box_student .slider').bxSlider({
               auto: false,
               autoControls: false,
               minSlides: maxSlides,
               maxSlides: maxSlides,
               moveSlides: 1,
               slideWidth: slideWidth,
               slideMargin: 30,
               adaptiveHeight: true,
               responsive: true,
               infiniteLoop: false
            }, 3000);
      });
      
      $(document).ready(function() {
            var maxSlides = 5;
            var slideWidth = 216; 
            if ($(window).width() < 768) {
               maxSlides = 1;
               slideWidth = 216;
            }
            $('#box_student').show();
      $('.box_productNew ul.bxslider').show();
            $('.box_productNew ul.bxslider').bxSlider({
               auto: false,
               autoControls: false,
               minSlides: maxSlides,
               maxSlides: maxSlides,
               moveSlides: 1,
               slideWidth: slideWidth,
               slideMargin: 25,
               adaptiveHeight: true,
               responsive: true,
               infiniteLoop: false
            }, 3000);
      });
   </script>
   <style>
      /**
 * Simple fade transition,
 */
.mfp-fade.mfp-bg {
	opacity: 0;
	-webkit-transition: all 0.15s ease-out; 
	-moz-transition: all 0.15s ease-out; 
	transition: all 0.15s ease-out;
}
.mfp-fade.mfp-bg.mfp-ready {
	opacity: 0.8;
}
.mfp-fade.mfp-bg.mfp-removing {
	opacity: 0;
}

.mfp-fade.mfp-wrap .mfp-content {
	opacity: 0;
	-webkit-transition: all 0.15s ease-out; 
	-moz-transition: all 0.15s ease-out; 
	transition: all 0.15s ease-out;
}
.mfp-fade.mfp-wrap.mfp-ready .mfp-content {
	opacity: 1;
}
.mfp-fade.mfp-wrap.mfp-removing .mfp-content {
	opacity: 0;
}
   </style>
</body>
</html>
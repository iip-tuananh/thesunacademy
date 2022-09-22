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
   {{-- <link href="{{asset('frontend/css/jquery.fancybox.css')}}" media="screen" rel="stylesheet" type="text/css"> --}}
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
   {{-- <script type="text/javascript" src="{{asset('frontend/js/jquery.fancybox.js')}}"></script> --}}
   <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
   <script type="text/javascript" src="{{asset('frontend/js/jquery.bxslider.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
   {{-- <script type="text/javascript" src="{{asset('frontend/js/hover-dropdown.js')}}"></script>
   <script type="text/javascript" src="{{asset('frontend/js/numeric.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('frontend/js/app.js')}}"></script>
   <script type="text/javascript" src="{{asset('frontend/js/me.js')}}"></script> --}}
   <!--[if gt IE 8]><!-->
   {{-- <script type="text/javascript" src="{{asset('frontend/js/hls.light.min.js')}}"></script> --}}
   <!--<![endif]-->
   {{-- <script type="text/javascript" src="{{asset('frontend/js/flowplayer.min.js')}}"></script> --}}
   <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.2/dist/js/splide.min.js"></script>
   <div id="fb-root"></div>
   <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v15.0" nonce="V9nEN9h7"></script>
   {{-- <script type="text/javascript">
      $(document).ready(function() {
            App.init();
      });
   </script> --}}
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
   {{-- <script type="text/javascript">
      //<!--
                  function loadCourse(city_id, insert) {
               if(insert == 'html') {
                  $('input[name="page"]').val(1);
               } else {
                  var page_next = parseInt($('input[name="page"]').val()) + 1;
                        $('input[name="page"]').val(page_next);
               }
               $.ajax({
                        type: "POST",
                        url: '/post/api/list-course/',
                        data: {
                           course_city_id: city_id,
                           page: $('input[name="page"]').val(),
                           number: $('input[name="number"]').val(),
                        },
                        cache: false,
                        beforeSend: function() {
                           $('#box_courseNew .box_content').append('<div class="content-loading"><div class="loader_2"></div></div>');
                        },
                        success: function(result){
                           if(insert == 'append') {
                              $('#box_courseNew .box_content .load_content').append(result);
                              if(result == '') {
                                    $('#box_courseNew .view_all').hide();
                              } else {
                                    $('#box_courseNew .view_all').show();
                              }
                           } else {
                              $('#box_courseNew .box_content .load_content').html(result);
                              if(result == '') {
                                    $('#box_courseNew .box_content .load_content').html('<div class="alert alert-danger">Hiện tại chưa có khóa học nào</div>');
                                    $('#box_courseNew .view_all').hide();
                              } else {
                                    $('#box_courseNew .view_all').show();
                              }
                           }
                           
                           $('#box_courseNew .box_content .content-loading').remove();
                        }
                  });
            };
            loadCourse($('#box_courseNew .filter a:first').attr('data-id'), 'html');
            
               $(document).ready(function() {
                  $('#box_courseNew .filter a').click(function() {
                        $('#box_courseNew .filter a').removeClass('active');
                        $(this).addClass('active');
                        loadCourse($(this).attr('data-id'), 'html');
                  });
                  $('#box_courseNew .view_all a').click(function() {
                        loadCourse($('#box_courseNew .filter a.active').attr('data-id'), 'append');
                  });
               });
            
      //-->
   </script>
   <script type="text/javascript">
      //<!--
      // Popup video
      function play_video(url) {
      var html = '';
      html += '<div class="popup_video" onclick="close_popup()">';
      html += '<div class="popup_content">';
            html += '<div class="embed-responsive embed-responsive-16by9">';
               html += '<iframe class="embed-responsive-item" src="'+ url +'" frameborder="0" allowfullscreen></iframe>';
               html += '</div>';
            html += '<a href="javascript:void(0)" onclick="close_popup()" class="popup_close"><i class="fa fa-times"></i></a>';
            html += '</div>';
      html += '</div>';
      $('body').append(html);
      }
      
      // Close Popup video
      function close_popup() {
      $('.popup_video').remove();
      }
      
      //-->
   </script>
   <script type="text/javascript">
      //<!--
            $('#frmRegister .btn-sucsess').click(function() {
            $.ajax({
               url     : '/user/index/register/',
               type    : 'POST',
               data    : $('#frmRegister').serialize(),
               beforeSend: function() {
                  $('body').append('<div class="page-loading"><div class="loader"></div></div>');
               },
               success : function(data){
                  var result = JSON.parse(data);
                  if(result.error) {
                        $('#frmRegister .alert').html(result.error).removeClass('hidden');
                  } else if(result.success == 1) {
                        window.location.href = "/user/index/index/";
                  }
                  $('body .page-loading').remove();
               }
            });
      });
      
      //-->
   </script>    
   <script type="text/javascript">
      /**
            * Desciption: Form đăng ký
            */
      function formRegisterCRM(form) {
            var idForm  = "#" + form;
            var urlAjax = "https://erp.langmaster.vn/api/hbr-form-data/add";
            var textBtn = $(idForm + ' .btnSuccess .btn').val();
            
            $.ajax({
               type: "POST",
               url: urlAjax,
               data: $(idForm).serialize(),
               dataType: "json",
               cache: false,
               beforeSend: function() {
                  $(idForm + ' .form-group').removeClass('has-error');
                  $(idForm + ' .alert').remove();
                  $(idForm + ' .btnSuccess .btn').val('Đang gửi thông tin...').attr('disabled', 'disabled');
                  $('body').append('<div class="page-loading"><div class="loader"></div></div>');
               },
               success: function(result){
                  if(result.error) {
                        if(result.error.form_id) {
                           $(idForm + ' .btnSuccess').append('<div class="alert alert-danger">'+ result.error.form_id +'</div>');
                        } else {
                           $.each(result.error, function(key, value) {
                              $(idForm + ' #input-'+ key).addClass('has-error');
                           })
                           $(idForm + ' .btnSuccess').append('<div class="alert alert-danger">Vui lòng điền đầy đủ các thông tin bắt buộc</div>');
                        }
                  } else {
                        $(idForm + ' .form-control').val('');
                        $(idForm + ' input').val('');
                        $('has-error').removeClass('has-error');
                        window.location.href = "//thankyou";
                        fbq('track', 'CompleteRegistration');
                  }
                  
                  $(idForm + ' .btnSuccess .btn').val(textBtn).removeAttr('disabled', 'disabled');
                  $('body .page-loading').remove();
               }
            });
      }
      
      //formRegister
      function formRegisterDefault(form) {
            var idForm  = "#" + form;
            var urlAjax = "https://erp.langmaster.vn/api/hbr-form-data/add";
            var textBtn = $(idForm + ' .btnSuccess .btn.step_1').val();
            var minlength = 9;
            var phone = $('input[name="phone"]').val();
            var number = $('input[name="number"]').val();
            var name_course = $('input[name="name_course"]').val();
            if(name_course = 'khoa-hoc-quan-tri-nhan-su-danh-cho-sep'){
               if($('.g-recaptcha-response').val() == ''){
                  $(idForm + ' .btnSuccess').prepend('<div class="alert alert-danger">Bạn chưa xác thực capcha</div>');
                  return false;
               }
            }
            if(phone == '') {
               $(idForm + ' .btnSuccess').prepend('<div class="alert alert-danger">Bạn vui lòng nhập số điện thoại</div>');
               return false;
            } else {
               if (phone.length < minlength) {
                  $(idForm + ' .btnSuccess').prepend('<div class="alert alert-danger">Số điện thoại không hợp lệ</div>');
                  return false;
               }
            }
            if(number == '0') {
               $(idForm + ' .btnSuccess').prepend('<div class="alert alert-danger">Số vé không thể bằng 0</div>');
               return false;
            }
      
            $.ajax({
               type: "POST",
               url: urlAjax,
               data: $(idForm).serialize(),
               dataType: "json",
               cache: false,
               beforeSend: function () {
                  $('.btnSuccess .panel.panel-danger').remove();
                  $(idForm + ' .form-group').removeClass('has-error');
                  $(idForm + ' .alert').remove();
                  $(idForm + ' .btnSuccess .btn.step_1').val('Đang gửi thông tin...').attr('disabled', 'disabled');
                  $('body').append('<div class="page-loading"><div class="loader"></div></div>');
               },
               success: function (result) {
                  $('.btnSuccess .panel.panel-danger').remove();
                  // var subjectLength = $('#phone-input').val().length;
                  if (result.error) {
                        if (result.error.form_id) {
                           $(idForm + ' .btnSuccess').prepend('<div class="alert alert-danger">' + result.error.form_id + '</div>');
                           // } else if(subjectLength !== 10) {
                           //     $.each(result.error, function(key, value) {
                           //         $(idForm + ' #input-'+ key).addClass('has-error');
                           //     })
                           //     $('.btnSuccess').before('<div class="panel panel-danger"><div class="panel-heading">Số điện thoại không hợp lệ</div></div>');
                        } else {
                           $.each(result.error, function (key, value) {
                              $(idForm + ' #input-' + key).addClass('has-error');
                           })
                           $(idForm + ' .btnSuccess').prepend('<div class="alert alert-danger">Vui lòng điền đầy đủ các thông tin bắt buộc</div>');
                        }
                  } else {
                        $(idForm + ' input[name="form_data_id"]').val(result.save);
                        $('.step_2').removeClass('hidden');
                        $('.step_1').addClass('hidden');
                        $('.title_2').removeClass('hidden');
                        $('.title_1').addClass('hidden');
                  }
                  if (!$(idForm + ' .btnSuccess .btn.step_1').length) {
                        if (!result.error) {
                           $(idForm + ' .btnSuccess').prepend('<div class="alert alert-success">Đăng ký thành công!</div>');
                           fbq('track', 'CompleteRegistration');
                        }
                  }
                  $(idForm + ' .btnSuccess .btn.step_1').val(textBtn).removeAttr('disabled', 'disabled');
                  $('body .page-loading').remove();
               }
            });
      }
      
      //formUpdate
      function formRegisterDefaultUpdate(form) {
            var idForm  = "#" + form;
            var urlAjax = "https://erp.langmaster.vn/api/hbr-form-data/update";
            var textBtn = $(idForm + ' .btnSuccess .btn.step_2').val();
      
            if($(idForm + ' input[name="company_name"]').val() == '') {
               $(idForm + ' #input-company_name').addClass('has-error');
               $(idForm + ' #input-company_position_id').addClass('has-error');
               $(idForm + ' #input-company_size').addClass('has-error');
               $(idForm + ' #input-company_career').addClass('has-error');
               $(idForm + ' #input-company_problem').addClass('has-error');
               $(idForm + ' .btnSuccess').prepend('<div class="alert alert-danger">Vui lòng điền đầy đủ các thông tin bắt buộc</div>');
            } else {
               $.ajax({
                  type: "POST",
                  url: urlAjax,
                  data: $(idForm).serialize(),
                  dataType: "json",
                  cache: false,
                  beforeSend: function() {
                        $(idForm + ' .form-group').removeClass('has-error');
                        $(idForm + ' .alert').remove();
                        $(idForm + ' .btnSuccess .btn.step_2').val('Đang gửi thông tin...').attr('disabled', 'disabled');
                        $('body').append('<div class="page-loading"><div class="loader"></div></div>');
                  },
                  success: function(result){
                        if(result.error) {
                           if(result.error.form_id) {
                              $(idForm + ' .btnSuccess').prepend('<div class="alert alert-danger">'+ result.error.form_id +'</div>');
                           } else {
                              $.each(result.error, function(key, value) {
                                    $(idForm + ' #input-'+ key).addClass('has-error');
                              })
                              $(idForm + ' .btnSuccess').prepend('<div class="alert alert-danger">Vui lòng điền đầy đủ các thông tin bắt buộc</div>');
                           }
                        } else {
                           $(idForm + ' .btnSuccess').prepend(
                              '<div class="alert alert-success text-center" style="background: #1d2c53; color: #fff;"><h3>Thank you!</h3><br>Cảm ơn anh/chị đã đăng ký tham gia khoá học của Trường Doanh nhân HBR.<br>Thân mời anh/chị tham khảo các khóa học sắp diễn ra:<br><a href="https://hbr.edu.vn/hbr-dao-tao-public"><img class="text-center" src="https://hbr.edu.vn/public/template/frontend/img/btnThamKhao.png"></a></div>'
                           );
      
                           $('.step_2').addClass('hidden');
                           $(idForm + ' .btnSuccess .btn.step_2').addClass('hidden');
                           
                           // window.location.href = "";
                        }
      
                        $(idForm + ' .btnSuccess .btn.step_2').val(textBtn).removeAttr('disabled', 'disabled');
                        $('body .page-loading').remove();
                  }
               });
            }
      }
   </script>     --}}
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
</body>
</html>
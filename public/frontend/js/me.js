/**
 * Desciption: Form đăng ký
 */
function formRegister(form) {
	var idForm 	= "#" + form;
	var urlAjax = "/post/form/add";
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
					$(idForm + ' .btnSuccess').prepend('<div class="alert alert-danger">'+ result.error.form_id +'</div>');
				} else {
					$.each(result.error, function(key, value) {
						$(idForm + ' #input-'+ key).addClass('has-error');
					})
					$(idForm + ' .btnSuccess').prepend('<div class="alert alert-danger">Vui lòng điền đầy đủ các thông tin bắt buộc</div>');
				}
			} else {
				$(idForm + ' .btnSuccess').prepend('<div class="alert alert-success">Cám ơn Anh/chị đã đăng kí tham gia khóa học của Trường doanh nhân HBR. HBR sẽ liên hệ với Anh/chị trong thời gian sớm nhất!</div>');
				$(idForm + ' .form-control').val('');
			}
			
			$(idForm + ' .btnSuccess .btn').val(textBtn).removeAttr('disabled', 'disabled');
			$('body .page-loading').remove();
		}
	});
}

//formRegister
function formRegisterDownloadCRM(form) {
    var idForm  = "#" + form;
    var urlAjax = "https://erp.langmaster.vn/api/hbr-form-data/add";
    var textBtn = $(idForm + ' .btnSuccess .btn.step_1').val();
        
    $.ajax({
        type: "POST",
        url: urlAjax,
        data: $(idForm).serialize(),
        dataType: "json",
        cache: false,
        beforeSend: function() {
            $(idForm + ' .form-group').removeClass('has-error');
            $(idForm + ' .alert').remove();
            $(idForm + ' .btnSuccess .btn.step_1').val('Đang gửi thông tin...').attr('disabled', 'disabled');
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
                $('#frmRegisterTuVan input[name="form_data_id"]').val(result.save);

                $('.step_2').removeClass('hidden');
                $('.step_1').addClass('hidden');
                $('.title_2').removeClass('hidden');
                $('.title_1').addClass('hidden');
            }

            $(idForm + ' .btnSuccess .btn.step_1').val(textBtn).removeAttr('disabled', 'disabled');
            $('body .page-loading').remove();
        }
    });
}

//formUpdate
function formRegisterUpdateCRM(form) {
    var idForm  = "#" + form;
    var urlAjax = "https://erp.langmaster.vn/api/hbr-form-data/add";
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
                    $(idForm + ' .container').html('<div class="alert alert-success">HBR đã nhận được thông tin của anh chị. Bộ phận tư vấn sẽ liên hệ với anh chị trong thời gian sớm nhất. Chúc anh chị một ngày làm việc hiệu quả!</div>');
                }

                $(idForm + ' .btnSuccess .btn.step_2').val(textBtn).removeAttr('disabled', 'disabled');
                $('body .page-loading').remove();
            }
        });
    }
}

/**
 * Desciption: Play video
 */
function playVideo(data) {
	$(data).html('<iframe width="560" height="315" src="https://www.youtube.com/embed/'+ $(data).attr('data-id') +'?rel=0&amp;showinfo=0&amp;autoplay=1" frameborder="0" allowfullscreen></iframe>')
}

/**
 * Desciption: Đếm số ký tự
 */
function countLeft(field, count, max) {
	if ($(field).val().length > max)
		$(field).val($(field).val().substring(0, max));
	else
		$(count + ' .value').html(max - $(field).val().length);
}

/**
 * Desciption: Hiển thị số lượng sản phẩm trong giỏ hàng
 */
function viewCart(){
	$.ajax({
		type: "POST",
		url: '/post/product/report',
		dataType: "json",
		cache: false,
		beforeSend: function() {
			 
		},
		success: function(result){
			var xhtml = '';
			if(result.total_product) {
				xhtml = '<a href="/post/product/cart" class="box_reportCart"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="total">'+ result.total_product +'</span></a>';
				$('body').append(xhtml);
			}
		}
	});
}

/**
 * Desciption: Hiển thị số lượng sản phẩm trong giỏ hàng
 */
function viewCourseCart(){
	$.ajax({
		type: "POST",
		url: '/post/online/report',
		dataType: "json",
		cache: false,
		beforeSend: function() {
			 
		},
		success: function(result){
			$('.cart_total').text(result.total_amount);
			var xhtml = '';
			if(result.total_product) {
				xhtml = '<a href="/post/online/course-cart" class="box_reportCart"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="total">'+ result.total_product +'</span></a>';
				$('body').append(xhtml);
			}
		}
	});
}

/**
 * Desciption: Tìm kiếm
 */
function popupSearch(){
	var xhtml = '<div class="popup_search">'+ 
			        '<div class="popup_wrapper">'+ 
					    '<div class="popup_content">'+ 
					        '<form action="/search">'+ 
					            '<div class="form-group">'+ 
					                '<div class="input-group">'+ 
					                    '<input name="keyword" type="text" class="form-control" placeholder="Tìm kiếm" value="">'+ 
					                    '<div class="input-group-addon"><button type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button></div>'+ 
					                '</div>'+ 
					            '</div>'+ 
					        '</form>'+ 
					    '</div>'+ 
					    '<a href="javascript:;" class="popup_close" onclick="popupSearchClose()">Close <i class="fa fa-close" aria-hidden="true"></i></a>'+ 
					'</div>'+ 
				'</div>';
	
	$('.popup_search').remove();
	$('body').append(xhtml);
}

function popupSearchClose() {
	$('.popup_search').remove();
}

/**
 * Desciption: Nạp tất cả các function cần khởi tạo khi chạy ứng dụng
 */
$(document).ready(function() {
	viewCart();
	
	$('button.btn_submit').click(function() {
		$('body').append('<div class="page-loading"><div class="loader"></div></div>');
	});
	$('button.btn_download').click(function() {
		$(this).val('Vui lòng đợi...');
	});
});

// Menu go box
$('.go_box').click(function() {
    var box = $(this).attr('data-box');
    if($('#' + box).length) {
        var top_scroll = 0;
        top_scroll = $("#" + box).offset().top;
        $('html,body').animate({
            scrollTop: top_scroll - 60
        }, 'slow');
    }
    $('.box_header .menu.mobile').addClass('hidden-xs hidden-sm');
    $('.go_box').removeClass('active');
    $(this).addClass('active');
    $('.menu_mobile_bg').remove();
});

$(document).ready(function(e){
	setTimeout(function() {
	  	if($("#app-box-header").length){
			var app_box_height = $("#app-box-header").outerHeight(true);
			$('body').css('padding-top', app_box_height);
			$("#app-box-header").css({
				'transform': 'translateY(0)',
				'-o-transform': 'translateY(0)',
				'-ms-transform': 'translateY(0)',
				'-moz-transform': 'translateY(0)',
				'-webkit-transform': 'translateY(0)'
			});

			$('.close-app-box').click(function(e){
				e.preventDefault();
				$(this).parents('.app-box-header').css({
					'transform': 'translateY(-100%)',
					'-o-transform': 'translateY(-100%)',
					'-ms-transform': 'translateY(-100%)',
					'-moz-transform': 'translateY(-100%)',
					'-webkit-transform': 'translateY(-100%)'
				});
				$('body').css('padding-top', 0);
			});
		}
	}, 1000);
});
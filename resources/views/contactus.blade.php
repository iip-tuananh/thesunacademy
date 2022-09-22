@extends('layouts.main.master')
@section('title')
Liên hệ
@endsection
@section('description')
Liên hệ với chúng tôi
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<div class="box_banner">
	<div class="container">
	<div class="box_breadcrumb">
	<ul class="breadcrumb">
		<li><a href="{{route('home')}}">Trang chủ</a></li>
		<li><a href="#" title="Liên hệ">Liên hệ</a></li>
	</ul>
	</div>
	</div>
</div>
<main id="main" class="">
	<div id="content" role="main" class="content-area">
	<section class="section" id="section_824213487">
		<div class="bg section-bg fill bg-fill  bg-loaded" >
		</div>
		<div class="section-content relative">
			<p>
				{!!$setting->iframe_map!!}
			</p>
		</div>
	</section>
	</div>
</main>
<div class="main-content">
	<div class="container">
		<div class="row">
			<div class="col-md-6 contact-us">
				<h2 class="title title-font">Thông tin liên hệ</h2>
				<p><strong style="font-size: 20px;">{{$setting->company}}</strong></p>
				<ul>
					<li><strong>Địa chỉ:</strong> {{$setting->address1}}</li>
					@if ($setting->address2)
					<li><strong>Địa chỉ 2:</strong> {{$setting->address2}}</li>
					@endif
					<li><strong>Hotline:</strong> {{$setting->phone1}}</li>
					@if ($setting->phone2)
					<li><strong>Điện thoại (Tel):</strong> {{$setting->phone2}}</li>
					@endif
					<li><strong>Email:</strong> {{$setting->email}}</li>
				</ul>
			</div>
			<div class="col-md-6 contact-us">
				<h2 class="title title-font">Gửi thông tin liên hệ</h2>
				<form action="{{route('postcontact')}}" id="frmRegister" name="frmRegister" method="POST" class="">
                    @csrf
                    <div class="form" id="box_dangKy">
                    <div class="row">
                        <div class="box_content">
                            <div class="step_1">
                                <div class="col-md-12">
                                <div class="form-group" id="input-name">
                                    <input name="name" type="text" class="form-control" placeholder="Họ và tên">
                                </div>
                                </div>
                                <div class="col-md-12">
                                <div class="form-group" id="input-phone">
                                    <input name="phone" id="phone-input" type="text" class="form-control" placeholder="Điện thoại">
                                </div>
                                </div>
                                <div class="col-md-12">
                                <div class="form-group" id="input-email">
                                    <input name="email" type="text" class="form-control" placeholder="Email">
                                </div>
                                </div>
                                <div class="col-sm-12">
                                <div class="form-group" id="input-number">
                                    <textarea name="mess" id="" cols="30" class="form-control" rows="1" placeholder="Nội dung liên hệ"></textarea>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="btnSuccess">
                                <input type="submit" class="input-lg btn-contact-form" value="Gửi liên hệ">
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </form>
			</div>
		</div>
	</div>
</div>
@endsection
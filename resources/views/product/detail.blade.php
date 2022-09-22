@extends('layouts.main.master')
@section('title')
{{languageName($product->name)}}
@endsection
@section('description')
@endsection
@section('image')
@php
$imgs = json_decode($product->images);
$avatars = json_decode($product->avatar);
$priceDiscount = $product->price - $product->price * ($product->discount / 100);
@endphp
{{url(''.$imgs[0])}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<div class="box_bxslider" id="box_bxslider_pc">
    <div class="box_content" style="height: 100%">
        <ul class="bxslider">
                @foreach ($imgs as $img)
                    <li><a class="item" href="#" target="_self"><img src="{{$img}}" alt="" loading="lazy"></a></li>
                @endforeach
        </ul>
    </div>
</div>
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <img src="{{url('frontend/images/title.png')}}" alt="" loading="lazy">
                <div class="box-image-detail-pro">
                    <div class="owl-carousel owl-theme">
                        @foreach ($avatars as $avatar)
                        <div class="item">
                            <a data-fancybox="gallery" data-src="{{$avatar}}">
                                <img src="{{$avatar}}" alt="" loading="lazy" data-fancybox="gallery" style="height: 400px;">
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-5 form-detail-pro">
                <form action="{{route('postcontact')}}" id="frmRegister" name="frmRegister" method="POST" class="">
                    @csrf
                    <div class="form" id="box_dangKy">
                    <div class="row">
                        <div class="box_content">
                            <div class="col-md-12">
                                <h3 class="title">ĐĂNG KÍ KHÓA HỌC</h3>
                            </div>
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
                                    <textarea name="mess" id="" cols="30" class="form-control" rows="1" placeholder="Nội dung đăng ký"></textarea>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="btnSuccess">
                                <input type="submit" class="input-lg btn-blue step_1" value="Đăng ký ngay">
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row detail-pro-content">
            <div class="col-md-12 text-center">
                <h1 class="title font-title text-uppercase">Nội dung khóa học</h1>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-9">
                        {!!languageName($product->content)!!}
                    </div>
                    <div class="col-md-3">
                        <div class="box_page">
                            <div class="fb-page" data-href="{{$setting->facebook}}" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
                        </div>
                        @foreach ($bannerAds as $item)
                        <div class="box_adsRight" id="box_adsRight">
                            <a href="{{$item->name}}" title="" target="_self"><img src="{{$item->image}}" alt="banner-ads" loading="lazy"></a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="box_vande" id="box_vande">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="bx-title">
                <img src="{{url('frontend/images/imgtitle.png')}}" alt="" loading="lazy" style="width: 165px;">
                <h3>
                LÝ DO KHIẾN 
                <p class="red-title">ĐÀO TẠO LÀ <br class="hidden-md">"QUỐC SÁCH" HÀNG ĐẦU</p>
                CỦA DOANH NGHIỆP
                </h3>
            </div>
        </div>
        <div class="box-container">
            <div class="col-md-4 col-sm-6">
                <div class="box-item">
                <img src="{{url('frontend/images/10.png')}}" alt="" loading="lazy">
                <p><b>Hiệu suất làm việc kém</b>, giảm dần theo thời gian do không được đào tạo và phát
                    triển liên tục
                </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="box-item">
                <img src="{{url('frontend/images/11.png')}}" alt="" loading="lazy">
                <p>Sếp có nhiều ý tưởng nhưng <b>không có nhân tài thực thi</b></p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="box-item">
                <img src="{{url('frontend/images/12.png')}}" alt="" loading="lazy">
                <p>Người tài “dứt áo” ra đi do <b>không thấy được cơ hội thăng tiến và lộ trình phát
                    triển</b> sự nghiệp
                </p>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="col-md-4 col-sm-6">
                <div class="box-item">
                <img src="{{url('frontend/images/14.png')}}" alt="" loading="lazy">
                <p>Doanh nghiệp luôn trong tình trạng <b>thiếu người để vận hành</b> và mở rộng hệ thống
                    kinh doanh
                </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="box-item">
                <img src="{{url('frontend/images/15.png')}}" alt="" loading="lazy">
                <p><b>Đào tạo sai</b> nhưng vẫn chưa tìm ra được nguyên nhân và giải pháp cụ thể</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="box-item">
                <img src="{{url('frontend/images/16.png')}}" alt="" loading="lazy">
                <p>Nhân viên <b>thiếu gắn kết</b> với lãnh đạo, <b>tỷ lệ nghỉ việc cao</b>. Đặc biệt là các
                    vị trí chủ chốt trong doanh nghiệp
                </p>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<div class="box_newsHome">
    <div class="container">
        <div class="box_content clearfix">
        <div class="row">
                @foreach ($blogCate as $key=>$cate)
                    @if ($key == 0)
                            <div class="col-xs-12 col-sm-6">
                                <div class="box_defaultCategoryLeft">
                                        <div class="box_title">
                                        <h2 class="title font-title"><a href="{{route('listCateBlog', ['slug'=>$cate->slug])}}" title="{{languageName($cate->name)}}">{{languageName($cate->name)}}</a></h2>
                                        </div>
                                        <div class="box_content">
                                            @foreach ($cate->listBlog as $key=>$blog)
                                                    @if ($key == 0)
                                                    <div class="item_first clearfix">
                                                    <div class="image"><a href="{{route('detailBlog', ['slug'=>$blog->slug])}}"><img src="{{$blog->image}}" alt="{{languageName($blog->title)}}" loading="lazy"></a></div>
                                                    <div class="info">
                                                        <h3 class="title"><a href="{{route('detailBlog', ['slug'=>$blog->slug])}}">{{languageName($blog->title)}}</a></h3>
                                                        <div class="category"><a href="{{route('listCateBlog', ['slug'=>$cate->slug])}}" title="{{languageName($cate->name)}}">{{languageName($cate->name)}}</a> - <span class="date">{{date_format($blog->created_at, 'd/m/Y')}}</span></div>
                                                        <div class="desc">{{languageName($blog->description)}}</div>
                                                    </div>
                                                    </div>
                                                    @else
                                                    <h3 class="item"><a href="{{route('detailBlog', ['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}">{{languageName($blog->title)}}</a></h3>
                                                    @endif
                                            @endforeach
                                        </div>
                                </div>
                            </div>
                    @else
                            <div class="col-xs-12 col-sm-6">
                                <div class="box_defaultCategoryRight">
                                        <div class="box_title">
                                        <h2 class="title font-title"><a href="{{route('listCateBlog', ['slug'=>$cate->slug])}}" title="{{languageName($cate->name)}}">{{languageName($cate->name)}}</a></h2>
                                        </div>
                                        <div class="box_content">
                                        <div class="row">
                                            @foreach ($cate->listBlog as $blog)
                                            <div class="col-sm-6">
                                                    <div class="item">
                                                        <div class="image">
                                                        <a href="{{route('detailBlog', ['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}"><img src="{{$blog->image}}" alt="{{languageName($blog->title)}}" loading="lazy"></a>
                                                        </div>
                                                        <div class="info">
                                                        <h3 class="title"><a href="{{route('listCateBlog', ['slug'=>$cate->slug])}}" title="{{languageName($cate->name)}}">{{languageName($cate->name)}}</a> - <span class="date">{{date_format($blog->created_at, 'd/m/Y')}}</span></h3>
                                                        <div class="desc">{{languageName($blog->description)}}</div>
                                                        </div>
                                                    </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        </div>
                                </div>
                            </div>
                    @endif
                @endforeach
        </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.main.master')
@section('title')
{{($detail_service->name)}}
@endsection
@section('description')
{{($detail_service->description)}}
@endsection
@section('image')
{{url(''.$detail_service->image)}}
@php
$imgs = json_decode($detail_service->image);
$avatars = json_decode($detail_service->avatar);
@endphp
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
<div class="container-service-content">
    <div class="main-content">
        <div class="container ">
            <div class="row">
                <div class="col-md-7">
                    {{-- <img src="{{url('frontend/images/title.png')}}" alt="" loading="lazy"> --}}
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
                <div class="col-md-5 form-detail-service">
                    <form action="{{route('postcontact')}}" id="frmRegister" name="frmRegister" method="POST" class="">
                        @csrf
                        <div class="form" id="box_dangKy">
                        <div class="row">
                            <div class="box_content">
                                <div class="col-md-12">
                                    <h3 class="title">ĐĂNG KÍ THAM GIA HỘI THẢO</h3>
                                </div>
                                <div class="step_1">
                                    <div class="col-md-12">
                                    <div class="form-group input-group" id="input-name">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input name="name" type="text" class="form-control" placeholder="Họ và tên">
                                    </div>
                                    </div>
                                    <div class="col-md-12">
                                    <div class="form-group input-group" id="input-phone">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input name="phone" id="phone-input" type="text" class="form-control" placeholder="Điện thoại">
                                    </div>
                                    </div>
                                    <div class="col-md-12">
                                    <div class="form-group input-group" id="input-email">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input name="email" type="text" class="form-control" placeholder="Email">
                                    </div>
                                    </div>
                                    <div class="col-sm-12">
                                    <div class="form-group input-group" id="input-number">
                                        <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                                        <input name="number" type="number" class="form-control" min="1" placeholder="Số vé">
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="btnSuccess">
                                    <div class="stepone">
                                        <input type="submit" class="input-lg btn-blue step_1" value="Đăng ký ngay">
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="box_loiIch" id="box_loiIch">
                <div class="box_content">
                    <h3 class="title">LỢI ÍCH KHOÁ HỘI THẢO</h3>
                    <div class="col-sm-3 col-xs-6">
                        <div class="item">
                            <div class="img"><img alt="" src="{{url('frontend/images/icon-15.png')}}" loading="lazy"> </div>
                            <div class="text">Nắm bắt những xu thế &amp; kiến thức nền tảng trong việc xây dựng bộ máy tuyển dụng hiện đại từ đó tạo ra lợi thế cạnh tranh bền vững cho doanh nghiệp.</div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="item">
                            <div class="img"><img alt="" src="{{url('frontend/images/icon-16.png')}}"> </div>
                            <div class="text">Xây dựng các đề xuất giá trị nhân sự mới &amp; hệ thống marketing tuyển dụng hiện đại để thu hút nhân tài.</div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="item">
                            <div class="img"><img alt="" src="{{url('frontend/images/icon-17.png')}}"> </div>
                            <div class="text">Rèn luyện kỹ năng phỏng vấn &amp; đánh giá ứng viên để tránh những quyết định sai lầm trong tuyển dụng gây lãng phí tiền bạc, thời gian &amp; chi phí cơ hội của doanh nghiệp.</div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="item">
                            <div class="img"><img alt="" src="{{url('frontend/images/icon-18.png')}}"> </div>
                            <div class="text">Thực hành các case study thực tế &amp; hỏi đáp những vấn đề nhân sự nổi cộm gắn liền với các doanh nghiệp Việt Nam.</div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<section class="box_vande" id="box_vande">
    <div class="container">
        <div class="row detail-pro-content">
            <div class="col-md-12 text-center">
                <h1 class="title font-title text-uppercase">Nội dung hội thảo</h1>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-9">
                        {!!languageName($detail_service->content)!!}
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
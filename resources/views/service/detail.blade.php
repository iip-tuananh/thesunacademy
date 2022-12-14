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
                                    <h3 class="title">????NG K?? THAM GIA H???I TH???O</h3>
                                </div>
                                <div class="step_1">
                                    <div class="col-md-12">
                                    <div class="form-group input-group" id="input-name">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input name="name" type="text" class="form-control" placeholder="H??? v?? t??n">
                                    </div>
                                    </div>
                                    <div class="col-md-12">
                                    <div class="form-group input-group" id="input-phone">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input name="phone" id="phone-input" type="text" class="form-control" placeholder="??i???n tho???i">
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
                                        <input name="number" type="number" class="form-control" min="1" placeholder="S??? v??">
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="btnSuccess">
                                    <div class="stepone">
                                        <input type="submit" class="input-lg btn-blue step_1" value="????ng k?? ngay">
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
                    <h3 class="title">L???I ??CH KHO?? H???I TH???O</h3>
                    <div class="col-sm-3 col-xs-6">
                        <div class="item">
                            <div class="img"><img alt="" src="{{url('frontend/images/icon-15.png')}}" loading="lazy"> </div>
                            <div class="text">N???m b???t nh???ng xu th??? &amp; ki???n th???c n???n t???ng trong vi???c x??y d???ng b??? m??y tuy???n d???ng hi???n ?????i t??? ???? t???o ra l???i th??? c???nh tranh b???n v???ng cho doanh nghi???p.</div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="item">
                            <div class="img"><img alt="" src="{{url('frontend/images/icon-16.png')}}"> </div>
                            <div class="text">X??y d???ng c??c ????? xu???t gi?? tr??? nh??n s??? m???i &amp; h??? th???ng marketing tuy???n d???ng hi???n ?????i ????? thu h??t nh??n t??i.</div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="item">
                            <div class="img"><img alt="" src="{{url('frontend/images/icon-17.png')}}"> </div>
                            <div class="text">R??n luy???n k??? n??ng ph???ng v???n &amp; ????nh gi?? ???ng vi??n ????? tr??nh nh???ng quy???t ?????nh sai l???m trong tuy???n d???ng g??y l??ng ph?? ti???n b???c, th???i gian &amp; chi ph?? c?? h???i c???a doanh nghi???p.</div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="item">
                            <div class="img"><img alt="" src="{{url('frontend/images/icon-18.png')}}"> </div>
                            <div class="text">Th???c h??nh c??c case study th???c t??? &amp; h???i ????p nh???ng v???n ????? nh??n s??? n???i c???m g???n li???n v???i c??c doanh nghi???p Vi???t Nam.</div>
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
                <h1 class="title font-title text-uppercase">N???i dung h???i th???o</h1>
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
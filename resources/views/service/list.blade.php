@extends('layouts.main.master')
@section('title')
{{$title_page}} 
@endsection
@section('description')
{{$title_page}}
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
@endsection
@section('css')
@endsection
@section('content')
<div class="box_banner">
    <div class="container">
    <div class="box_breadcrumb">
        <ul class="breadcrumb">
            <li><a href="{{route('home')}}">Trang chủ</a></li>
            <li><a href="#" title="{{$title_page}}">{{$title_page}}</a></li>
        </ul>
    </div>
    </div>
</div>
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="box_module padding">
                <div class="box_content">
                    <div class="layout_category_default">
                        @foreach ($services as $service)
                        @if (strtotime(now()) < strtotime($service->date_start))
                        @php
                            $avatars = json_decode($service->avatar)
                        @endphp
                            <div class="item clearfix">
                                <div class="row">
                                    <div class="col-md-5 col-sm-6">
                                            <div class="image"><a href="{{route('serviceDetail', ['slug'=>$service->slug])}}" title="{{$service->name}}"><img src="{{$avatars[0]}}" alt="{{$service->name}}" loading="lazy" style="height: 180px;"></a></div>
                                    </div>
                                    <div class="col-md-7 col-sm-6">
                                            <div class="info">
                                                <h3 class="title font-title"><a href="{{route('serviceDetail', ['slug'=>$service->slug])}}" title="{{$service->name}}" target="_self">{{$service->name}}</a></h3>
                                                <div class="desc"></div>
                                                <div class="speakers"><span>Chuyên gia: </span>{{$service->sku}}</div>
                                                <div class="location">
                                                        <span class="text"><i class="fa fa-bell" aria-hidden="true"></i> {{date('d/m/Y', strtotime($service->date_start))}}</span><span class="text"><i class="fa fa-paper-plane" aria-hidden="true"></i> {{$service->address}} </span>                    
                                                </div>
                                                <div class="desc">
                                                    {!!languageName($service->description)!!}
                                                </div>
                                                <div class="view">
                                                        <a href="{{route('serviceDetail', ['slug'=>$service->slug])}}" title="Xem chi tiết">Xem chi tiết</a>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="box_pagination">
                            {{$services->links()}}          
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="box_page">
                <div class="fb-page" data-href="{{$setting->facebook}}" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
                </div>
                <div class="box_adsRight" id="box_adsRight">
                @foreach ($bannerAds as $item)
                <a href="{{$item->name}}" title="" target="_self"><img src="{{$item->image}}" alt="" loading="lazy"></a>
                @endforeach
                </div>
            </div>
        </div>
    
    </div>
</div>
@endsection
@extends('layouts.main.master')
@section('title')
Giới thiệu
@endsection
@section('description')
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
         <li><a href="#" title="Giới thiệu">Giới thiệu</a></li>
      </ul>
   </div>
   </div>
</div>
<div class="main-content">
   <div class="container">
      <div class="row">
         <div class="col-sm-9">
            <div class="box_module detail padding">
               <div class="box_title">
                  <h1 class="title">{{$setting->company}}</h1>
               </div>
               <div class="box_content">
                  <div class="layout_item_default">
                     {!!$pageContent->content!!}
                  </div>
               </div>
            </div>
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
<div class="box_noiDung" id="box_noiDung">
   <div class="right">
      <div class="box_content">
         <img src="{{$pageContent->image}}" alt="" loading="lazy">
      </div>
   </div>
   <div class="left">
      @if ($pageContent->tamnhin)
         <div class="item">
            <div class="key key_1 key_2"><img alt="" src="{{url('frontend/images/icon-2.png')}}"></div>
            <div class="value text-center title">TẦM NHÌN </div>
         </div>
         <div class="item">
            <div class="key key_1"></div>
            <div class="value value_2">
               {!!$pageContent->tamnhin!!}
            </div>
         </div>
      @endif
      @if ($pageContent->sumenh)
         <div class="item">
            <div class="key"><img alt="" src="{{url('frontend/images/icon-3.png')}}"></div>
            <div class="value value_1 text-center title">XỨ MỆNH</div>
         </div>
         <div class="item">
            <div class="key key_1"></div>
            <div class="value value_2">
               {!!$pageContent->sumenh!!}
            </div>
         </div>
      @endif
      @if ($pageContent->trietly)
         <div class="item">
            <div class="key"><img alt="" src="{{url('frontend/images/icon-5.png')}}"></div>
            <div class="value text-center title">TRIẾT LÝ</div>
         </div>
         <div class="item">
            <div class="key key_1"></div>
            <div class="value value_2">
               {!!$pageContent->trietly!!}
            </div>
         </div>
      @endif
      {{-- <div class="item">
         <div class="key"><img alt="" src="{{url('frontend/images/icon-6.png')}}"></div>
         <div class="value value_1">Buổi 4: THẤU HIỂU &amp; THỰC HÀNH CÁC MÔ HÌNH RA QUYẾT ĐỊNH CHIẾN LƯỢC TRONG KỶ NGUYÊN 4.0</div>
      </div>
      <div class="item">
         <div class="key key_1"></div>
         <div class="value value_2">
            <p> - Thấu hiểu các mô hình ra quyết định chiến lược</p>
            <p> - Phân tích &amp; thực hành các case studies chiến lược thực tế.</p>
            <p> - Ứng dụng công nghệ để xây dựng hệ thống &amp; mô hình kinh doanh online trong kỷ nguyên số.</p>
            <p> - Đồng bộ hệ thống &amp; mô hình kinh doanh online.</p>
            <p> - Giải đáp các vấn đề thực tế của doanh nghiệp.</p>
         </div>
      </div> --}}
   </div>
</div>
@endsection
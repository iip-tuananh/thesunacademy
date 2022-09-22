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
@section('js')
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
      <div class="wrapper">
         <div class="row">
            <div class="col-sm-9">
               <div class="box_module padding">
                  <div class="box_content">
                     <div class="layout_category_default">
                        @foreach ($blogs as $blog)
                           <div class="item clearfix">
                              <div class="image"><a href="{{route('detailBlog', ['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}"><img src="{{$blog->image}}" alt="{{languageName($blog->title)}}" loading="lazy"></a></div>
                              <div class="info">
                                 <h2 class="title"><a href="{{route('detailBlog', ['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}">{{languageName($blog->title)}}</a></h2>
                                 <div class="category"><a href="{{route('listCateBlog', ['slug'=>$blog->category])}}" title="{{languageName($blog->cate->name)}}">{{languageName($blog->cate->name)}}</a>/ <span class="date">{{date_format($blog->created_at, 'd/m/Y')}}</span></div>
                                 <div class="description hidden-xs">
                                    {{languageName($blog->description)}}
                                 </div>
                              </div>
                           </div>
                        @endforeach
                     </div>
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="box_pagination">
                              {{$blogs->links()}}          
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
</div>
@endsection
@extends('layouts.main.master')
@section('title')
{{languageName($blog_detail->title)}}
@endsection
@section('description')
{{languageName($blog_detail->description)}}
@endsection
@section('image')
{{url(''.$blog_detail->image)}}
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
			<li><a href="{{route('listCateBlog', ['slug'=>$blog_detail->category])}}" title="{{languageName($blog_detail->cate->name)}}">{{languageName($blog_detail->cate->name)}}</a></li>
			<li><a href="#" title="{{languageName($blog_detail->title)}}">{{languageName($blog_detail->title)}}</a></li>
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
					<div class="box_title">
					<h1 class="title"><a href="#"
						title="{{languageName($blog_detail->title)}}">{{languageName($blog_detail->title)}}</a></h1>
					</div>
					<div class="box_content">
					<div class="layout_item_default">
						<div class="created_by clearfix">
							<div class="info">
								<div class="time">Bài đăng, {{date_format($blog_detail->created_at, 'd/m/Y')}}</div>
							</div>
						</div>
						<div style="padding: 10px 0; margin-bottom: 20px; border-top: 1px solid #EEE; border-bottom: 1px solid #EEE;">
							<div class="fb-like" data-layout="button_count" data-action="like" data-size="small"
								data-show-faces="false" data-share="true"></div>
						</div>
						<div class="layout_item_default_content">
							<div class="box_share" id="box_share">
								<a href="https://www.facebook.com/sharer/sharer.php?u={{route('detailBlog', ['slug'=>$blog_detail->slug])}}"
								target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a href="https://twitter.com/home?status={{route('detailBlog', ['slug'=>$blog_detail->slug])}}" target="_blank"><i
								class="fa fa-twitter" aria-hidden="true"></i></a>
								<a href="https://plus.google.com/share?url={{route('detailBlog', ['slug'=>$blog_detail->slug])}}" target="_blank"><i
								class="fa fa-google-plus" aria-hidden="true"></i></a>
							</div>
							{!!languageName($blog_detail->content)!!}
						</div>
					</div>
					</div>
				</div>
				<div class="box_involves">
					<div class="box_title">
					<div class="title">Bài viết cùng chuyên mục</div>
					</div>
					<div class="box_content">
					<div class="layout_category_default">
						@foreach ($blogs as $blog)
							@if ($blog->id != $blog_detail->id)
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
							@endif
						@endforeach
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
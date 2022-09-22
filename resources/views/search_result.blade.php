@extends('layouts.main.master')
@section('title')
Result Search
@endsection
@section('description')
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
@endsection
@section('content')
<div class="shop-page-title category-page-title page-title ">
	<div class="page-title-inner flex-row  medium-flex-wrap container">
	<div class="flex-col flex-grow medium-text-center">
		<div class="is-medium">
			<nav class="woocommerce-breadcrumb breadcrumbs uppercase"><a href="{{route('home')}}">Home</a> <span class="divider">&#47;</span> Found {{$countproduct}} products</nav>
		</div>
		<div class="category-filtering category-filter-row show-for-medium">
			<a href="#" data-open="#shop-sidebar" data-visible-after="true" data-pos="left" class="filter-button uppercase plain">
			<i class="icon-equalizer"></i>
			<strong>Filter</strong>
			</a>
			<div class="inline-block">
			</div>
		</div>
	</div>
	</div>
</div>
<main id="main" class="">
	<div class="row category-page-row">
	<div class="col large-3 hide-for-medium ">
		<div id="shop-sidebar" class="sidebar-inner col-inner">
			<aside id="woocommerce_product_categories-13" class="widget woocommerce widget_product_categories">
				<span class="widget-title shop-sidebar">Browse</span>
				<div class="is-divider small"></div>
				<ul class="product-categories">
				@foreach ($typeProduct as $type)
					<li class="cat-item cat-item-160 current-cat"><a href="{{route('allListProType', ['cate'=>$type->cate_slug, 'type'=>$type->slug])}}">{{languageName($type->name)}}</a></li>
				@endforeach
				</ul>
			</aside>
			<aside id="woocommerce_price_filter-9" class="widget woocommerce widget_price_filter">
				<span class="widget-title shop-sidebar">Filter by price</span>
				<div class="is-divider small"></div>
				<form method="get" action="https://momilash.com/volume-eyelash-extensions/">
				<div class="price_slider_wrapper">
					<div class="price_slider" style="display:none;"></div>
					<div class="price_slider_amount" data-step="10">
						<input type="text" id="min_price" name="min_price" value="0" data-min="0" placeholder="Min price" />
						<input type="text" id="max_price" name="max_price" value="20" data-max="20" placeholder="Max price" />
						<button type="submit" class="button">Filter</button>
						<div class="price_label" style="display:none;">
							Price: <span class="from"></span> &mdash; <span class="to"></span>
						</div>
						<input type="hidden" name="orderby" value="menu_order" />			
						<div class="clear"></div>
					</div>
				</div>
				</form>
			</aside>
		</div>
	</div>
	<div class="col large-9">
		<div class="shop-container">
			<div class="woocommerce-notices-wrapper"></div>
			<div class="products row row-small large-columns-4 medium-columns-3 small-columns-2 equalize-box">
				@foreach ($resultPro as $product)
				@include('layouts.product.item', ['product'=>$product])
				@endforeach
			</div>
			<!-- row -->
		</div>
		<!-- shop container -->		
	</div>
	</div>
</main>
@endsection
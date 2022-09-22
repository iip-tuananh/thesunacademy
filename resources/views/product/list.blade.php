@extends('layouts.main.master')
@section('title')
{{$title}}
@endsection
@section('description')
Danh sách {{$title}}
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('js')
@endsection
@section('css')
@endsection
@section('content')
<div class="box_banner">
   <div class="container">
   <div class="box_breadcrumb">
      <ul class="breadcrumb">
         <li><a href="{{route('home')}}">Trang chủ</a></li>
         <li><a href="#" title="{{$title}}">{{$title}}</a></li>
      </ul>
   </div>
   </div>
</div>
<div class="main-content">
   <div class="container">
      <div class="wrapper">
         <div class="box_module">
            <div class="box_content">
               <div class="layout_category_course">
                  <div class="row">
                     @foreach ($list as $product)
                        @include('layouts.product.item', ['product'=>$product])
                     @endforeach
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="box_pagination">
                        {{$list->links()}}           
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
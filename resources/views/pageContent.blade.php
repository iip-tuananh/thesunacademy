@extends('layouts.main.master')
@section('title')
{{$pagecontentdetail->title}}
@endsection
@section('description')
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main id="main" class="">
   <div id="content" class="content-area page-wrapper" role="main">
      <div class="row row-main">
         <div class="large-12 col">
            <div class="col-inner">
               <div id="ftwp-postcontent">
                  {!!$pagecontentdetail->content!!}
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
@endsection
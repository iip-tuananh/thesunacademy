
@php
$imgs = json_decode($product['images']);
$avatars = json_decode($product['avatar']);
$discountPrice = $product['price'] - $product['price'] * ($product['discount'] / 100);
@endphp
<div class="col-sm-4">
      <div class="item clearfix">
            <div class="image"><a href="{{route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" title="{{languageName($product->name)}}"><img src="{{$avatars[0]}}" alt="{{languageName($product->name)}}" loading="lazy"></a></div>
            <div class="info">
            <h2 class="title"><a href="{{route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" title="{{languageName($product->name)}}">{{languageName($product->name)}}</a></h2>
            <div class="speakers"><strong>Chuyên gia: </strong>{{$product->sku}}</div>
            <div class="location"><i class="fa fa-bell" aria-hidden="true"></i> <span class="date">{{date('d/m/Y', strtotime($product->date_start))}}</span><span class="address"> | {{$product->address}} </span><br></div>
            <div class="desc">
                  {!!languageName($product->description)!!}
            </div>
            </div>
            {{-- <span class="status green">Sắp diễn ra</span> --}}
      </div>
</div>


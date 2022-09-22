@extends('layouts.main.master')
@section('title')
Shopping Cart
@endsection
@section('description')
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
@endsection
@section('css')
@endsection
@section('js')
<script>
   function btnMinusDes(e) {
	var id = e;
	var result = document.getElementById('qtyItem'+id); var qty = result.value; if( !isNaN( qty ) && qty > 1 ) result.value--;
	var url = $('.shop_table').data('url');
	let quantityPc = result.value;
	$.ajax({
		type: 'get',
		url :url,
		data: {id:id, quantity:quantityPc},
		success: function(data) {
			let cart = data;
			let html = '';
			let totalPrice = 0;
			$.each(cart , function (index, value){
				totalPrice += (value.price - value.price * (value.discount / 100)) * value.quantity;
			})
			$('#totalPrice-'+id).html(totalPrice);
		}
	})
}
function btnPlusDes(e) {
	var id = e;
	var result = document.getElementById('qtyItem'+id); var qty = result.value; if( !isNaN( qty )) result.value++;
	var url = $('.shop_table').data('url');
	let quantityPc = result.value;
	$.ajax({
		type: 'get',
		url :url,
		data: {id:id, quantity:quantityPc},
		success: function(data) {
			let cart = data;
			let html = '';
			let totalPrice = 0;
			$.each(cart , function (index, value){
				totalPrice += (value.price - value.price * (value.discount / 100)) * value.quantity;
			})
			$('#totalPrice-'+id).html(totalPrice);
		}
	})
}
</script>
@endsection
@section('content')
<main id="main" class="">
   <div class="checkout-page-title page-title">
      <div class="page-title-inner flex-row medium-flex-wrap container">
         <div class="flex-col flex-grow medium-text-center">
            <nav class="breadcrumbs flex-row flex-row-center heading-font checkout-breadcrumbs text-center strong h2 uppercase">
               <a href="{{route('listCart')}}" class="current">
               Shopping Cart </a>
            </nav>
         </div>
      </div>
   </div>
   <div class="cart-container container page-wrapper page-checkout">
      <div class="woocommerce">
         <div class="woocommerce-notices-wrapper"></div>
         <div class="woocommerce row row-large row-divided">
            <div class="col large-12 pb-0 ">
               <form class="woocommerce-cart-form" action="" method="post">
                  <div class="cart-wrapper sm-touch-scroll cart-item" data-url="{{route('removeCart')}}">
                     <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0" data-url="{{route('updateCart')}}">
                        <thead>
                           <tr>
                              <th class="product-name" colspan="3">Product</th>
                              <th class="product-price">Price</th>
                              <th class="product-quantity">Quantity</th>
                              <th class="product-subtotal">Subtotal</th>
                           </tr>
                        </thead>
                        <tbody class="cart_list_shopping_cart">
                           @php
                              $totalPrice = 0;
                           @endphp
                           @foreach ($cart as $item)
                           @php
                              $discountPrice = $item['price'] - $item['price'] * ($item['discount'] / 100);
                              $totalPrice += $discountPrice * $item['quantity'];
                           @endphp
                           <tr class="woocommerce-cart-form__cart-item cart_item">
                              <td class="product-remove">
                                 <a href="javascript:void(0);" class="remove" aria-label="Remove this item" onclick="removeItem({{$item['id']}})">&times;</a>						
                              </td>
                              <td class="product-thumbnail">
                                 <a href="#"><img width="300" height="300" src="{{$item['image']}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wvs-attachment-image" alt="{{languageName($item['name'])}}" loading="lazy" srcset="{{$item['image']}} 300w, {{$item['image']}} 400w, {{$item['image']}} 799w, {{$item['image']}} 280w, {{$item['image']}} 768w, {{$item['image']}} 600w, {{$item['image']}} 100w, {{$item['image']}} 1279w" sizes="(max-width: 300px) 100vw, 300px" /></a>						
                              </td>
                              <td class="product-name" data-title="Product">
                                 <a href="#">{{languageName($item['name'])}}</a>							
                                 <div class="show-for-small mobile-product-price">
                                    <span class="mobile-product-price__qty">{{$item['quantity']}} x </span>
                                    <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>{{$discountPrice}}</bdi></span>							
                                 </div>
                              </td>
                              <td class="product-price" data-title="Price">
                                 <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>{{$discountPrice}}</bdi></span>						
                              </td>
                              <td class="product-quantity" data-title="Quantity">
                                 <div class="quantity buttons_added">
                                    <input type="button" value="-" class="minus button is-form" onclick="btnMinusDes({{$item['id']}})">
                                    <input
                                       type="number"
                                       id="qtyItem{{$item['id']}}"
                                       class="input-text qty text"
                                       step="1"
                                       min="0"
                                       max=""
                                       name="cart[aa677d660eefd1fe0d323c1dc9bfa869][qty]"
                                       value="{{$item['quantity']}}"
                                       title="Qty"
                                       size="4"
                                       placeholder=""
                                       inputmode="numeric" />
                                    <input type="button" value="+" class="plus button is-form" onclick="btnPlusDes({{$item['id']}})">	
                                 </div>
                              </td>
                              <td class="product-subtotal" data-title="Subtotal">
                                 <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span><span id="totalPrice-{{$item['quantity']}}">{{$discountPrice * $item['quantity']}}</span></bdi></span>						
                              </td>
                           </tr>
                           @endforeach
                           <tr>
                              <td colspan="6" class="actions clear">
                                 <div class="continue-shopping pull-left text-left">
                                    <a class="button-continue-shopping button primary is-outline"  href="{{route('home')}}">
                                    &#8592;&nbsp;Continue shopping	</a>
                                 </div>
                                 <a href="{{route('checkout')}}" class="button primary mt-0 pull-left small">Checkout</a>				
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </form>
            </div>
         </div>
         <div class="cart-footer-content after-cart-content relative"></div>
      </div>
   </div>
</main>
@endsection
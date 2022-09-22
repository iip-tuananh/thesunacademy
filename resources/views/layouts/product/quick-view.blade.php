@php
   $imgs = json_decode($product->images);
@endphp
<div class="row">
   <div class="large-6 col">
      <div class="product-images relative mb-half has-hover woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4">
         <div class="owl-carousel owl-theme">
            @foreach ($imgs as $img)
               <img src="{{$img}}" alt="" data-fancybox="gallery" style="height: 400px" loading="lazy">
            @endforeach
         </div>
      </div>
   </div>
   <div class="product-info summary entry-summary col col-fit product-summary">
      <h1 class="product-title product_title entry-title">
         {{languageName($product->name)}}
      </h1>
      <div class="is-divider small"></div>
      <div class="price-wrapper">
         <p class="price product-page-price ">
            <a href="tel:{{$setting->phone1}}" target="_blank" rel="noopener noreferrer">
               <button data-id="{{$product->id}}" data-width="500px" class="wpb-get-a-quote-button-form-fire wpb-get-a-quote-button-btn-medium wpb-get-a-quote-button-btn wpb-get-a-quote-button-btn-default">Liên hệ báo giá</button>
            </a>
         </p>
      </div>
      <div class="product-short-description">
         <p>
            <!--:vi-->
         </p>
         {!!languageName($product->description)!!}
      </div>
      @if (json_decode($product->preserve)[0]->detail != null)
         <div class="row row-solid"  id="row-488766429">
            <div id="col-1038352084" class="col small-12 large-12"  >
               <div class="col-inner" style="background-color:rgb(255, 255, 255);" >
                  <div class="khuyen-mai">
                     <p><span style="color: #d83131;"><strong>Khuyến mãi hot nhất:</strong></span></p>
                     <ul>
                        @foreach (json_decode($product->preserve) as $item)
                           <li><img class="alignnone wp-image-2151" src="{{url('frontend/images/icon-1.png')}}" alt="" width="20" height="20" /> {{$item->detail}}</li>
                        @endforeach
                     </ul>
                  </div>
               </div>
            </div>
            <style>
               #row-488766429 > .col > .col-inner {
               background-color: rgb(255, 255, 255);
               }
            </style>
         </div>
      @endif
   </div>
</div>
<script>
   $('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      nav:false,
      dots: false,
      autoplay: true,
      responsive:{
            0:{
               items:1
            },
            600:{
               items:1
            },
            1000:{
               items:1
            }
      }
   })
</script>
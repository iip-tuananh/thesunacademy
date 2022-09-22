<div class="col-inner"  >
   <ul class="sidebar-wrapper ul-reset hide-for-small">
         <aside id="text-5" class="widget widget_text">
               <span class="widget-title shop-sidebar">Liên hệ với chúng tôi</span>
               <div class="is-divider small"></div>
               <div class="textwidget">
                     <div class="row align-middle align-center"  id="row-2027544844">
                     <div id="col-1897345461" class="col small-12 large-12"  >
                     <div class="col-inner text-center sidebar-contact"  >
                           <div id="gap-147714179" class="gap-element clearfix" style="display:block; height:auto;">
                                 <img src="{{url('frontend/images/sidebar-hotline.png')}}" alt="" loading="lazy" style="width: 100%">
                                 <style>
                                 #gap-147714179 {
                                 padding-bottom: 30px;
                                 }
                                 .sidebar-contact a {
                                       color: #ed1c24;
                                 }
                                 .sidebar-contact a:hover {
                                       color: #005099;
                                 }
                                 .sidebar-contact p {
                                       margin :0;
                                 }
                                 </style>
                           </div>
                           <div style="display: inline-flex; margin-bottom: 15px;">
                                 <a href="tel:0977244959">
                                       <img src="{{url('frontend/images/ho-tro-truc-tuyen-call.png')}}" alt="" loading="lazy">
                                 </a>
                                 <div style="margin: 5px 0 0 15px;">
                                       <p style="margin: 0;">Ms Đông</p>
                                       <a href="tel:0977244959">0977.244.959</a>
                                 </div>
                           </div>
                           <div style="display: inline-flex; margin-bottom: 15px;">
                                 <a href="tel:0983767899">
                                       <img src="{{url('frontend/images/ho-tro-truc-tuyen-call.png')}}" alt="" loading="lazy">
                                 </a>
                                 <div style="margin: 5px 0 0 15px;">
                                       <p style="margin: 0;">Mr Minh</p>
                                       <a href="tel:0983767899">0983.76.78.99</a>
                                 </div>
                           </div>
                           <div style="display: inline-flex; margin-bottom: 15px;">
                                 <a href="tel:02462602268">
                                       <img src="{{url('frontend/images/icon_hotline.png')}}" alt="" loading="lazy">
                                 </a>
                                 <div style="margin: 5px 0 0 15px;">
                                       <p style="margin: 0;">VPGD</p>
                                       <a href="tel:02462602268">024.6260.2268</a>
                                 </div>
                           </div>
                           <p><span>Email: </span><a href="mailto:{{$setting->email}}">{{$setting->email}}</a></p>
                           <p><span>Website: </span><a href="https://sanxuatgangduc.com/">sanxuatgangduc.com</a></p>
                           <p><span>Website: </span><a href="https://sanxuatgangduc.com.vn/">sanxuatgangduc.com.vn</a></p>
                     </div>
                     </div>
                     </div>
               </div>
         </aside>
         <aside id="nav_menu-3" class="widget widget_nav_menu">
               <span class="widget-title shop-sidebar">Danh mục sản phẩm</span>
               <div class="is-divider small"></div>
               <div class="menu-danh-muc-san-pham-container">
                     <ul id="menu-danh-muc-san-pham" class="menu">
                           @foreach ($categoryhome as $cate)
                           <li id="menu-item-1102" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-1102 has-child {{count($cate->typeCate) > 0 ? 'menu-item-has-children' : ''}}">
                           <a href="{{route('allListProCate', ['cate'=>$cate->slug])}}">{{languageName($cate->name)}}</a>
                           @if (count($cate->typeCate) > 0)
                                 <ul class="sub-menu">
                                       @foreach ($cate->typeCate as $type)
                                             <li id="menu-item-1106" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-1106"><a href="{{route('allListProType', ['cate'=>$type->cate_slug, 'type'=>$type->slug])}}">{{languageName($type->name)}}</a></li>
                                       @endforeach
                                 </ul>
                           @endif
                           </li>
                           @endforeach
                     </ul>
               </div>
         </aside>
         <aside id="text-6" class="widget widget_text">
               <span class="widget-title shop-sidebar">Fanpage Facebook</span>
               <div class="is-divider small"></div>
               <div class="textwidget">
                     <div class="fb-page" data-href="{{$setting->facebook}}" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="{{$setting->facebook}}" class="fb-xfbml-parse-ignore"><a href="{{$setting->facebook}}">CTy  TMSX T&amp;T Hà Nội</a></blockquote></div>
               </div>
         </aside>
         @foreach ($videos as $video)
         <aside id="media_video-6" class="widget widget_media_video">
               <span class="widget-title shop-sidebar">{{$video->name}}</span>
               <div class="is-divider small"></div>
               <div style="width:100%;" class="wp-video">
                     <!--[if lt IE 9]><script  data-wpmeteor-after="REORDER" type="javascript/blocked">document.createElement('video');</script><![endif]-->
                     {{-- <img src="{{$video->image}}" alt="" loading="lazy"> --}}
                     <video class="wp-video-shortcode" id="video-2-1" preload="metadata" controls="controls">
                     <source type="video/youtube" src="{{$video->link}}" />
                     <a href="{{$video->link}}" target="_blank" rel="noopener">{{$video->link}}</a>
                     </video>
               </div>
               {{-- <style>
                     .wp-video {
                           position: relative;
                     }
                     .wp-video img {
                           position: absolute;
                           z-index: 1;
                     }
               </style> --}}
         </aside>
         @endforeach
         @foreach ($blogCate as $key=>$cate)
               @if ($key == 0)
                     <aside id="block_widget-4" class="widget block_widget">
                           <span class="widget-title shop-sidebar">TIN TỨC NỔI BẬT</span>
                           <div class="is-divider small"></div>
                           <div class="row large-columns-1 medium-columns-1 small-columns-1 row-xsmall">
                                 @foreach ($cate->listBlog as $blog)
                                       <div class="col post-item" >
                                             <div class="col-inner">
                                                   <a href="{{route('detailBlog', ['slug'=>$blog->slug])}}" class="plain">
                                                         <div class="box box-vertical box-text-bottom box-blog-post has-hover">
                                                               <div class="box-image" style="width:26%;">
                                                               <div class="image-cover" style="padding-top:100%;">
                                                               <img width="600" height="400" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20600%20400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="{{$blog->image}}" class="lazy-load attachment-original size-original wp-post-image" alt="" srcset="" data-srcset="{{$blog->image}} 600w, {{$blog->image}} 220w, {{$blog->image}} 300w" sizes="(max-width: 600px) 100vw, 600px" />  	
                                                               </div>
                                                               </div>
                                                               <div class="box-text text-left" >
                                                               <div class="box-text-inner blog-post-inner">
                                                               <h5 class="post-title is-large ">{{languageName($blog->title)}}</h5>
                                                               <div class="is-divider"></div>
                                                               </div>
                                                               </div>
                                                         </div>
                                                   </a>
                                             </div>
                                       </div>
                                 @endforeach
                           </div>
                     </aside>
               @else
                     <aside id="block_widget-3" class="widget block_widget">
                           <span class="widget-title shop-sidebar">{{languageName($cate->name)}}</span>
                           <div class="is-divider small"></div>
                           <div class="row large-columns-1 medium-columns-1 small-columns-1 row-xsmall">
                                 @foreach ($cate->listBlog as $blog)
                                 <div class="col post-item" >
                                       <div class="col-inner">
                                       <a href="{{route('detailBlog', ['slug'=>$blog->slug])}}" class="plain">
                                             <img width="738" height="429" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20738%20429%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="{{$blog->image}}" class="lazy-load attachment-original size-original wp-post-image" alt="" loading="lazy" srcset="" data-srcset="{{$blog->image}} 738w, {{$blog->image}} 300w, {{$blog->image}} 220w" sizes="(max-width: 738px) 100vw, 738px" />  
                                             <div class="box box-vertical box-text-bottom box-blog-post has-hover">
                                                   <div class="box-text text-left" >
                                                   <div class="box-text-inner blog-post-inner">
                                                   <h5 class="post-title is-large ">{{languageName($blog->title)}}</h5>
                                                   <div class="is-divider"></div>
                                                   </div>
                                                   </div>
                                             </div>
                                       </a>
                                       </div>
                                 </div>
                                 @endforeach
                           </div>
                     </aside>
               @endif
         @endforeach
         <aside id="media_video-6" class="widget widget_nav_menu">
               <span class="widget-title shop-sidebar">Catalogue</span>
               <div class="is-divider small"></div>
               <div style="width:100%;">
                     <a href="{{$setting->facebook}}">
                           <img src="{{url('frontend/images/cattalog-Cty-TT.jpg')}}" alt="" loading="lazy">
                     </a>
               </div>
         </aside>
         <aside id="media_video-6" class="widget widget_media_video">
               <a href="http://online.gov.vn/Home/WebDetails/83423" target="_blank">
                     <img src="{{url('frontend/images/logoSaleNoti-4.png')}}" alt="" loading="lazy">
               </a>
         </aside>
   </ul>
</div>
<style>
#col-439034941 > .col-inner {
margin: -19px 0px 0px 0px;
}
</style>
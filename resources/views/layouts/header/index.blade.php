{{-- <div class="box_top" id="box_top">
   <div class="container">
         <div class="row">
         <div class="col-sm-6">
            <div class="contact">
               <span class="hotline">
               <i class="fa fa-phone" aria-hidden="true"></i> 
               <a href="tel:0829996886">082.999.6886</a> - <a href="tel:0829996633">082.999.6633</a>                    </span>
               <a href="mail:info@hbr.edu.vn" class="email hidden-xs"><i class="fa fa-paper-plane" aria-hidden="true"></i> info@hbr.edu.vn</a>
            </div>
         </div>
         <div class="col-sm-6">
            <div class="user">
               <ul class="nav navbar-nav">
                     <li><a href="/user/index/login/">Đăng nhập</a></li>
                     <li><a href="/user/index/register/">Đăng ký</a></li>
                     <li><a href="http://careers.hbr.edu.vn/" style="background: #FF0000; color: #FFF;">Tuyển dụng</a></li>
               </ul>
            </div>
            <div class="social">
               <a href="https://www.facebook.com/" target="_blank" class="item"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
               <a href="https://www.instagram.com/" target="_blank" class="item"><i class="fa fa-instagram" aria-hidden="true"></i></a>
               <a href="https://www.youtube.com/channel/UCYkc_xlyaWBslS4hW0Rcd7w" target="_blank" class="item"><i class="fa fa-play-circle-o" aria-hidden="true"></i></a>
               <a href="https://www.facebook.com/hbr.edu.vn/" target="_blank" class="item"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </div>
         </div>
         </div>
   </div>
</div> --}}
<div class="box_menuMain" id="box_menuMain">
   <div class="container">
         <div class="header">
         <a class="logo" href="{{route('home')}}" title="{{$setting->company}}"><img src="{{$setting->logo}}" loading="lazy"></a>
         <a href="javascript:;" class="toggle hidden-md hidden-lg">
         <span class="line"></span>
         <span class="line"></span>
         <span class="line"></span>
         <span class="line"></span>
         </a>
         </div>
         <div class="menu hidden-xs hidden-sm">
         <ul>
            <li class="dropdown">
               <a href="{{route('aboutUs')}}" target="_self" class=""><span class="title">Về The Sun</span></a>
            </li>
            <li class="dropdown">
               <a href="{{route('allProduct')}}" target="_self" class=""><span class="title">Chương trình đào tạo</span></a>
               <ul>
                  @foreach ($categoryhome as $cate)
                  <li><a href="{{route('allListProCate', ['cate'=>$cate->slug])}}" target="_self" class=""><span class="title">{{languageName($cate->name)}}</span></a></li>
                  @endforeach
               </ul>
            </li>
            <li><a href="{{route('listService')}}" target="_self" class=""><span class="title">Hội thảo</span></a></li>
            <li class="dropdown" data-level="2">
               <a href="{{route('allListBlog')}}" target="_self" class=""><span class="title">Tin tức - Sự kiện</span></a>
               <ul>
                  @foreach ($blogCate as $cate)
                     <li><a href="{{route('listCateBlog', ['slug'=>$cate->slug])}}" target="_self" class=""><span class="title">{{languageName($cate->name)}}</span></a></li>
                  @endforeach
               </ul>
            </li>
            <li><a href="{{route('lienHe')}}" target="_self" class=""><span class="title">Liên hệ</span></a></li>
            <li><a href="#frmRegisterTuVan" target="_self" class=""><span class="title">Đăng ký</span></a></li>
         </ul>
         </div>
   </div>
   <div class="clr"></div>
</div>
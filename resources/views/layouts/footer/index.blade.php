<form action="{{route('postcontact')}}" id="frmRegisterTuVan" method="POST" class="">
   @csrf
   <div class="box_dangKyTuVan" id="box_dangKyTuVan">
         <div class="container" id="box_dangKy">
         <div class="row">
            <div class="dangKy">
               <div class="box_content">
                     <div class="step_1">
                     <div class="box_title title_1">Đăng ký nhận tư vấn khóa học của The Sun</div>
                     <div class="col-md-6">
                        <div class="form-group" id="input-name">
                           <input name="name" type="text" class="form-control" placeholder="Họ và tên">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group" id="input-phone">
                           <input name="phone" type="text" class="form-control" placeholder="Điện thoại">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group" id="input-email">
                           <input name="email" type="text" class="form-control" placeholder="Email">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group" id="input-location_city_id">
                           <textarea class="form-control" name="mess" cols="30" rows="1" placeholder="Nội dụng cần đăng ký"></textarea>
                        </div>
                     </div>
                     </div>
                     <div class="col-md-12">
                     <div class="btnSuccess">
                        <input type="submit" class="input-lg btn-blue step_1" value="Đăng ký ngay">
                     </div>
                     </div>
               </div>
            </div>
         </div>
         </div>
   </div>
</form>
<div class="box_footer">
   <div class="container">
         <div class="wrap clearfix">
         <div class="col-sm-6 col-md-4">
            <div class="item-footer">
               <div class="footer-title">
                  <h2 class="title">Thông tin doanh nghiệp</h2>
               </div>
               <div class="name">{{$setting->company}}</div>
               <div class="slogan">{{$setting->webname}}</div>
               <div class="address"><i class="fa fa-heart" aria-hidden="true"></i> {{$setting->address1}}</div>
               @if ($setting->address2)
               <div class="address"><i class="fa fa-heart" aria-hidden="true"></i> {{$setting->address2}}</div>
               @endif
               <div class="hotline"><i class="fa fa-phone" aria-hidden="true"></i> {{$setting->phone1}} {{$setting->phone2 ? '- '.$setting->phone2 : ''}}</div>
               <div style="display:inline">Kết nối với chúng tôi:</div>
               <div class="social" style="display: flex;">
                     <a href="{{$setting->facebook}}" target="_blank" class="item" style="margin-right: 20px;"><img src="{{url('frontend/images/icon_facebook.png')}}" loading="lazy"></a>
                     <a href="{{$setting->GA}}" target="_blank" class="item" style="margin-right: 20px;"><img src="{{url('frontend/images/icon_youtube.png')}}" loading="lazy"></a>
                     <a href="https://www.instagram.com/" target="_blank" class="item" style="margin-right: 20px;"><img src="{{url('frontend/images/icon_instagram.png')}}" loading="lazy"></a>
                     <a href="https://www.facebook.com/" target="_blank" class="item" style="margin-right: 20px;"><img src="{{url('frontend/images/icon_google.png')}}" loading="lazy"></a>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-md-2">
            <div class="item-footer">
               <div class="footer-title">
                  <h2 class="title">Menu</h2>
               </div>
               <div class="box_content">
                     <div class="box_menuFooter">
                     <ul>
                        <li><a href="{{route('aboutUs')}}" target="_self" title="Về The Sun" class=""><span class="title">Về The Sun</span></a></li>
                        <li><a href="{{route('allProduct')}}" target="_self" title="Chương trình đào tạo" class=""><span class="title">Chương trình đào tạo</span></a></li>
                        <li><a href="{{route('listService')}}" target="_self" title="Hội thảo" class=""><span class="title">Hội thảo</span></a></li>
                        <li><a href="{{route('allListBlog')}}" target="_self" title="Tin tức - Sự kiện" class=""><span class="title">Tin tức - Sự kiện</span></a></li>
                        <li><a href="{{route('lienHe')}}" target="_self" title="Liên hệ" class=""><span class="title">Liên hệ</span></a></li>
                     </ul>
                     </div>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-md-3">
            <div class="item-footer">
               <div class="footer-title">
                  <h2 class="title">Fanpage</h2>
               </div>
               <div class="box_content">
                  <div class="fb-page" data-href="{{$setting->facebook}}" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-md-3">
            <div class="item-footer">
               <div class="footer-title">
                  <h2 class="title">Google Map</h2>
               </div>
               <div class="box_content">
                     <div class="row">
                     {!!$setting->iframe_map!!}
                     </div>
               </div>
            </div>
         </div>
         </div>
   </div>
</div>
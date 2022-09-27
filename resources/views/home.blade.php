@extends('layouts.main.master')
@section('title')
{{$setting->company}}
@endsection
@section('description')
{{$setting->webname}}
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<div class="box_bxslider" id="box_bxslider_pc">
      <div class="box_content" style="height: 100%">
            <ul class="bxslider">
                  @foreach ($banners as $banner)
                        <li><a class="item" href="{{$banner->link}}" target="_self"><img src="{{$banner->image}}" alt="" loading="lazy"></a></li>
                  @endforeach
            </ul>
      </div>
</div>
{{-- <div class="box_bxslider slide-mobile" id="box_bxslider_mobile">
      <div class="box_content">
            <ul class="bxslider">
                  @foreach ($banners as $banner)
                        <li><a class="item" href="{{$banner->link}}" target="_self"><img src="{{$banner->image}}" alt="" loading="lazy"></a></li>
                  @endforeach
            </ul>
      </div>
</div> --}}
<style>#box_defaultHome .image a{display: block;position: relative;}#box_defaultHome .image img{display: inline-block;width: 100%;}#box_defaultHome .image .fa{position: absolute;top: 50%;left: 50%;font-size: 60px;color: #fff;margin: -30px 0 0 -25px;}</style>
<div class="box_defaultHome" id="box_defaultHome">
      <div class="box_content clearfix">
            <div class="info">
            <h1 class="title font-title"><a href="{{route('aboutUs')}}" title="Về The Sun Academy">Về The Sun Academy</a></h1>
            {!!$aboutUs->description!!}
            <div class="view">
            <a href="{{route('aboutUs')}}" title="Xem chi tiết">XEM CHI TIẾT</a>
            </div>
            </div>
            <div class="image">
                  <section
                        id="main-carousel"
                        class="splide"
                        aria-label="The carousel with thumbnails. Selecting a thumbnail will change the Beautiful Gallery carousel."
                        >
                        <div class="splide__track">
                              <ul class="splide__list">
                                    @foreach ($prizes as $prize)
                                    <li class="splide__slide">
                                          <img src="{{ $prize->image }}" alt="" loading="lazy">
                                    </li>
                                    @endforeach
                              </ul>
                        </div>
                  </section>
            </div>
            <div class="row">
                  <div class="col-md-12">
                  <section
                        id="thumbnail-carousel"
                        class="splide mt-3"
                        aria-label="The carousel with thumbnails. Selecting a thumbnail will change the Beautiful Gallery carousel."
                        >
                        <div class="splide__track">
                              <ul class="splide__list">
                              @foreach ($prizes as $prize)
                                    <li class="splide__slide">
                                    <img src="{{ $prize->image }}" alt="" loading="lazy">
                                    </li>
                              @endforeach
                              </ul>
                        </div>
                  </section>
                  </div>
            </div>
      </div>
</div>
<style>
      @media only screen and (min-width: 768px) {
            #main-carousel img {
                  height: 430px;
            }
      }
      @media only screen and (max-width: 768px) {
            #main-carousel img {
                  height: 280px;
            }
      }
      .splide__slide img {
      width: 100%;
      height: 100%;
      }
</style>
<div class="box_courseHighlight" id="box_courseHighlight">
      <div class="box_content">
            <div class="box_title">
                  <h2 class="title font-title"><a href="#" title="Các khóa học nổi bật">Các khóa học nổi bật</a></h2>
            </div>
            <div class="box_info"></div>
            <div class="row">
                  @foreach ($homeProduct as $product)
                        @include('layouts.product.item', ['product'=>$product])
                  @endforeach
            </div>
      </div>
</div>
<div class="box_adsHome" id="box_adsHome">
      <div class="box_content">
            <div class="box_title">
            <h2 class="title font-title">Các loại hình đào tạo</h2>
            </div>
            <div class="box_info">Là một trong những đơn vị tiên phong và hàng đầu tổ chức khóa học về quản trị cao cấp cho các doanh nghiệp Việt Nam</div>
            <div class="box_item clearfix">
                  <div class="row">
                        @foreach ($categoryhome as $cate)
                              <div class="col-md-4">
                              <a href="{{route('allListProCate', ['cate'=>$cate->slug])}}">
                              <img src="{{$cate->avatar}}" alt="{{languageName($cate->name)}}" loading="lazy">
                              <span>Xem chi tiết</span>
                              </a>
                              </div>
                        @endforeach
                  </div>
            </div>
      </div>
</div>

<div class="box_courseNew" id="box_courseNew">
      <div class="container">
            <div class="box_title clearfix">
            <h2 class="title font-title">Chương trình hội thảo <br>Sắp diễn ra</h2>
            </div>
            <div class="box_content">
                  <div class="load_content row">
                        @foreach ($servicehome as $service)
                        @if (strtotime(now()) < strtotime($service->date_start))
                        @php
                              $avatars = json_decode($service->avatar);
                        @endphp
                              <div class="col-md-6">
                                    <div class="item clearfix">
                                          <div class="row">
                                                <div class="col-md-5">
                                                      <div class="image"><a href="{{route('serviceDetail', ['slug'=>$service->slug])}}" title="{{$service->name}}"><img src="{{$avatars[0]}}" alt="{{$service->name}}" loading="lazy" style="height: 214px;"></a></div>
                                                </div>
                                                <div class="col-md-7">
                                                      <div class="info">
                                                            <h3 class="title font-title"><a href="{{route('serviceDetail', ['slug'=>$service->slug])}}" title="{{$service->name}}" target="_self">{{$service->name}}</a></h3>
                                                            <div class="desc"></div>
                                                            <div class="speakers"><span>Chuyên gia: </span>{{$service->sku}}</div>
                                                            <div class="location">
                                                                  <span class="text"><i class="fa fa-bell" aria-hidden="true"></i> {{date('d/m/Y', strtotime($service->date_start))}}</span><span class="text"><i class="fa fa-paper-plane" aria-hidden="true"></i> {{$service->address}} </span>                    
                                                            </div>
                                                            <div class="desc">
                                                                  {!!languageName($service->description)!!}
                                                            </div>
                                                            <div class="view">
                                                                  <a href="{{route('serviceDetail', ['slug'=>$service->slug])}}" title="Xem chi tiết">Xem chi tiết</a>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        @endif
                        @endforeach
                  </div>
                  {{-- <div class="view_all">
                  <a href="{{route('listService')}}">Xem thêm</a>
                  </div> --}}
            </div>
      </div>
</div>
<div class="tieu-chi">
      <div class="container">
            <div class="box_title">
                  <h2 class="title font-title">4 LÝ DO ĐỂ BẠN CHỌN THE SUN</h2>
            </div>
            <div class="row text-center pt-3">
                  <div class="col-md-3">
                        <img src="{{url('frontend/images/tieu-chi-1.png')}}" alt="" loading="lazy">
                        <h4>Tư duy quản trị gốc và Giải phóng tâm</h4>
                        <p>Các chương trình đào tạo tập trung vào tư duy quản trị gốc và giải phóng tâm cho CEO.</p>
                  </div>
                  <div class="col-md-3">
                        <img src="{{url('frontend/images/tieu-chi-2.png')}}" alt="" loading="lazy">
                        <h4>Cung cấp hệ công cụ</h4>
                        <p>Học viên được trang bị hệ công cụ, tư duy xây dựng công cụ, cung cấp trọn bộ công cụ mẫu để áp dụng vào doanh nghiệp.</p>
                  </div>
                  <div class="col-md-3">
                        <img src="{{url('frontend/images/tieu-chi-3.png')}}" alt="" loading="lazy">
                        <h4>Tính thực tiễn cao</h4>
                        <p>Toàn bộ kiến thức là trải nghiệm thực tế quản trị doanh nghiệp của giảng viên. Nội dung đào tạo cô đọng, sát với thực tiễn, vận dụng được ngay.</p>
                  </div>
                  <div class="col-md-3">
                        <img src="{{url('frontend/images/tieu-chi-4.png')}}" alt="" loading="lazy">
                        <h4>Hỗ trợ sau học</h4>
                        <p>Đội ngũ Master của Học viên luôn hỗ trợ Online và Offline, giải đáp vướng mắc, cập nhật kiến thức cho học viên trong suốt 1 năm.</p>
                  </div>
            </div>
      </div>
</div>
<div class="box_teacher">
      <div class="container">
            <div class="box_title">
            <h2 class="title font-title"><a href="" title="Các chuyên gia">Các chuyên gia</a></h2>
            </div>
            <div class="box_content clearfix">
            <div class="bxslider" id="bxslider">
                  @foreach ($founder as $item)
                  <div class="item">
                        <div class="image">
                              <a href="#" title="{{$item->name}}">
                              <img alt="{{$item->name}}" src="{{$item->image}}" loading="lazy">
                              <span class="wrap"><span class="text">
                                    {{$item->position}} <br />
                                    {{$item->description}}<br />
                              </span></span>
                              </a>
                        </div>
                        <div class="title font-title"><a href="#" title="{{$item->name}}">{{$item->name}}</a></div>
                  </div>
                  @endforeach
            </div>
            </div>
      </div>
</div>
{{-- <div class="box_student" id="box_student">
      <div class="box_title">
            <h2 class="title font-title">CÂU CHUYỆN THÀNH CÔNG</h2>
      </div>
      <div class="box_content">
            <div class="container">
            <ul class="slider">
            <li>
                  <div class="item">
                        <div class="image"><a href="javascript:;" onclick="play_video('https://www.youtube.com/embed/WHLUwgYJr9Y?autoplay=1')"><img alt="Cảm nhận học viên trường doanh nhân HBR - Chủ tịch & TGĐ CTCP Đầu tư & xây dựng Hoàng Kim" src="https://i3.ytimg.com/vi/WHLUwgYJr9Y/maxresdefault.jpg?v=1"><i class="fa fa-play-circle" aria-hidden="true"></i></a></div>
                  </div>
            </li>
            <li>
                  <div class="item">
                        <div class="image"><a href="javascript:;" onclick="play_video('https://www.youtube.com/embed/RW5gKZCL17E?autoplay=1')"><img alt="Cảm nhận học viên trường doanh nhân HBR - Giám đốc công ty thời trang GUMAC" src="https://i3.ytimg.com/vi/RW5gKZCL17E/maxresdefault.jpg?v=1"><i class="fa fa-play-circle" aria-hidden="true"></i></a></div>
                  </div>
            </li>
            <li>
                  <div class="item">
                        <div class="image"><a href="javascript:;" onclick="play_video('https://www.youtube.com/embed/SgBa3gaeFCE?autoplay=1')"><img alt="Cảm nhận học viên trường doanh nhân HBR - CEO Công ty Cổ phần GUMAC" src="https://i3.ytimg.com/vi/SgBa3gaeFCE/maxresdefault.jpg?v=1"><i class="fa fa-play-circle" aria-hidden="true"></i></a></div>
                  </div>
            </li>
            <li>
                  <div class="item">
                        <div class="image"><a href="javascript:;" onclick="play_video('https://www.youtube.com/embed/9O5KvHirrQ0?autoplay=1')"><img alt="Cảm nhận học viên trường doanh nhân HBR - CEO công ty Bestbaby VN | Khóa học quản trị doanh nghiệp" src="https://i3.ytimg.com/vi/9O5KvHirrQ0/maxresdefault.jpg?v=1"><i class="fa fa-play-circle" aria-hidden="true"></i></a></div>
                  </div>
            </li>
            <li>
                  <div class="item">
                        <div class="image"><a href="javascript:;" onclick="play_video('https://www.youtube.com/embed/6sD45GZhglw?autoplay=1')"><img alt="GĐ Công ty TNHH Thương mại & dịch vụ kỹ thuật LAS" src="https://i3.ytimg.com/vi/6sD45GZhglw/maxresdefault.jpg?v=1"><i class="fa fa-play-circle" aria-hidden="true"></i></a></div>
                  </div>
            </li>
            <li>
                  <div class="item">
                        <div class="image"><a href="javascript:;" onclick="play_video('https://www.youtube.com/embed/b8Fgo8P3uHA?autoplay=1')"><img alt="Cảm nhận học viên trường doanh nhân HBR - CEO công ty AVT Education | Khóa học quản trị doanh nghiệp" src="https://i3.ytimg.com/vi/b8Fgo8P3uHA/maxresdefault.jpg?v=1"><i class="fa fa-play-circle" aria-hidden="true"></i></a></div>
                  </div>
            </li>
            <li>
                  <div class="item">
                        <div class="image"><a href="javascript:;" onclick="play_video('https://www.youtube.com/embed/PxLhLCe3yVc?autoplay=1')"><img alt="Cảm nhận học viên trường doanh nhân HBR - Giám đốc trung tâm Beta Education" src="https://i3.ytimg.com/vi/PxLhLCe3yVc/maxresdefault.jpg?v=1"><i class="fa fa-play-circle" aria-hidden="true"></i></a></div>
                  </div>
            </li>
            <li>
                  <div class="item">
                        <div class="image"><a href="javascript:;" onclick="play_video('https://www.youtube.com/embed/t9Ci8d5Utc4?autoplay=1')"><img alt="Cảm nhận học viên trường doanh nhân HBR - Giám đốc công ty thời trang YODY chia sẻ về TS Alok" src="https://i3.ytimg.com/vi/t9Ci8d5Utc4/maxresdefault.jpg?v=1"><i class="fa fa-play-circle" aria-hidden="true"></i></a></div>
                  </div>
            </li>
            <li>
                  <div class="item">
                        <div class="image"><a href="javascript:;" onclick="play_video('https://www.youtube.com/embed/zOySsOkT8ko?autoplay=1')"><img alt="Cảm nhận học viên trường doanh nhân HBR - Khóa học Tuyển dụng Đào tạo & Giữ chân Nhân Tài - TS. Alok" src="https://i3.ytimg.com/vi/zOySsOkT8ko/maxresdefault.jpg?v=1"><i class="fa fa-play-circle" aria-hidden="true"></i></a></div>
                  </div>
            </li>
            <li>
                  <div class="item">
                        <div class="image"><a href="javascript:;" onclick="play_video('https://www.youtube.com/embed/tnBxNNxKxvA?autoplay=1')"><img alt="Cảm nhận học viên trường doanh nhân HBR - Giám đốc Nhân sự Tập đoàn TA Holdings" src="/public/files/upload/06_2019/images/maxresdefault(1).jpg"><i class="fa fa-play-circle" aria-hidden="true"></i></a></div>
                  </div>
            </li>
            <li>
                  <div class="item">
                        <div class="image"><a href="javascript:;" onclick="play_video('https://www.youtube.com/embed/VzQkJM4gVLU?autoplay=1')"><img alt="Cảm nhận học viên trường doanh nhân HBR - Chủ tịch HĐQT Công ty TNHH Sỹ Phú" src="/public/files/upload/06_2019/images/maxresdefault--1-(1).jpg"><i class="fa fa-play-circle" aria-hidden="true"></i></a></div>
                  </div>
            </li>
            <li>
                  <div class="item">
                        <div class="image"><a href="javascript:;" onclick="play_video('https://www.youtube.com/embed/IyGROR86Gck?autoplay=1')"><img alt="Cảm nhận học viên trường doanh nhân HBR - Co-Founder Công ty Cổ phần Đầu tư Doanh nhân VERCO" src="/public/files/upload/06_2019/images/maxresdefault(2).jpg"><i class="fa fa-play-circle" aria-hidden="true"></i></a></div>
                  </div>
            </li>
            <li>
                  <div class="item">
                        <div class="image"><a href="javascript:;" onclick="play_video('https://www.youtube.com/embed/tnBxNNxKxvA?autoplay=1')"><img alt="Cảm nhận học viên trường doanh nhân HBR - Giám đốc Nhân sự Tập đoàn TA Holdings" src="/public/files/upload/06_2019/images/maxresdefault--1-(2).jpg"><i class="fa fa-play-circle" aria-hidden="true"></i></a></div>
                  </div>
            </li>
            <li>
                  <div class="item">
                        <div class="image"><a href="javascript:;" onclick="play_video('https://www.youtube.com/embed/94kdbV9d4n8?autoplay=1')"><img alt="Cảm nhận học viên trường doanh nhân HBR - Chủ tịch HĐQT Công ty Cổ phần iLead Group" src="/public/files/upload/06_2019/images/maxresdefault--2-(1).jpg"><i class="fa fa-play-circle" aria-hidden="true"></i></a></div>
                  </div>
            </li>
            <li>
                  <div class="item">
                        <div class="image"><a href="javascript:;" onclick="play_video('https://www.youtube.com/embed/VzQkJM4gVLU?autoplay=1')"><img alt="Cảm nhận học viên trường doanh nhân HBR - Chủ tịch HĐQT Công ty TNHH Sỹ Phú" src="/public/files/upload/06_2019/images/maxresdefault--3-.jpg"><i class="fa fa-play-circle" aria-hidden="true"></i></a></div>
                  </div>
            </li>
            </ul>
            </div>
            <div class="go_box input-lg btn-blue" data-box="box_dangKy">Đăng ký ngay</div>
      </div>
</div> --}}
<div class="box_newsHome">
      <div class="container">
            <div class="box_content clearfix">
            <div class="row">
                  @foreach ($blogCate as $key=>$cate)
                        @if ($key == 0)
                              <div class="col-xs-12 col-sm-6">
                                    <div class="box_defaultCategoryLeft">
                                          <div class="box_title">
                                          <h2 class="title font-title"><a href="{{route('listCateBlog', ['slug'=>$cate->slug])}}" title="{{languageName($cate->name)}}">{{languageName($cate->name)}}</a></h2>
                                          </div>
                                          <div class="box_content">
                                                @foreach ($cate->listBlog as $key=>$blog)
                                                      @if ($key == 0)
                                                      <div class="item_first clearfix">
                                                      <div class="image"><a href="{{route('detailBlog', ['slug'=>$blog->slug])}}"><img src="{{$blog->image}}" alt="{{languageName($blog->title)}}" loading="lazy"></a></div>
                                                      <div class="info">
                                                            <h3 class="title"><a href="{{route('detailBlog', ['slug'=>$blog->slug])}}">{{languageName($blog->title)}}</a></h3>
                                                            <div class="category"><a href="{{route('listCateBlog', ['slug'=>$cate->slug])}}" title="{{languageName($cate->name)}}">{{languageName($cate->name)}}</a> - <span class="date">{{date_format($blog->created_at, 'd/m/Y')}}</span></div>
                                                            <div class="desc">{{languageName($blog->description)}}</div>
                                                      </div>
                                                      </div>
                                                      @else
                                                      <h3 class="item"><a href="{{route('detailBlog', ['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}">{{languageName($blog->title)}}</a></h3>
                                                      @endif
                                                @endforeach
                                          </div>
                                    </div>
                              </div>
                        @else
                              <div class="col-xs-12 col-sm-6">
                                    <div class="box_defaultCategoryRight">
                                          <div class="box_title">
                                          <h2 class="title font-title"><a href="{{route('listCateBlog', ['slug'=>$cate->slug])}}" title="{{languageName($cate->name)}}">{{languageName($cate->name)}}</a></h2>
                                          </div>
                                          <div class="box_content">
                                          <div class="row">
                                                @foreach ($cate->listBlog as $blog)
                                                <div class="col-sm-6">
                                                      <div class="item">
                                                            <div class="image">
                                                            <a href="{{route('detailBlog', ['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}"><img src="{{$blog->image}}" alt="{{languageName($blog->title)}}" loading="lazy"></a>
                                                            </div>
                                                            <div class="info">
                                                            <h3 class="title"><a href="{{route('listCateBlog', ['slug'=>$cate->slug])}}" title="{{languageName($cate->name)}}">{{languageName($cate->name)}}</a> - <span class="date">{{date_format($blog->created_at, 'd/m/Y')}}</span></h3>
                                                            <div class="desc">{{languageName($blog->description)}}</div>
                                                            </div>
                                                      </div>
                                                </div>
                                                @endforeach
                                          </div>
                                          </div>
                                    </div>
                              </div>
                        @endif
                  @endforeach
            </div>
            </div>
      </div>
</div>
{{-- <div class="box_dangKy">
      <div class="container">
            <div class="box_wrapper">
            <div class="box_content">
            <div class="box_title">
                  <div class="title font-title">ĐĂNG KÝ TRUY CẬP TÀI LIỆU ONLINE<br>MIỄN PHÍ TẠI HBR</div>
            </div>
            <div class="box_text">Với hơn 100 bài giảng trải rộng trên các chủ đề nổi bật như bán hàng, Marketing, nhân sự,... từ các chuyên gia hàng đầu trong nước và trên thế giới, HBR hi vọng có thể cung cấp cho anh/chị hệ thống kiến thức khoa học, kèm các công cụ quan trọng & các kỹ năng cần thiết về Lãnh đạo & Quản trị.</div>
            <div class="box_form">
                  <form method="post" action="" id="frmRegister">
                        <div class="form-group">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Họ Tên" required="required"/>
                        </div>
                        <div class="form-group">
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Số Điện Thoại" required="required"/>
                        </div>
                        <div class="form-group">
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email" required="required"/>
                        </div>
                        <div class="form-group">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Mật Khẩu" required="required"/>
                        </div>
                        <div class="form-group">
                        <div class="alert alert-danger hidden"></div>
                        </div>
                        <div class="form-group">
                        <button type="button" class="form-control btn-sucsess" name="submit">Đăng ký ngay</button>
                        </div>
                  </form>
            </div>
            </div>
            </div>
      </div>
</div> --}}
{{-- <div class="box_adsDoiTac" id="box_adsDoiTac">
      <div class="container">
            <div class="box_title">
            <h2 class="title font-title">Khách hàng và đối tác</h2>
            </div>
            <div class="box_content clearfix">
            <a href="" title="CreOVate" target="_self"><img src="/public/files/upload/default/images/quang-cao/logo-cr.jpg" alt="CreOVate"></a><a href="" title="Vingroup" target="_self"><img src="/public/files/upload/default/images/doi-tac/vingroup.png" alt="Vingroup"></a><a href="" title="Bắc Á Bank" target="_self"><img src="/public/files/upload/default/images/doi-tac/bacabank.png" alt="Bắc Á Bank"></a><a href="" title="Viettin Bank" target="_self"><img src="/public/files/upload/default/images/doitac-4(1).png" alt="Viettin Bank"></a><a href="" title="Manulife" target="_self"><img src="/public/files/upload/default/images/doitac-6.jpg" alt="Manulife"></a><a href="" title="Skymond" target="_self"><img src="/public/files/upload/default/images/doitac-7.jpg" alt="Skymond"></a><a href="" title="VPBank" target="_self"><img src="/public/files/upload/default/images/doi-tac/vpbank.png" alt="VPBank"></a><a href="" title="AOSmith" target="_self"><img src="/public/files/upload/default/images/doi-tac/AO-Smith-logo.png" alt="AOSmith"></a><a href="" title="Heineken" target="_self"><img src="/public/files/upload/default/images/doitac-12.png" alt="Heineken"></a><a href="" title="Petrovietnam" target="_self"><img src="/public/files/upload/default/images/doi-tac/petrovietnam-logo.png" alt="Petrovietnam"></a><a href="" title="BIDV" target="_self"><img src="/public/files/upload/default/images/doi-tac/bidv.png" alt="BIDV"></a><a href="" title="Bảo tín minh châu" target="_self"><img src="/public/files/upload/default/images/doi-tac/BTMC-LOGO.png" alt="Bảo tín minh châu"></a><a href="" title="Viglacera" target="_self"><img src="/public/files/upload/default/images/doi-tac/Logo-Viglacera.png" alt="Viglacera"></a><a href="" title="Jetstar" target="_self"><img src="/public/files/upload/default/images/doi-tac/Jetstar-logo.svg.png" alt="Jetstar"></a><a href="" title="Agribank" target="_self"><img src="/public/files/upload/default/images/doi-tac/Agribank-logo.png" alt="Agribank"></a><a href="" title="PNJ" target="_self"><img src="/public/files/upload/default/images/doi-tac/PNJ.png" alt="PNJ"></a>
            </div>
      </div>
</div> --}}
{{-- <div class="box_productNew" id="box_productNew">
      <div class="container">
            <div class="box_title">
            <h2 class="title font-title"><a href="/sach">ẤN PHẨM CỦA ĐẠI HỌC HARVARD DÀNH CHO DOANH NHÂN VIỆT NAM</a></h2>
            </div>
            <div class="box_content ">
            <ul class="bxslider">
            <li class="item">
                  <div class="image">
                        <a href="/sach/biet-nguoi-biet-ta-cung-mbti.html" title="BIẾT NGƯỜI BIẾT TA CÙNG MBTI">
                        <img src="/public/files/upload/default/images/sach/biet-nguoi-biet-ta-cung-mbti-cover.jpg" alt="BIẾT NGƯỜI BIẾT TA CÙNG MBTI">
                        <span class="view"></span>
                        </a>
                  </div>
                  <div class="info">
                        <h3 class="title"><a href="/sach/biet-nguoi-biet-ta-cung-mbti.html" title="BIẾT NGƯỜI BIẾT TA CÙNG MBTI">BIẾT NGƯỜI BIẾT TA CÙNG MBTI</a></h3>
                        <div class="price"><span class="value"><span class="mask_currency">290000</span>đ</span></div>
                  </div>
            </li>
            <li class="item">
                  <div class="image">
                        <a href="/sach/ung-dung-mbti-trong-quan-tri-nhan-su.html" title="ỨNG DỤNG MBTI TRONG QUẢN TRỊ NHÂN SỰ">
                        <img src="/public/files/upload/default/images/sach/ung-dung-mbti-trong-quan-tri-nhan-su-cover.jpg" alt="ỨNG DỤNG MBTI TRONG QUẢN TRỊ NHÂN SỰ">
                        <span class="view"></span>
                        </a>
                  </div>
                  <div class="info">
                        <h3 class="title"><a href="/sach/ung-dung-mbti-trong-quan-tri-nhan-su.html" title="ỨNG DỤNG MBTI TRONG QUẢN TRỊ NHÂN SỰ">ỨNG DỤNG MBTI TRONG QUẢN TRỊ NHÂN SỰ</a></h3>
                        <div class="price"><span class="value"><span class="mask_currency">290000</span>đ</span></div>
                  </div>
            </li>
            <li class="item">
                  <div class="image">
                        <a href="/sach/content-marketing-tu-chien-luoc-den-thuc-thi.html" title="CONTENT MARKETING TỪ CHIẾN LƯỢC ĐẾN THỰC THI">
                        <img src="/public/files/upload/default/images/sach/content-marketing-tu-chien-luoc-toi-thuc-thi-cover.jpg" alt="CONTENT MARKETING TỪ CHIẾN LƯỢC ĐẾN THỰC THI">
                        <span class="view"></span>
                        </a>
                  </div>
                  <div class="info">
                        <h3 class="title"><a href="/sach/content-marketing-tu-chien-luoc-den-thuc-thi.html" title="CONTENT MARKETING TỪ CHIẾN LƯỢC ĐẾN THỰC THI">CONTENT MARKETING TỪ CHIẾN LƯỢC ĐẾN THỰC THI</a></h3>
                        <div class="price"><span class="value"><span class="mask_currency">229000</span>đ</span></div>
                  </div>
            </li>
            <li class="item">
                  <div class="image">
                        <a href="/sach/xay-dung-va-trien-khai-chien-luoc-kinh-doanh.html" title="XÂY DỰNG VÀ TRIỂN KHAI CHIẾN LƯỢC KINH DOANH">
                        <img src="/public/files/upload/default/images/sach/mock-up-01.jpg" alt="XÂY DỰNG VÀ TRIỂN KHAI CHIẾN LƯỢC KINH DOANH">
                        <span class="view"></span>
                        </a>
                  </div>
                  <div class="info">
                        <h3 class="title"><a href="/sach/xay-dung-va-trien-khai-chien-luoc-kinh-doanh.html" title="XÂY DỰNG VÀ TRIỂN KHAI CHIẾN LƯỢC KINH DOANH">XÂY DỰNG VÀ TRIỂN KHAI CHIẾN LƯỢC KINH DOANH</a></h3>
                        <div class="price"><span class="value"><span class="mask_currency">290000</span>đ</span></div>
                  </div>
            </li>
            <li class="item">
                  <div class="image">
                        <a href="/sach/content-marketing-thoi-dai-4-0.html" title="Content Marketing thời đại 4.0">
                        <img src="/public/files/upload/default/images/4d68e3b078a587fbdeb4.jpg" alt="Content Marketing thời đại 4.0">
                        <span class="view"></span>
                        </a>
                  </div>
                  <div class="info">
                        <h3 class="title"><a href="/sach/content-marketing-thoi-dai-4-0.html" title="Content Marketing thời đại 4.0">Content Marketing thời đại 4.0</a></h3>
                        <div class="price"><span class="value"><span class="mask_currency">290000</span>đ</span></div>
                  </div>
            </li>
            <li class="item">
                  <div class="image">
                        <a href="/sach/5-buoc-tai-cau-truc-doanh-nghiep.html" title="5 bước tái cấu trúc doanh nghiệp">
                        <img src="/public/files/upload/06_2019/images/5-buoc-tai-cau-truc-doanh-nghiep.jpg" alt="5 bước tái cấu trúc doanh nghiệp">
                        <span class="view"></span>
                        </a>
                  </div>
                  <div class="info">
                        <h3 class="title"><a href="/sach/5-buoc-tai-cau-truc-doanh-nghiep.html" title="5 bước tái cấu trúc doanh nghiệp">5 bước tái cấu trúc doanh nghiệp</a></h3>
                        <div class="price"><span class="value"><span class="mask_currency">250000</span>đ</span></div>
                  </div>
            </li>
            <li class="item">
                  <div class="image">
                        <a href="/sach/marketing-tren-du-lieu-lon.html" title="Marketing trên dữ liệu lớn">
                        <img src="/public/files/upload/06_2019/images/marketing-tren-du-lieu-lon.png" alt="Marketing trên dữ liệu lớn">
                        <span class="view"></span>
                        </a>
                  </div>
                  <div class="info">
                        <h3 class="title"><a href="/sach/marketing-tren-du-lieu-lon.html" title="Marketing trên dữ liệu lớn">Marketing trên dữ liệu lớn</a></h3>
                        <div class="price"><span class="value"><span class="mask_currency">230000</span>đ</span></div>
                  </div>
            </li>
            <li class="item">
                  <div class="image">
                        <a href="/sach/xay-dung-va-van-hanh-he-thong-quan-tri-nhan-su-hien-dai.html" title="Xây dựng và vận hành hệ thống quản trị nhân sự hiện đại">
                        <img src="/public/files/upload/06_2019/images/quan-tri-nhan-su-hien-dai.jpg" alt="Xây dựng và vận hành hệ thống quản trị nhân sự hiện đại">
                        <span class="view"></span>
                        </a>
                  </div>
                  <div class="info">
                        <h3 class="title"><a href="/sach/xay-dung-va-van-hanh-he-thong-quan-tri-nhan-su-hien-dai.html" title="Xây dựng và vận hành hệ thống quản trị nhân sự hiện đại">Xây dựng và vận hành hệ thống quản trị nhân sự hiện đại</a></h3>
                        <div class="price"><span class="value"><span class="mask_currency">295000</span>đ</span></div>
                  </div>
            </li>
            <li class="item">
                  <div class="image">
                        <a href="/sach/social-marketing-tu-chien-luoc-den-thuc-thi.html" title="Social Marketing: Từ chiến lược đến thực thi">
                        <img src="/public/files/upload/default/images/sach/socialmarketing-2.jpg" alt="Social Marketing: Từ chiến lược đến thực thi">
                        <span class="view"></span>
                        </a>
                  </div>
                  <div class="info">
                        <h3 class="title"><a href="/sach/social-marketing-tu-chien-luoc-den-thuc-thi.html" title="Social Marketing: Từ chiến lược đến thực thi">Social Marketing: Từ chiến lược đến thực thi</a></h3>
                        <div class="price"><span class="value"><span class="mask_currency">390000</span>đ</span></div>
                  </div>
            </li>
            <li class="item">
                  <div class="image">
                        <a href="/sach/thiet-lap-va-trien-khai-chien-luoc-ban-ban-hang-hieu-qua.html" title="Thiết lập và triển khai chiến lược bán bán hàng hiệu quả">
                        <img src="/public/files/upload/default/images/sach/chienluocbanhang.jpg" alt="Thiết lập và triển khai chiến lược bán bán hàng hiệu quả">
                        <span class="view"></span>
                        </a>
                  </div>
                  <div class="info">
                        <h3 class="title"><a href="/sach/thiet-lap-va-trien-khai-chien-luoc-ban-ban-hang-hieu-qua.html" title="Thiết lập và triển khai chiến lược bán bán hàng hiệu quả">Thiết lập và triển khai chiến lược bán bán hàng hiệu quả</a></h3>
                        <div class="price"><span class="value"><span class="mask_currency">250000</span>đ</span></div>
                  </div>
            </li>
            <li class="item">
                  <div class="image">
                        <a href="/sach/so-hoa-doanh-nghiep-tu-chien-luoc-den-thuc-thi.html" title="Số hóa doanh nghiệp: Từ chiến lược đến thực thi">
                        <img src="/public/files/upload/default/images/sach/sohoadoanhnghiep.jpg" alt="Số hóa doanh nghiệp: Từ chiến lược đến thực thi">
                        <span class="view"></span>
                        </a>
                  </div>
                  <div class="info">
                        <h3 class="title"><a href="/sach/so-hoa-doanh-nghiep-tu-chien-luoc-den-thuc-thi.html" title="Số hóa doanh nghiệp: Từ chiến lược đến thực thi">Số hóa doanh nghiệp: Từ chiến lược đến thực thi</a></h3>
                        <div class="price"><span class="value"><span class="mask_currency">250000</span>đ</span></div>
                  </div>
            </li>
            <li class="item">
                  <div class="image">
                        <a href="/sach/xay-dung-he-thong-marketing-va-ban-hang-hieu-qua-ts-alok-bharadwaj.html" title="Xây dựng hệ thống Marketing và bán hàng hiệu quả - TS. Alok Bharadwaj">
                        <img src="/public/files/upload/default/images/sach/HR-Marketing-1-01.jpg" alt="Xây dựng hệ thống Marketing và bán hàng hiệu quả - TS. Alok Bharadwaj">
                        <span class="view"></span>
                        </a>
                  </div>
                  <div class="info">
                        <h3 class="title"><a href="/sach/xay-dung-he-thong-marketing-va-ban-hang-hieu-qua-ts-alok-bharadwaj.html" title="Xây dựng hệ thống Marketing và bán hàng hiệu quả - TS. Alok Bharadwaj">Xây dựng hệ thống Marketing và bán hàng hiệu quả - TS. Alok Bharadwaj</a></h3>
                        <div class="price"><span class="value"><span class="mask_currency">250000</span>đ</span></div>
                  </div>
            </li>
            <li class="item">
                  <div class="image">
                        <a href="/sach/to-chuc-va-van-hanh-bo-may-nhan-su-hien-dai-dave-ulrich-wayne-brockbank.html" title="Tổ chức và vận hành bộ máy nhân sự hiện đại - Dave Ulrich & Wayne Brockbank">
                        <img src="/public/files/upload/default/images/sach/HR-Propositon-02.jpg" alt="Tổ chức và vận hành bộ máy nhân sự hiện đại - Dave Ulrich & Wayne Brockbank">
                        <span class="view"></span>
                        </a>
                  </div>
                  <div class="info">
                        <h3 class="title"><a href="/sach/to-chuc-va-van-hanh-bo-may-nhan-su-hien-dai-dave-ulrich-wayne-brockbank.html" title="Tổ chức và vận hành bộ máy nhân sự hiện đại - Dave Ulrich & Wayne Brockbank">Tổ chức và vận hành bộ máy nhân sự hiện đại - Dave Ulrich & Wayne Brockbank</a></h3>
                        <div class="price"><span class="value"><span class="mask_currency">250000</span>đ</span></div>
                  </div>
            </li>
            <li class="item">
                  <div class="image">
                        <a href="/sach/mo-hinh-quan-tri-nhan-su-hien-dai-gs-dave-ulrich.html" title="Mô hình quản trị nhân sự hiện đại - Gs. Dave Ulrich">
                        <img src="/public/files/upload/default/images/sach/HR-Champions-02.jpg" alt="Mô hình quản trị nhân sự hiện đại - Gs. Dave Ulrich">
                        <span class="view"></span>
                        </a>
                  </div>
                  <div class="info">
                        <h3 class="title"><a href="/sach/mo-hinh-quan-tri-nhan-su-hien-dai-gs-dave-ulrich.html" title="Mô hình quản trị nhân sự hiện đại - Gs. Dave Ulrich">Mô hình quản trị nhân sự hiện đại - Gs. Dave Ulrich</a></h3>
                        <div class="price"><span class="value"><span class="mask_currency">250000</span>đ</span></div>
                  </div>
            </li>
            <li class="item">
                  <div class="image">
                        <a href="/sach/tuyen-dung-phat-trien-va-giu-chan-nhan-tai-claudio-fernandez-araoz.html" title="Tuyển dụng, phát triển và giữ chân nhân tài - Claudio Fernández-Aráoz">
                        <img src="/public/files/upload/default/images/sach/tuyendung-1-03.png" alt="Tuyển dụng, phát triển và giữ chân nhân tài - Claudio Fernández-Aráoz">
                        <span class="view"></span>
                        </a>
                  </div>
                  <div class="info">
                        <h3 class="title"><a href="/sach/tuyen-dung-phat-trien-va-giu-chan-nhan-tai-claudio-fernandez-araoz.html" title="Tuyển dụng, phát triển và giữ chân nhân tài - Claudio Fernández-Aráoz">Tuyển dụng, phát triển và giữ chân nhân tài - Claudio Fernández-Aráoz</a></h3>
                        <div class="price"><span class="value"><span class="mask_currency">250000</span>đ</span></div>
                  </div>
            </li>
            </ul>
            </div>
            <div class="hotline_edumart text-center">Hotline mua sách: <a href="tel:0899189628">0899.189.628</a></div>
      </div>
</div> --}}
@endsection
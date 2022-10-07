<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\product\Category;
use App\models\product\Product;
use App\models\blog\Blog;
use Session;
use App\models\website\Partner;
use App\models\blog\BlogCategory;
use App\models\BannerAds;
use App\models\PageContent;
use App\models\product\TypeProduct;
use  App\models\ReviewCus;
use App\models\website\Founder;
use App\models\website\Prize;
use App\models\website\Video;

class HomeController extends Controller
{
    public function home()
    {
        $data['partners'] = Partner::where(['status'=>1])->get(['id','image','name','link']);
        $data['prizes'] = Prize::where(['status'=>1])->get();
        $data['videos'] = Video::where(['status'=>1])->get();
        $data['founder'] = Founder::where(['status'=>1])->get();
        $data['aboutUs'] = PageContent::where(['status'=>1, 'type'=>'ve-chung-toi', 'language'=>'vi'])->first();
        $data['reviewCus'] = ReviewCus::where('status',1)->get(['name','content','avatar']);
        $data['homeProduct'] = Product::where(['status'=>1, 'discountStatus'=>1])->limit(6)->get(['id','category','name','avatar','images','slug','cate_slug','type_slug', 'date_start', 'sku', 'address', 'description']);
        // dd($data['homeProduct']);
        $data['homeBlog'] = Blog::where(['status'=>1, 'home_status'=>1])->orderBy('id', 'desc')->limit(8)->get(['id','title','image','slug','category', 'description']);
        return view('home',$data);
    }
}

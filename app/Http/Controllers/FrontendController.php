<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subcategory;
use App\Category;
use App\Product;
use App\Customer;
use DB;
use Cart;
use Session;
class FrontendController extends Controller
{
    public function index(){
        $subcategories=Subcategory::where('sub_status','active')->get();
        $categories=Category::where('category_status','active')->get();
        $lastedproducts=Product::where('pubstatus','active')->orderby('id','DESC')->limit(8)->get();
        $highOffer=Product::where('pubstatus','active')->orderBy('discount', 'desc')->first();
        $offerProduct=Product::where('pubstatus','active')->where('discount','!=','Null')->inRandomOrder()->limit(8)->get();
         $bestSell= DB::table('orderdetails')
                     ->select(DB::raw('count(*) as user_count, productId'))                  
                     ->groupBy('productId')
                     ->get();
                     
        $maxOffer=  DB::table('products')->max('discount');
        return view('frontend.home.maincontent',['subcategories'=>$subcategories,'highOffer'=>$highOffer,'bestSell'=>$bestSell,'categories'=>$categories,'lastedproducts'=>$lastedproducts,'offerProduct'=>$offerProduct]);
    }
    public function categoryProduct($slug){
        $categoryProducts=Product::where('sub_cat_id',$slug)->where('pubstatus','active')->paginate(14);
        $viewCat=Category::where('category_status','active')->get();
        $lastedproducts=Product::where('pubstatus','active')->orderby('id','DESC')->limit(8)->get();
        return view('frontend.shop.categoryProduct',['categoryProducts'=>$categoryProducts,'viewCat'=>$viewCat,'lastedproducts'=>$lastedproducts,]);
    }
    public function pre_order(){
        $pre_orders=Product::where('pre_order','pre_order')->where('pubstatus','active')->paginate(14);
         $viewCat=Category::where('category_status','active')->get();
         $lastedproducts=Product::where('pubstatus','active')->orderby('id','DESC')->limit(8)->get();
        return view('frontend.shop.preOrder',['pre_orders'=>$pre_orders,'viewCat'=>$viewCat,'lastedproducts'=>$lastedproducts,]);
    }
     public function offerProduct(){
        $offerProducts=Product::where('pubstatus','active')->where('discount','!=','Null')->inRandomOrder()->paginate(14);
        $viewCat=Category::where('category_status','active')->get();
        $lastedproducts=Product::where('pubstatus','active')->orderby('id','DESC')->limit(8)->get();
        return view('frontend.shop.offerProduct',['offerProducts'=>$offerProducts,'viewCat'=>$viewCat,'lastedproducts'=>$lastedproducts,]);
    }
   public function allproduct(Request $request){
        $allproducts=Product::where('pubstatus','active')->paginate(12);
        $viewCat=Category::where('category_status','active')->get();
        return view('frontend.shop.allproduct',['allproducts'=>$allproducts,'viewCat'=>$viewCat]);
    }

    public function searchProduct(Request $request){
        $searchData= $request->search;
        $allproducts=DB::table('products')
        ->where('pubstatus','active')
        ->where('products.pro_name','like','%'.$searchData.'%')
        ->orWhere('products.short_description', 'LIKE', "%$searchData%")
        ->orWhere('products.description', 'LIKE', "%$searchData%")
        ->get();
        $viewCat=Category::where('category_status','active')->get();
        $lastedproducts=Product::where('pubstatus','active')->orderby('id','DESC')->limit(8)->get();
        return view('frontend.shop.searchProduct',['allproducts'=>$allproducts,'viewCat'=>$viewCat,'lastedproducts'=>$lastedproducts,]);
       }
    public function subcategories($slug){
        $subcategory=Subcategory::where('cat_slug',$slug)->get();
        $lastedproducts=Product::where('pubstatus','active')->orderby('id','DESC')->limit(8)->get();
        return view('frontend.shop.subcategory',['subcategorys'=>$subcategory,'lastedproducts'=>$lastedproducts,]);
    }
    public function singleproduct($slug){
        $product=Product::where('slug',$slug)->first();
        $lastedproducts=Product::where('pubstatus','active')->orderby('id','DESC')->limit(8)->get();
        return view('frontend.shop.singleProduct',['product'=>$product,'lastedproducts'=>$lastedproducts,]);
    }
    public function checkout(){

   
        $id=Session::get('customer_id');
        if($id>0){
            if(Cart::count()>0){
        $cartProduct=Cart::Content();
        $customerData=Customer::find($id);
        return view('frontend.checkout.cartproduct',['cartProduct'=>$cartProduct,'customer_data'=>$customerData]);
            }else{
                return redirect('/');
            }
        }else{
            return redirect('/customer/login');
        }
    }
    public function contact_us(){
        return view('frontend.amruSetting.contact_us');
    }
    public function about_us(){
        return view('frontend.amruSetting.about_us');
    }
    public function cus_login(){
        return view('frontend.amruSetting.login_register');
    }
}
 
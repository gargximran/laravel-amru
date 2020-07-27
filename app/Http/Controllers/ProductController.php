<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Subcategory;
use App\Product;
use DB;
class ProductController extends Controller
{
    public function index(){
        $categories=Category::where('category_status','active')->get();
        return view('admin.product.addProduct',['categories'=>$categories]);
    }
    public function storeProduct(Request $request){
            $file = $request->file('files');
             $file1 = $request->file('files1');
             $file2 = $request->file('files2');
     
        $product=new Product;
        $product->pro_name=$request->pro_name;
        $product->slug=$this->createSlug($request->pro_name);
        $product->cat_id=$request->cat_slug;
        $product->sub_cat_id=$request->sub_cat_slug;
        $product->pre_order=$request->pre_order;

        if($request->discountProduct>0){
            $product->discount=$request->discountProduct;
            $product->sell_price=$request->price;
            $product->price=$request->sell_price;
        }else{
            $product->sell_price=$request->sell_price;
        }
       
       
        

        $product->qty=$request->qty;
        $product->qty_type=$request->qty_type;
        $product->short_description=$request->short_description;
        $product->description=$request->description;
        $product->pubstatus=$request->status;
        
            $originalName=$file->getClientOriginalName();
            $str=str_replace(' ','-',$originalName);
            $name=time().'_'.$str;
            $file->move(public_path('images'),$name);
            $imageUrl=$name;
            $product->images=$imageUrl;
               if($file1){
            $originalName1=$file1->getClientOriginalName();
            $str1=str_replace(' ','-',$originalName1);
            $name1=time().'_'.$str1;
            $file1->move(public_path('images'),$name1);
            $imageUrl1=$name1;
            $product->image1=$imageUrl1;
            }
                 if($file2){
            $originalName2=$file2->getClientOriginalName();
            $str2=str_replace(' ','-',$originalName2);
            $name2=time().'_'.$str2;
            $file2->move(public_path('images'),$name2);
            $imageUrl2=$name2;
            $product->image2=$imageUrl2;
            }
        // $product->images=$image;
             $product->save();
            return back();
    }
     public function stockProduct(){
      
        $stockProductBranch=DB::table('products') 
            
        ->select('products.*',DB::raw("(SELECT SUM(orderdetails.productQuantity) FROM orderdetails
        WHERE orderdetails.productId = products.id
        GROUP BY orderdetails.productId) as sell_qty"))
        ->get();
        return view('admin.product.stockProduct',['stockProductBranch'=>$stockProductBranch]);
    }
    public function listProduct(){
        $products=DB::table('products')
         ->join('categories','products.cat_id','=','categories.category_slug')
         ->join('subcategories','products.sub_cat_id','=','subcategories.sub_slug')
         ->select('products.*','subcategories.sub_name','categories.category_name')
         ->get();
        return view('admin.product.product_list',['products'=>$products]);
    }
    public function getProduct(){
        $allproduct=DB::table('products')
         ->join('categories','products.cat_id','=','categories.category_slug')
         ->join('subcategories','products.sub_cat_id','=','subcategories.sub_slug')
         ->select('products.*','subcategories.sub_name','categories.category_name')
         ->get();
        return response()->json($allproduct);
    }
   public function editProduct($id){
        $productById=Product::with('productsubcategories')->where('id',$id)->first();
         $categories=Category::where('category_status','active')->get();
         return view('admin.product.editProduct',['productById'=>$productById,'categories'=>$categories]);
    }
    public function updateProduct(Request $request){
             $file = $request->file('files');
             $file1 = $request->file('files1');
             $file2 = $request->file('files2');
     
        $product=Product::find($request->id);
        $product->pro_name=$request->pro_name;
      
        $product->cat_id=$request->cat_slug;
        $product->sub_cat_id=$request->sub_cat_slug;

        if($request->discount>=0){
            $product->discount=$request->discount;
            $product->sell_price=$request->price;
            $product->price=$request->sell_price;
        }else{
            $product->price=$request->sell_price;
        }
        
      
        $product->pre_order=$request->pre_order;
       

        $product->qty=$request->qty;
        $product->qty_type=$request->qty_type;
        $product->short_description=$request->short_description;
        $product->description=$request->description;
        $product->pubstatus=$request->status;
         if($file){
            $originalName=$file->getClientOriginalName();
            $str=str_replace(' ','-',$originalName);
            $name=time().'_'.$str;
            $file->move(public_path('images'),$name);
            $imageUrl=$name;
            $product->images=$imageUrl;
        }
               if($file1){
            $originalName1=$file1->getClientOriginalName();
            $str1=str_replace(' ','-',$originalName1);
            $name1=time().'_'.$str1;
            $file1->move(public_path('images'),$name1);
            $imageUrl1=$name1;
            $product->image1=$imageUrl1;
            }
                 if($file2){
            $originalName2=$file2->getClientOriginalName();
            $str2=str_replace(' ','-',$originalName2);
            $name2=time().'_'.$str2;
            $file2->move(public_path('images'),$name2);
            $imageUrl2=$name2;
            $product->image2=$imageUrl2;
            }
        // $product->images=$image;
             $product->save();
             return redirect('/admin/product/all');
    }
    public function deleteProduct($id){
        $deleteProduct=Product::find($id);
        $deleteProduct->delete();
        return response()->json($deleteProduct);
        // unlink('public/images/'.$deleteProduct->)
    }
    public function getSubcategories($cat_slug){
        $sub_cat_slug=DB::table('subcategories')->where('cat_slug',$cat_slug)->pluck('sub_name','sub_slug');
        // $sub_cat_id=DB::table("sub_categories")->where("cat_id",$id)->pluck("sub_name","id");;
        return json_encode($sub_cat_slug);
    }
    public function createSlug($title , $id=0){
        $title=strtolower($title);
        $slug=preg_replace('/\s+/u','-',trim($title));
         $allSlug=$this->getRelatedSlugs($slug,$id);
         if(! $allSlug->contains('slug',$slug)){
             return $slug;
         }
         $i=1;
         $is_contain=true;
         do{
             $newSlug=$slug.'-'.$i;
             if(! $allSlug->contains('slug',$newSlug)){
                 $is_contain=false;
                 return $newSlug;
             }
             $i++;
         }while($is_contain);
    }
    protected function getRelatedSlugs($slug ,$id=0){
        return Product::select('slug')->where('slug','like',$slug.'%')
        ->where('id','<>',$id)
        ->get();
    }
}

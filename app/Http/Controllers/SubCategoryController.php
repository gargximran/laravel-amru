<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\Subcategory;
use Datatables;
use Validator;
use DB;
class SubCategoryController extends Controller
{
        public function index(){
        //     if(request()->ajax())
        // {
        //     return datatables()->of(Subcategory::latest()->get())
        //             ->addColumn('action', function($data){
        //                 $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sm">Edit</button>';
        //                 $button .= '&nbsp;&nbsp;';
        //                 $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
        //                 return $button;
        //             })
        //             ->rawColumns(['action'])
        //             ->make(true);
        // }
            $categories=Category::where('category_status','active')->get();
            $subcategories=DB::table('subcategories')
                ->join('categories','subcategories.cat_slug','=','categories.category_slug')
                ->select('subcategories.*','categories.category_name')
                ->get();
            return view('admin.category.subcategory',['categories'=>$categories,'subcategories'=>$subcategories]);
        }
           public function getSubcategory(){
            $subcategories=DB::table('subcategories')
            ->join('categories','subcategories.cat_slug','=','categories.category_slug')
            ->select('subcategories.*','categories.category_name')
            ->get();
            return response()->json($subcategories);
        }
   public function storeData(Request $request){
        $rules = array(
            'sub_name'  =>  'required',           
            'sub_image'  =>  'max:2048'
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }
        $file=$request->file('sub_image');
        $subcategory=new Subcategory;
        $subcategory->sub_name=$request->sub_name;
        $subcategory->sub_slug=$this->createSlug($request->sub_name);
        
        if($file){
            $originalName=$file->getClientOriginalName();
            $str=str_replace(' ','_',$originalName);
            $name=time().'_'.$str;
            $file->move(public_path('images'),$name);
            $imageUrl=$name;
            $subcategory->sub_image=$imageUrl;
        }
        $subcategory->cat_slug=$request->cat_id;
        $subcategory->sub_discount=0;
        $subcategory->sub_status='active';
        $subcategory->user_id=1;
        $subcategory->serial=1;
        $subcategory->save();
        return response()->json(['success' => 'Data Added successfully.']);

        }
        public function updateSubcategory(Request $request){
                    $file=$request->file('sub_image');
                    $subcategory=Subcategory::find($request->id);
                    $subcategory->sub_name=$request->sub_name;
                    // $subcategory->sub_slug=$this->createSlug($request->sub_name);
                    
                    if($file){
                         unlink('public/images/'.$subcategory->sub_image);
                        $originalName=$file->getClientOriginalName();
                        $str=str_replace(' ','_',$originalName);
                        $name=time().'_'.$str;
                        $file->move(public_path('images'),$name);
                        $imageUrl=$name;
                        $subcategory->sub_image=$imageUrl;
                    }
                    $subcategory->cat_slug=$request->cat_id;
                    $subcategory->sub_discount=$request->discount;
                    $subcategory->sub_status=$request->status;
                    $subcategory->user_id=Auth::id();
                    $subcategory->serial=1;
                    $subcategory->save();
                    return response()->json(['success' => 'Data Added successfully.']);
        }
        public function subdestroy($id){
            $subcategory=Subcategory::find($id);
            $subcategory->delete();
            unlink('public/images/'.$subcategory->sub_image);
            return response()->json($subcategory);
        }
        public function createSlug($title , $id=0){
            $title=strtolower($title);
            $slug=preg_replace('/\s+/u','-',trim($title));
            $allSlug=$this->getRelatedSlugs($slug,$id);
            if(! $allSlug->contains('sub_slug',$slug)){
                return $slug;
            }
            $i=1;
            $is_contain=true;
            do{
                $newSlug=$slug.'-'.$i;
                if(! $allSlug->contains('sub_slug',$newSlug)){
                    $is_contain=false;
                    return $newSlug;
                }
                $i++;
            }while($is_contain);
        }
        protected function getRelatedSlugs($slug ,$id=0){
            return Subcategory::select('sub_slug')->where('sub_slug','like',$slug.'%')
            ->where('id','<>',$id)
            ->get();
        }
         
}

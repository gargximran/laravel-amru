<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Category;
use Datatables;
use Validator;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=Category::all();
        return view('admin.category.category',['categoris'=>$category]);
      
    }
 public function showCategory(){
        $category=Category::all();
        return response()->json($category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'category_name'  =>  'required',           
            'category_image'  =>  'required|image|max:2048'
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }
        $file=$request->file('category_image');
        $category=new Category;
        $category->category_name=$request->category_name;
        $category->category_slug=$this->createSlug($request->category_name);
        if($file){
            $originalName=$file->getClientOriginalName();
            $str=str_replace(' ','-',$originalName);
            $name=time().'_'.$str;
            $file->move(public_path('images'),$name);
            $imageUrl=$name;
            $category->category_image=$imageUrl;
        }
        $category->category_status='active';
        $category->cat_discount=0;
        $category->user_id=Auth::id();
        $category->serial=1;
        $category->save();
        return response()->json(['success' => 'Data Added successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //  if(request()->ajax())
        // {
            $data = Category::find($id);
            return response()->json(['data' => $data]);
        // }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $category=Category::find($request->id);
        
        $category->category_name=$request->edit_cat;
        // $category->category_slug=$this->createSlug($request->edit_cat);
        $file=$request->file('category_image');
        if($file){
             unlink('public/images/'.$category->category_image);
            $originalName=$file->getClientOriginalName();
            $str=str_replace(' ','_',$originalName);
            $name=time().'_'.$str;
            $file->move(public_path('images'),$name);
            $imageUrl=$name;
            $category->category_image=$imageUrl;
        }
        $category->cat_discount=$request->discount;
        $category->category_status=$request->status;
        $category->user_id=Auth::id();
        $category->serial=1;
        $category->save();
     

        return response()->json(['success' => 'Data is successfully updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     
        $category=Category::find($id);      
        $category->delete();
        unlink('public/images/'.$category->category_image);
        return response()->json(['done']);   
    }

    public function createSlug($title , $id=0){
        $title=strtolower($title);
        $slug=preg_replace('/\s+/u','-',trim($title));
         $allSlug=$this->getRelatedSlugs($slug,$id);
         if(! $allSlug->contains('category_slug',$slug)){
             return $slug;
         }
         $i=1;
         $is_contain=true;
         do{
             $newSlug=$slug.'-'.$i;
             if(! $allSlug->contains('category_slug',$newSlug)){
                 $is_contain=false;
                 return $newSlug;
             }
             $i++;
         }while($is_contain);
    }
    protected function getRelatedSlugs($slug ,$id=0){
        return Category::select('category_slug')->where('category_slug','like',$slug.'%')
        ->where('id','<>',$id)
        ->get();
    }

}

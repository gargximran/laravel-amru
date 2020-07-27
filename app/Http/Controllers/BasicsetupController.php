<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Basic;
use App\Banner;
use App\Slider;
use App\About;
class BasicsetupController extends Controller
{
    public function index(){
        $basic_info=Basic::where('id',1)->first();
        return view('admin.setting.basic_info',['basic_info'=>$basic_info]);
    }
    public function updateSetup(Request $request){

        $basic_info=Basic::find($request->id);
        $basic_info->phone=$request->phone;
        $basic_info->email=$request->email;
        $basic_info->mobile=$request->mobile;
        $basic_info->fax=$request->fax;
        $basic_info->address=$request->address;
        $file=$request->file('files');
        if($file){
            $originalName=$file->getClientOriginalName();
            $str=str_replace(' ','_',$originalName);
            $name=time().'_'.$str;
            $file->move(public_path('images'),$name);
            $imageUrl=$name;
            $basic_info->logo=$imageUrl;
        }
        else{
            $basic_info->logo=$basic_info->logo;
        }
        $basic_info->save();
        return back();
        
    }
    public function banner(){
        $banner=Banner::all();
        $slider=Slider::all();
        return view('admin.setting.banner_info',['banner'=>$banner,'sliders'=>$slider]);
    }

    public function about_us(){
        $about_us=About::where('id',1)->first();
        return view('admin.setting.about_us',['about_us'=>$about_us]);
    }
    public function updateAbout(Request $request){
        $about=About::find($request->id);
        $about->description=$request->description;        
        $file=$request->file('files');
        if($file){
            unlink('public/images/'.$about->image);
            $originalName=$file->getClientOriginalName();
            $str=str_replace(' ','_',$originalName);
            $name=time().'_'.$str;
            $file->move(public_path('images'),$name);
            $imageUrl=$name;
            $about->image=$imageUrl;
            
        }
        else{
            $about->image=$about->image;
        }
        $about->save();
        return back();
    }
        public function getSlider(){
         $sliders=Slider::all();
         return response()->json($sliders);
    }
    public function newSlider(Request $request){
        $slider=new Slider;
        $slider->title=$request->title;
        $slider->short_description=$request->short_description;      
        $slider->status='active';
        $file=$request->file('file');
        if($file){
            $originalName=$file->getClientOriginalName();
            $str=str_replace(' ','_',$originalName);
            $name=time().'_'.$str;
            $file->move(public_path('images'),$name);
            $imageUrl=$name;
            $slider->image=$imageUrl;
        }
        
        $slider->save();
     return response()->json($slider);
    }
    public function updateSlider(Request $request){
        $slider=Slider::find($request->id);
        $slider->title=$request->title;
        $slider->short_description=$request->short_description;      
        $slider->status='active';
        $file=$request->file('file');
        if($file){
            unlink('public/images/'.$slider->image);
            $originalName=$file->getClientOriginalName();
            $str=str_replace(' ','_',$originalName);
            $name=time().'_'.$str;
            $file->move(public_path('images'),$name);
            $imageUrl=$name;
            $slider->image=$imageUrl;
        }
        
        $slider->save();
     return response()->json($slider);
    }
    public function deleteSlider($id){
        $slider=Slider::find($id);
        $slider->delete();
        unlink('public/images/'.$slider->image);
        return response()->json($slider);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supllier;
use DB;
class SupplierController extends Controller
{
    public function index(){
        
        return view('admin.supplier.supplier');
    }
    public function getdata(Request $request){
        // $supplier=DB::table('suplliers') ->orderBy('id', 'DESC')->get();
        // return response()->json($supplier);

        if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('suplliers')
         ->where('sup_name', 'like', '%'.$query.'%')
         ->orWhere('address', 'like', '%'.$query.'%')
         ->orWhere('phone', 'like', '%'.$query.'%')        
         ->orderBy('id', 'desc')
         ->get();
         
      }
      else
      {
       $data = DB::table('suplliers')
         ->orderBy('id', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        
        
        <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
        <div class="profile-widget">
        <div class="profile-img">
        <a href="{{URL::to("/admin/supplier/view")}}/"'.$row->id.' class="avatar">
        <img src=http://localhost/amru/public/images/'.$row->image.' height="81px" width="40px" >
           
        </a></div>
         <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="profile.html">'.$row->sup_name.'</a></h4>
       
        <div class="small text-muted">        
         <button type="button" class="btn btn-danger btn-xs" onclick="deleteData('.$row->id.')"><i class="fas fa-times"></i></buttpn>
        </div></div></div>
        ';
       }


       


      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
    public function store(Request $request){
        $file=$request->file('sup_image');
        $supplier=new Supllier;
        $supplier->Sup_name=$request->sup_name;
        $supplier->sup_id='sup001';
        $supplier->email=$request->sup_email;
        $supplier->phone=$request->phone;
        $supplier->address=$request->address;
        $supplier->phone=$request->phone;
        if($file){
            $orginalname=$file->getClientOriginalName();
            $str=str_replace(' ','-', $orginalname);
            $name=time().'_'.$str;
            $file->move(public_path('images'), $name);                     
            $imageUrl =$name;
            $supplier->image=$imageUrl; 
        }
        $supplier->save();
        return response()->json($supplier);
      
    }
    public function edit(){
      
    }
    public function update(){
      
    }
    public function deleteData($id){
        $Supllier=Supllier::find($id);      
        $Supllier->delete();
        
        return response()->json(['done']);      
    }

}

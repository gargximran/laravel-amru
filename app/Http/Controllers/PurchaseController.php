<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Purchase;
use App\PurchaseItem;
use App\PurchaseProduct;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Cart;
use DB;
use Session;
class PurchaseController extends Controller
{
    public function index(){
        $cart = Cart::getContent();
        return view('admin.purchase.purchase',['cart'=>$cart]);
    }
    public function purchaseItem(){
        return view ('admin.purchase.purchase_item');
    }
    public function storeData(Request $request){
        $purchase=new PurchaseItem;
        $purchase->name=$request->item_name;
        $file=$request->file('image');
        if($file){
            $orginalname=$file->getClientOriginalName();
            $str=str_replace(' ','-', $orginalname);
            $name=time().'_'.$str;
            $file->move(public_path('images'), $name);                     
            $imageUrl =$name;
            $purchase->image=$imageUrl; 
        }
        $purchase->save();
        return response()->json($purchase);
    }
    public function getdata(){
       $pruchase_item=DB::table('purchase_items')->get();
       return response()->json($pruchase_item);
    }
    public function addCart($id){
        $purchase_item = PurchaseItem::find($id);
        Cart::add([
            'id' => $purchase_item->id,
            'name' => $purchase_item->name,
            'quantity' =>1, 
            'price' => 100, 
            'weight'=>1,
            
            ]);
            $cart = Cart::getContent();
            return response()->json([('ok')]);
    }
    public function getcontentItem(){
        $cart = Cart::getContent();
        return response()->json($cart);
    }
    public function deleteItem($id){
        $item=PurchaseItem::find($id);
        $item->delete();
        unlink('public/images/'.$item->image);
        return response()->json($item);
    }
    public function removeItem($id){
        $item=Cart::remove($id);
        return response()->json($item);
    }
    public function purchaseProduct(Request $request){
        $purchase=new Purchase;
        $purchase->suppleir_id=1;
        $purchase->payment_type=$request->payment_type;
        $purchase->payment=$request->payment;
        $purchase->total=$request->total_amount;      
        $purchase->discount=$request->discount;
        $purchase->user_id=Auth::id();
        $purchase->save();
        $purId = $purchase->id;
        Session::put('pursId', $purId);
        if(count($request->product_name) > 0)
        {
        foreach($request->product_name as $item=>$v){
            $data=array(
                'purchase_id'=>Session::get('pursId'),
                'purchase_item_id'=>$request->item_id[$item],
                'supplier_id'=>1,                              
                'price'=>$request->subprices[$item],
                'qty'=>$request->qtys[$item],
                'qty_type'=>'pcs',
                'subtotal'=>$request->subtotal[$item],
                'status'=>1,
                'return_status'=>0,  
                'created_at'=>Carbon::now(),
                              
            );
            PurchaseProduct::insert($data);
      }
        return back();
        }
    }
    public function purchaselist(){
        // if(request()->ajax())
        // {
        //     return datatables()->of(Purchase::latest()->get())
        //             ->addColumn('action', function($data){
        //                 $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sm">Edit</button>';
        //                 $button .= '&nbsp;&nbsp;';
        //                 $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
        //                 return $button;
        //             })
        //             ->rawColumns(['action'])
        //             ->make(true);
        // }
        $purchase=Purchase::all();
        return view('admin.purchase.purchase_list',['purchase'=>$purchase]);
    }
    public function editPurchase($id){

    }
    public function viewPurchase($id){
        $viewPurchase=PurchaseProduct::where('purchase_id',$id)->get();
        return view('admin.purchase.viewPurchase',['viewPurchase'=>$viewPurchase]);
    }
    public function deletePurchase($id){
        
    }
}

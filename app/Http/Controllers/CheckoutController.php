<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Orderdetails;
use App\Shipping;
use Cart;
use DB;
use Session;
class CheckoutController extends Controller
{
   public function orderProduct(Request $request){
        $shipping=new Shipping;
        $shipping->name=$request->first_name.' '.$request->last_name;
        $shipping->address=$request->address;
        $shipping->phone=$request->phone;
        $shipping->note=$request->note;
        $shipping->save();
        $shipping_id=$shipping->id;
        Session::put('shipping_id',$shipping_id);

        $order=new order;
        $order->customerId=Session::get('customer_id');
        $order->shippingId=Session::get('shipping_id');
        $order->payment_type=$request->payment_type;
        $order->orderTotal=str_replace(',','',Cart::priceTotal());
        $order->save();
        $order_id=$order->id;
        Session::put('order_id',$order_id);
        $cartProduct=Cart::Content();
        if($cartProduct){
            $orderDetail=array();				
          foreach($cartProduct as $cartProduct){

                $orderDetail['orderId'] = Session::get('order_id');
                $orderDetail['productId'] = $cartProduct->id;
                $orderDetail['productName'] = $cartProduct->name;
                $orderDetail['productPrice'] = $cartProduct->price;
                $orderDetail['productQuantity'] = $cartProduct->qty;
                $orderDetail['customer'] = Session::get('customer_id');
                $orderDetail['created_at']=date('Y-m-d',time());
                DB::table('orderdetails')
                ->insert( $orderDetail);
                
                 Cart::destroy();
          
                // Session::flush();
              }
             
              
            }
            return redirect('/');

   }
}

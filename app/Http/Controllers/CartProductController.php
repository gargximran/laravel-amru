<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;
use Session;
class CartProductController extends Controller
{
    public function index($id){
       
        $product= Product::find($id);
        $cart=Cart::add([
            'id' => $product->id,
            'name' => $product->pro_name,
            'qty' =>1, 
            'price' =>$product->sell_price, 
            'weight'=>1,
            'options' => array(
                'image' => $product->images,
                
              )
            
            ]);

            $cartCount = Cart::count();

           
            return response()->json(["cart"=>$cartCount]);

            }

           
    

            public function cartUpdate(Request $request)
                {
                 
                    $id=$request->row_Id;
                    $qty=$request->update_qty;


           
               
               

                    Cart::update($id,$qty);
                    return Cart::count();

                }
            
                public function remove($id)
                {
                    $cartProduct=Cart::remove($id);
                    return Cart::count();
                    
                }

                public function getCartProduct(){
                    $cartProduct=Cart::getContent();
                    
                }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Validator;
use App\Customer;
use App\Review;
use Session;
use Cart;
use DB;
class CustomerController extends Controller
{
    public function customerData(Request $re){


        //  validate input fields after insert data
        $re->validate([
            'email'=>'required|unique:customers',
            'first_name'=>'required',
            'phone'=>'required|unique:customers',
            'address'=>'required',
            'password'=>'required|min:4',
            'city'=>'required|min:3',
        ],[
            'email.required'=> 'Required',
            'email.unique' => 'Already Existed',
            'first_name.required' => 'Required',
            'phone.required' => 'Required',
            'phone.unique' => 'Already Existed',
            'address.required' => 'Required',
            'password.required' => 'Required',
            'password.min' => 'Min 4 character',
            'city.required' => 'Required',
            'city.min'=> 'Min 3 character'
        ]);
     



        
        $customer=new Customer;       
        $customer->email=$re->email;
        $customer->first_name=$re->first_name;    
        $customer->address=$re->address;
        $customer->phone=$re->phone;
        $customer->city=$re->city;
        $customer->division=$re->division;
        $customer->password=bcrypt($re->password);
        $customer->last_name=$re->zip;
        $customer->save();
        $customer_id=$customer->id;
        Session::put('customer_id',$customer_id);
        if(Cart::count()>0){
            return redirect('/checkout');
        }else{
            return redirect('/customer/dashboard');
        }
       


    }
    public function customerprofile(){
       $cus_id= Session::get('customer_id');
       if($cus_id){
        $customer = DB::table('customers')->where('id',$cus_id)
        ->where('status','active')
       ->first();
       $customerproductOrder=DB::table('orderdetails')
       ->join('products','orderdetails.productId','=','products.id')     
       ->where('orderdetails.customer',$cus_id)
       ->select('orderdetails.*','products.images')
       ->get();
        return view('frontend.profile.customerProfile',['customer'=>$customer,'customerproductOrder'=>$customerproductOrder]);
       }else{
           return redirect('/customer/login');
       }
    }
    public function customerreview(Request $request){
        $review=new Review;
        $review->product_id=$request->product_id;
        $review->customer_id= Session::get('customer_id');
        $review->star= $request->star;
        $review->text= $request->text;
        $review->save();
        return back();
    }
    public function customerlogin(Request $request){
        $email= $request->login_email;
        $password= $request->login_password;
        $result = DB::table('customers')->where('email',$email)
             ->where('status','active')
            ->first();
            if($result){
            
    
                    if(Hash::check($password, $result->password))
                    {
                        Session::put('name',$result->first_name);
                        Session::put('customer_id',$result->id);
                        if(Cart::count()>0){
                            return Redirect::to('/checkout');
                           
                        }else{
                            return redirect('/customer/profile');
                        }
                        
                    }
                    session()->flash('exception', 'Your Username or Password is Invalid');
                    return Redirect::to('/customer/login');
         }
                else{
                    session()->flash('exception', 'You are not a valid User!!');
                    return Redirect::to('/customer/login');
                } 
            } 

    }



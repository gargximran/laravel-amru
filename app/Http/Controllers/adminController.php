<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
class adminController extends Controller
{
   public function index(){
       return view('admin.home.mainContent');
   }
   public function login(){
       return view('admin.login.loginform');
   }
   public function allcustomer(){
       $allcustomer=Customer::all();
       return view('admin.customer.allcustomer',['allcustomer'=>$allcustomer]);
   }
}

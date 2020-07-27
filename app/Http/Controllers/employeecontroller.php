<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class employeecontroller extends Controller
{
   public function index(){
       return view('admin.employee.viewEmployee');
   }
}

<?php

namespace App\Http\Controllers;

use App\Models\Mobile;
use App\Models\Customer;
use Illuminate\Http\Request;

class MobileController extends Controller
{
    public function index($id){
        $customer=Mobile::find($id)->Customer;
        return view('text',compact('customer'));
    }

}

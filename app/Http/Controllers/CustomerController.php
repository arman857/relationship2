<?php

namespace App\Http\Controllers;

use App\Models\Mobile;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $Mobile=new Mobile();
        $Mobile->model='oppo reno-7';


        $Customer=new Customer();
        $Customer->name='Arman alam';
        $Customer->email='alam1234@gmail.com';
        $Customer->save();

        $Customer->Mobile()->save($Mobile);
    }

    public function show($id)
    {
    //     $Mobile=Customer::find($id)->Mobile;
    //     $customer->name;
    //    return view('index',compact('Mobile'));
    $customer=Mobile::find($id)->customer;
    $customer->Mobile->model;
    // var_dump($customer);
   return view('index',compact('customer'));
     
    }
}

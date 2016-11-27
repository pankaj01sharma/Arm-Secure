<?php
/**
 * Created by PhpStorm.
 * User: Komal
 * Date: 2016-11-20
 * Time: 8:54 AM
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\customer;
use Illuminate\Support\Facades\Redirect;

class FirstController
{
    public function index()
    {
        return view('alarm_biller.index');
    }
    public function customer_display()
    {
        return view('alarm_biller.customer_detail');
    }
    public function new_work_order_1()
    {
        return view('alarm_biller.new_work_order_1');
    }
    public function proposal()
    {
        return view('alarm_biller.proposal');
    }

    public function site(Request $request)
    {
       $cust=new customer;
        //$cust->firstname=$request->FirstName;
        //$cust->lastname=$request->LastName;
        //$cust->address=$request->Address;
        //$cust->city=$request->City;
        //$cust->postal=$request->PostalCode;
        //$cust->email=$request->Email;
        //$cust->status=$request->CustomerStatus;
        //$cust->type=$request->CustomerType;
        //$cust->cust_since=$request->StartDate;
        //$cust->delivery=$request->DeliveryMethod;
        $cust->CustomerID=$request->custid;
        $cust->FirstName=$request->firstname;
        $cust->LastName=$request->lastname;
        $cust->Address=$request->address;
        $cust->City=$request->city;
        $cust->PostalCode=$request->postal;
        $cust->Email=$request->email;
        $cust->CustomerStatus=$request->status;
        $cust->CustomerType=$request->type;
        $cust->StartDate=$request->cust_since;
        $cust->DeliveryMethod=$request->delivery;



        $cust->save();
        //customer::index(Request::all());
       // return $this->belongsTo(customer::class);
        return view('alarm_biller/site');
    }
    public function site_detail()
    {
        return view('alarm_biller/site_detail');
    }
    public function cust_rmr()
    {
        return view('alarm_biller/cust_rmr');
    }
    public function rfc()
    {
        return view('alarm_biller/rfc');
    }
    public function site_add()
    {
        return view('alarm_biller/site_add');
    }

}
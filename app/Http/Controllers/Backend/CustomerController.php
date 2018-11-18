<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use Session;

class CustomerController extends Controller
{
    //

    public function createCustomer() {
        $customerInfo = null;
    	return view('pages.customer.create-customer', compact('customerInfo'));
    }

    public function managecustomerStore(Request $request) {
        //return $request->all();
        //Customer id
        $customerId = $request->input('id');
        //msgId cheaking
        if($customerId>0) {
           $customerData = Customer::findOrFail($customerId);
        }else{
            $customerData = new Customer();
        }
        //input field
        $customerData->customer_name = $request->input('customer_name');
        $customerData->customer_phone = $request->input('customer_phone');  
        $customerData->customer_address = $request->input('customer_address');  
        $customerData->customer_blood = $request->input('customer_blood'); 
        // cheaking & data save
        if($customerData->save()){
            Session::flash('success', 'Customer Save Successfully');
        }else{
            Session::flash('error', 'Faild to data save');
        }
        return redirect()->back();
    }
    
        //all customer data list
    public function showCustomer() {
        $allcustomers = Customer::all();
        // customer data view in list paga with variable
    	return view('pages.customer.show-customer', compact('allcustomers'));
    }

    public function managecustomerEdit($customerId) {
        $customerInfo = Customer::where('id', $customerId)->first();
        return view('pages.customer.create-customer', compact('customerInfo'));

    }



    //paid Customer method
    public function paidCustomer() {
    	return view('pages.customer.paid-customer');
    }

    //credit Customer method
    public function creditCustomer() {
    	return view('pages.customer.credit-customer');
    }

    // customer delete method
    public function customerDelete($id){
        Customer::find($id)->delete();

        Session::flash('success', 'Message deleted successfully');
        return redirect()->back();
    }


}

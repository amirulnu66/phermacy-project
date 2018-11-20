<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Suppler;
use Session;

class SupplierController extends Controller
{
    //

    // new supplier create method
    public function createSupplier(){
        // company name include
        $companies = Company::all();
        return view('pages.supplier.create', compact('companies'));
    }

    //read supplier on database
    public function showSupplierList() {
        $suppliers=Suppler::all();
        return view('pages.supplier.show', compact('suppliers'));
    }

    public function companySupplerStore(Request $request) {
        $supplerData =$request->input('id');
        if($supplerData>0){
            $supplerData=Suppler::findOrFail($supplerData);
        }else{
            $supplerData= new Suppler();
        }
        $supplerData->suppler_name = $request->input('suppler_name'); 
        $supplerData->suppler_number = $request->input('suppler_number'); 
        $supplerData->join_time = $request->input('join_time'); 
        $supplerData->company_id = $request->input('company_id'); 
        // cheaking & data save
        if($supplerData->save()){
            Session::flash('success', 'Data save Successfully');
        }else{
            Session::flash('feiled', 'Faild to data save');
        }
        return redirect()->back();
    }

    public function companySupplerEdit($id) {
        $supplerInfo=Suppler::where('id', $id)->first();
        return view('pages.supplier.suppler-edit', compact('supplerInfo'));
    }


}

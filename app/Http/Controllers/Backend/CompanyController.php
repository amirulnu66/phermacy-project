<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Company;
use Session;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

        //company list view
    public function companyManage() {
        $companyInfo =null;
        $companies = Company::all();
        //comapny data with variable
        return view('pages.company.manage-company', compact('companies', 'companyInfo'));
    }

        // company data save
    public function companyDataStore(Request $request){
            $companyData = $request->input('id');
        if($companyData>0){
            $companyData = Company::findOrFail($companyData);
        }else{
            $companyData = new Company();
        }
        
        $companyData->company_name = $request->input('company_name'); 
        // cheaking & data save
        if($companyData->save()){
            Session::flash('message', 'Data save Successfully');
        }else{
            Session::flash('errors', 'Faild to data save');
        }
        return redirect()->back();
    }

    public function companyDataEdit($id) {
       $companyInfo = Company::where('id', $id)->first();
       return view('pages.company.manage-company', compact('companyInfo'));
    }

    //company info detelt
    public function companyDataDelete($id){
        $delete = Company::find($id)->delete();
        if($delete){
            Session::flash('message', 'Data deleted Successfully');
        }else{
            Session::flash('errors', 'Faild to data save');
        }
        return redirect()->back();
    }


}

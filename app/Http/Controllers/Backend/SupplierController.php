<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Company;

class SupplierController extends Controller
{
    //

    // new supplier create method
    public function createSupplier(){
        $companies = Company::all();
        return view('pages.supplier.create', compact('companies'));
    }

    //read supplier on database
    public function showSupplier() {
        return view('pages.supplier.show');
    }


}

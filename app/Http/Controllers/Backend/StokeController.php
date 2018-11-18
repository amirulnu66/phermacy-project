<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StokeController extends Controller
{
    //

    //stoke report method
    public function stokeReports(){
    	return view('pages.stokes.stoke');
    }

    //stock-report-supplier-wise method
     public function stSuppReports() {
    	return view('pages.stokes.stock-supplier-wise');
    }

	//stock-report-product-wise method
     public function stProReports() {
    	return view('pages.stokes.stock-product-wise');
    }

    //stock-report-product-wise method
     public function stbatchReports() {
    	return view('pages.stokes.stock-batch-wise');
    }

}

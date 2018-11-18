<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InvoiceController extends Controller
{
    //

    public function envantoryList() {
    	return view('pages.purchase.envantory-report');
    }

    //product sales invoice reports
    public function purchaseList() {
    	return view('pages.purchase.show');
    }
}

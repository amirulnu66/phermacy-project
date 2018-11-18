<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SellController extends Controller
{
    //

    public function createSells()
    {
        return view('pages.sells.show');
    }

    public function showselinvoice() {
    	return view('pages.sells.sell-invoice');
    }

}

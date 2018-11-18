<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    //
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    
    public function showBrands() {
        return view('pages.brands.show');
    }

    public function createBrand() {
        return view('pages.brands.create');
    }




}

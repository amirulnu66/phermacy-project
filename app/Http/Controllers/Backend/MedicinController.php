<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Category;
use App\Models\Suppler;

class MedicinController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function createMedicin(){
        //all company list
        $companies=Company::all();
        // category all list
        $categories=Category::all();
        //all supplers list
        $suppliers=Suppler::all();

        return view('pages.medicine.create', compact('companies', 'categories', 'suppliers'));
    }

    public function showMedicin(){
        return view('pages.medicine.show');
    }

}

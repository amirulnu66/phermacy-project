<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MedicinController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function createMedicin(){
        return view('pages.medicine.create');
    }

    public function showMedicin(){
        return view('pages.medicine.show');
    }

}

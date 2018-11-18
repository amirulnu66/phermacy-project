<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaffController extends Controller
{
    //

	//add new staff create method
    public function createStaff(){
    	return view('pages.staff.create');
    }

    //show all staff method
     public function showStaff() {
    	return view('pages.staff.show');
    }
}

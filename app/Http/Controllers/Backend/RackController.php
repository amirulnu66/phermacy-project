<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RackController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function manageRack() {
        return view('pages.rack.rack-manage');
    }

}

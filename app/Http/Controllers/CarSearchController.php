<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarSearchController extends Controller
{
    public function index(){
        return view('carSearch');
    }
}

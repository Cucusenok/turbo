<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CarsController extends Controller
{
    public function index(){
        $cars = DB::table('cars')->paginate();
        
        return view('cars', ['cars'=>$cars] );
    }
}
